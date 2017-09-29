<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\MessageGenerator;
use AppBundle\Service\EbayTime;
use AppBundle\Service\EbayFind;


class DefaultController extends Controller
{
	
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $ebay_creds	= $this->getParameter('ebay_production');
		// Get random message
		$messageGenerator = new MessageGenerator();
		$message = $messageGenerator->getHappyMessage();

		// Create ebay time.
		$ebayTime = new EbayTime();
		$ebayTime = $ebayTime->getEbayTime($ebay_creds['credentials']);
		
		// replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
			'rand_message'  => $message,
			'ebay_time'     => $ebayTime,
        ));
    }
	
    /**
     * @Route("/finding", name="finding")
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
}
