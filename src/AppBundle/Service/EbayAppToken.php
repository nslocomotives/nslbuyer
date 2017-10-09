<?php 

namespace AppBundle\Service;

use \DTS\eBaySDK\OAuth\Services;
use \DTS\eBaySDK\OAuth\Types;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Token;


class EbayAppToken
{	
	private $logger;
	private $em;
	
    public function __construct(LoggerInterface $logger, \Doctrine\ORM\EntityManager $em)
    {
        $this->logger = $logger;
		$this->em = $em;
    }
	
	public function getEbayAppToken($data){
		
		$this->logger->info(var_export($data, true));
		
		/**
		* Create the service object.
		*/
		if ($data['sandbox'] = true) {
			$service = new Services\OAuthService([
				'credentials' => $data['credentials'],
				'ruName'      => $data['ruName'],
				'sandbox'     => true
			]);
		} else {
			$service = new Services\OAuthService([
				'credentials' => $data['production']['credentials'],
				'ruName'      => $data['production']['ruName'],
			]);
		}
	
		/**
		* Send the request.
		*/
		$response = $service->getAppToken();
	
		/**
		* Output the result of calling the service operation.
		*/
		$this->logger->info("getEbayAppToken Status Code:". $response->getStatusCode());
			if ($response->getStatusCode() !== 200) {
			$this->logger->error("getEbayAppToken - ".$response->error." - ".$response->error_description);
		} else {
			$this->logger->debug("getEbayAppToken - Token:".
				$response->access_token." - Type - ".
				$response->token_type." - Expires in - ".
				$response->expires_in." - Refresh Token - ".
				$response->refresh_token
			);
			
			$token = new Token;
			$token->setTokenType(0);
			$token->setToken($response->access_token);
			$this->em->persist($token);
			$this->em->flush();
		}	
	}
	
	public function getEbayUserToken($data, $logger){
		
		//$logger = $this->get('logger');
		$logger->info(var_export($data, true));
		
		/**
		* Create the service object.
		*/
		if ($data['sandbox'] = true) {
			$service = new Services\OAuthService([
				'credentials' => $data['credentials'],
				'ruName'      => $data['ruName'],
				'sandbox'     => true
			]);
		} else {
			$service = new Services\OAuthService([
				'credentials' => $data['production']['credentials'],
				'ruName'      => $data['production']['ruName'],
			]);
		}
	
		/**
		* Send the request.
		*/
		$response = $service->getAppToken();
	
		/**
		* Output the result of calling the service operation.
		*/
		$logger->info("getEbayAppToken Status Code:". $response->getStatusCode());
			if ($response->getStatusCode() !== 200) {
			$logger->error("getEbayAppToken - ".$response->error." - ".$response->error_description);
		} else {
			$logger->debug("getEbayAppToken - Token:".
				$response->access_token." - Type - ".
				$response->token_type." - Expires in - ".
				$response->expires_in." - Refresh Token - ".
				$response->refresh_token
			);
		return $response;	
		}
	}
	
	public function refreshEbayUserToken($data, $logger){
		
		//$logger = $this->get('logger');
		$logger->info(var_export($data, true));
		
		/**
		* Create the service object.
		*/
		if ($data['sandbox'] = true) {
			$service = new Services\OAuthService([
				'credentials' => $data['credentials'],
				'ruName'      => $data['ruName'],
				'sandbox'     => true
			]);
		} else {
			$service = new Services\OAuthService([
				'credentials' => $data['production']['credentials'],
				'ruName'      => $data['production']['ruName'],
			]);
		}
	
		/**
		* Send the request.
		*/
		$response = $service->getAppToken();
	
		/**
		* Output the result of calling the service operation.
		*/
		$logger->info("getEbayAppToken Status Code:". $response->getStatusCode());
			if ($response->getStatusCode() !== 200) {
			$logger->error("getEbayAppToken - ".$response->error." - ".$response->error_description);
		} else {
			$logger->debug("getEbayAppToken - Token:".
				$response->access_token." - Type - ".
				$response->token_type." - Expires in - ".
				$response->expires_in." - Refresh Token - ".
				$response->refresh_token
			);
		return $response;	
		}
	}
}