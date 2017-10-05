<?php 

namespace AppBundle\Service;

use \DTS\eBaySDK\OAuth\Services;
use \DTS\eBaySDK\OAuth\Types;
use Psr\Log\LoggerInterface;


class EbayAppToken
{
	public function getEbayAppToken($data, $logger){
		
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
		}
	}
}