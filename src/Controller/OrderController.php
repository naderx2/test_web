<?php

namespace App\Controller;

use League\Csv\Writer;
use App\Entity\Article;
use App\Entity\ArticleCommande;
use App\Entity\Commande;
use App\Entity\Contact;
use App\Repository\ArticleCommandeRepository;
use App\Repository\ArticleRepository;
use App\Repository\CommandeRepository;
use App\Repository\ContactRepository;
use SplTempFileObject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Order;

class OrderController extends AbstractController
{
    public function __construct(
        private ContactRepository $contactRepository,
        private ArticleRepository $articleRepository,
        private CommandeRepository $commandeRepository,
        private ArticleCommandeRepository $articleCommandeRepository,
        private Order $service
    ){

    }

    #[Route('/orders', name: 'app_orders')]
    public function orders(CommandeRepository $commandeRepository): Response
    {
        //listes orders
            $orders = $commandeRepository->findAll();

            return $this->render('order/index.html.twig', [
            'orders' => $orders,
            ]);
}/*GET /flow/orders_to_csv
récupère les nouvelles commandes auprès de l’API
stock les commandes en base de données
répond un csv avec les nouvelles commandes = route export
*/
    #[Route('/export', name: 'app_to_csv')]
    public function export(): Response
    {
        // prepare csv
        $csv = Writer::createFromFileObject(new SplTempFileObject());
        $csv->insertOne(['order', 'delivery_name', 'delivery_address','delivery_country', 'delivery_zipcode', 'delivery_city','items_count','item_id','item_quantity','line_price_excl_vat','line_price_incl_vat']);
      // get all orders a traités in API
        $response=$this->service->OrdersAPI();
        foreach ($response['results'] as $order){

            $conactId= $order['DeliverTo'];
            // appel function checkContact
            $contact = $this->checkContact($conactId);
            if(!$contact){
                //si n'existe pas alors get contact depuis api Contacts
                $contactApi = $this->getContactFromAPI($conactId);
                //  add contact in database
                $this->addContact($conactId,$contactApi['AccountName'],$contactApi['AddressLine1'],$contactApi['AddressLine2'],$contactApi['City'],$contactApi['ContactName'],$contactApi['Country'],$contactApi['ZipCode']);
                $contact = $this->checkContact($conactId);
            }
      // add order
           $commande = $this->addOrder($order['Amount'],$order['Currency'],$contact,$order['OrderID'],$order['OrderNumber']);
           // parcourir listes des articles
            foreach ($order['SalesOrderLines']['results'] as $article){
                // appel checkArticle
                $product = $this->checkArticle($article['Item']);
                if(!$product){
                    // add article puisque n'esxite pas in DB
                    $product = $this->addArticle($article['Amount'],$article['Description'],$article['Discount'],$article['Item'],$article['ItemDescription'],$article['Quantity'],$article['UnitCode'],$article['UnitDescription'],$article['UnitPrice'],$article['VATAmount'],$article['VATPercentage']);
                }
                // prepare  ArticleCommande
                $articleCommande = new ArticleCommande();
                $articleCommande->setArticle($product);
                $articleCommande->setCommande($commande);
                // save ArticleCommande
                $this->articleCommandeRepository->save($articleCommande,true);
                // remplir file csv
        $csv->insertOne([$order['OrderNumber'],$contact->getContactName(),$contact->getAddressLine1(),$contact->getCountry(),$contact->getZipCode(),$contact->getCity(),$article['Quantity'],$article['Item'],$article['Quantity'],$article['VATAmount'],$article['VATPercentage']]);

            }

        }

        $csv->output('orders_to_csv.csv');
        die;
        //return $this->redirectToRoute('app_orders', [], Response::HTTP_SEE_OTHER);
    }
    // return one Conctact depuis l'api avec leur id passé en parametre
  private function getContactFromAPI($DeliverTo)
  {
      $contacts = $this->service->ContactAPI();
      $i=0;
      $exit=false;
      while ($i<count($contacts['results']) and !$exit){
          if($contacts['results'][$i]['ID']===$DeliverTo){
             $exit=true;
          }
          else
         $i++;
      }

      return $contacts['results'][$i];

   }
    // save commande
  private function addOrder($amount,$currency,$contact,$orderId,$orderNumber): Commande
  {
        $order = new Commande();
        $order->setAmount($amount);
        $order->setCurrency($currency);
        $order->setDeliverTo($contact);
        $order->setOrderId($orderId);
        $order->setOrderNumber($orderNumber);
        $this->commandeRepository->save($order,true);
        return $order;

  }
    // save contact
    private function addContact($contactId,$acountName,$adresse1,$adresse2,$city,$contactName,$country,$zipCode)
    {
        $contact = new Contact();
        $contact->setContactId($contactId);
        $contact->setAccountName($acountName);
        $contact->setAddressLine1($adresse1);
        $contact->setAddressLine2($adresse2);
        $contact->setCity($city);
        $contact->setContactName($contactName);
        $contact->setCountry($country);
        $contact->setZipCode($zipCode);
        $this->contactRepository->save($contact,true);
    }
// save article
    private function addArticle(
        $amount,
        $description,
        $discount,
        $item,
        $itemDescription,
        $quantity,
        $unitCode,
        $unitDescription,
        $unitPrice,
        $VATAmount,
        $VATPercentage
    ): Article
    {
      $article = new Article();
      $article->setAmount($amount);
      $article->setDescription($description);
      $article->setDiscount($discount);
      $article->setItem($item);
      $article->setItemDescription($itemDescription);
      $article->setQuantity($quantity);
      $article->setUnitCode($unitCode);
      $article->setUnitDescription($unitDescription);
      $article->setUnitPrice($unitPrice);
      $article->setVatAmount($VATAmount);
      $article->setVATPercentage($VATPercentage);
      $this->articleRepository->save($article,true);
      return $article;

    }
// function verfifier l'existance d'un contact in database
    private function checkContact($contactId): ?Contact
    {
         $contact = $this->contactRepository->findByContactId($contactId);
          return $contact;
    }
// function verfifier l'existance d'un article in database
    private function checkArticle($item): ?Article
    {
        $article = $this->articleRepository->findByItem($item);
        return $article;

    }
}
