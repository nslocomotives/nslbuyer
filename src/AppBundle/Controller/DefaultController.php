<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\MessageGenerator;
use AppBundle\Service\EbayTime;
use AppBundle\Service\EbayFind;
use AppBundle\Service\EbayAppToken;
use Psr\Log\LoggerInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager();

		//$logger = $this->get('logger');

        //$ebay_creds	= $this->getParameter('ebay_production');
		// Get random message
		$messageGenerator = new MessageGenerator();
		$message = $messageGenerator->getHappyMessage();

		//get widget data
		$user = $this->container->get('security.context')->getToken()->getUser();
		$searches= $em->getRepository('AppBundle:Search')->findByUser($user);
		$filters= $em->getRepository('AppBundle:EbayFilters')->findByUser($user);
		
		
		// Create ebay time.
		//$ebayTime = new EbayTime();
		//$ebayTime = $ebayTime->getEbayTime($ebay_creds['credentials']);
		
		
		//$ebay_creds	= $this->getParameter('ebay_sandbox');
		//$ebay_creds['sandbox_mode'] = true;
		//$logger->info(var_export($ebay_creds, true));
		
				// Create token.
		//$ebayAppToken = $this->get('app.ebay_app_token');
		//$ebayAppToken = $ebayAppToken->getEbayAppToken($ebay_creds);
		
		
		if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        return $this->render('default/index.html.twig', array(
			'rand_message'  => $message,
		));
		} else {
        return $this->render('default/index_authenticated.html.twig', array(
			'rand_message'  => $message,
			'searchTally'	=> count($searches),
			'filterTally'	=> count($filters),
		));
		}
    }
	
	/**
	* @Route("/admin", name="admin")
	* @Security("has_role('ROLE_SUPER_ADMIN')")
	*/
	public function adminAction()
	{
		$data = [];
		return $this->render('default/admin.html.twig',$data);
	}
	
    /**
     * @Route("/finding", name="finding")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     */
    public function findAction(Request $request)
    {
		$data = [];
		$data = $this->getParameter('ebay_production');	
		$data['keywords'] = 'job lot watch';
        
		// Get listings from ebay
		$ebayFind = new EbayFind();
		$data = $ebayFind->getEbayListings($data);
		
		// replace this example code with whatever you need
        return $this->render('default/finding.html.twig', $data);
    }
	
	/**
     * @Route("/send-notification", name="send_notification")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->generateNotification('Hello world !');
        $notif->setMessage('This a notification.');
        $notif->setLink('http://symfony.com/');
        $manager->addNotification($this->getUser(), $notif);


        // or the one-line method :
        // $manager->createNotification($this->getUser(), 'Notification subject','Some random text','http://google.fr');

        return $this->redirectToRoute('homepage');
    }
}
