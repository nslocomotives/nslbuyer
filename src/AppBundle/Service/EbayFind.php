<?php 

namespace AppBundle\Service;

use \DTS\eBaySDK\Constants;
use \DTS\eBaySDK\Finding\Services;
use \DTS\eBaySDK\Finding\Types;
use \DTS\eBaySDK\Finding\Enums;

class EbayFind
{
	public function getEbayListings($data)
	{
		
		/**
		* Create the service object.
		*/
		$service = new Services\FindingService([
			'apiVersion' => '1.13.0',
			'credentials' => $data['credentials'],
			//'sandbox'     => true,
			//'debug'      => true,
			'globalId'    => Constants\GlobalIds::GB,
			//'authToken'   => $ebay_creds['sandbox']['authToken']
		]);
		
		/**
        * Create the requestFind object.
        */
        $request = new Types\FindItemsAdvancedRequest();
		
		/**
		* Assign the keywords.
		*/
		$request->keywords = $data['keywords'];
		
		$request->descriptionSearch = True;
		
		/**
		* Filter results to only include auction items or auctions with buy it now.
		*/
		$itemFilter = new Types\ItemFilter();
		$itemFilter->name = 'ListingType';
		$itemFilter->value[] = 'Auction';
		$itemFilter->value[] = 'AuctionWithBIN';
		$request->itemFilter[] = $itemFilter;
		/**
		* Add additional filters to only include items that fall in the price range of $1 to $10.
		*
		* Notice that we can take advantage of the fact that the SDK allows object properties to be assigned via the class constructor.
		*/
		
		$data['maxPrice'] = number_format($data['maxPrice']/100,2);
				
		$request->itemFilter[] = new Types\ItemFilter([
			'name' => 'MaxPrice',
			'value' => [$data['maxPrice']]
		]);
		/**
		* Sort the results by current price.
		*/
		$request->sortOrder = 'EndTimeSoonest';
		/**
		
		/**
		* Send the request.
		*/
		$response = $service->findItemsAdvanced($request);
		
		if (isset($response->errorMessage)) {
			foreach ($response->errorMessage->error as $error) {
				$data['alert'][] = $error->message;
			}
		}

		$count=0;
		if ($response->ack !== 'Failure') {
			foreach ($response->searchResult->item as $item) {
				$count++;
				if (isset($item->shippingInfo->shippingServiceCost)) {
					$shipping = $item->shippingInfo->shippingServiceCost->value;
				} else {
					$shipping = 'Not Set';
				}
				$data['results'][]= array(
					'row'			=> $count,
					'itemId' 		=> $item->itemId,
					'title'  		=> $item->title,
					'TimeLeft'	 	=> $item->listingInfo->endTime,
					'currenyId' 	=> $item->sellingStatus->currentPrice->currencyId,
					'value'			=> $item->sellingStatus->currentPrice->value,
					'viewItemURL' 	=> $item->viewItemURL,
					'galleryURL' 	=> $item->galleryURL,
					'shipping' 		=> $shipping,
					'primary_cat'	=> $item->primaryCategory->categoryName
					);

			}
        }
		
		// return the time unformatted,
		return $data;
	}
}