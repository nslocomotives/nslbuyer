<?php 

namespace AppBundle\Service;

use \DTS\eBaySDK\Constants;
use \DTS\eBaySDK\Shopping\Services;
use \DTS\eBaySDK\Shopping\Types;

class EbayTime
{
    public function getEbayTime($credentials)
    {
		
		// Create the service object.
		$service = new Services\ShoppingService([
			'credentials' => $credentials,
			'globalId'    => Constants\GlobalIds::GB,
		]);

		// Create the request object.
		$request = new Types\GeteBayTimeRequestType();
		
		// Send the request to the service operation.
        $response = $service->geteBayTime($request);
		
		// return the time unformatted,
		return $response->Timestamp;
		
    }
}