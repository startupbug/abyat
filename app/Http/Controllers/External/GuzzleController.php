<?php
namespace App\Http\Controllers\External;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Http\Request as LaraRequest;
use GuzzleHttp\Exception\RequestException;



class GuzzleController extends Controller
{
	public function flight_search(){

		try {
			$client = new Client(
				[ 
					'base_uri' => 'https://api-crt.cert.havail.sabre.com/v1/'
				]
			);
			$response = $client->get('shop/flights?origin=JFK&destination=LAX&departuredate=2018-10-07&returndate=2018-10-09&onlineitinerariesonly=N&limit=10&offset=1&eticketsonly=N&sortby=totalfare&order=asc&sortby2=departuretime&order2=asc&pointofsalecountry=US&enabletagging=true', [
				'headers' => [
					'Authorization' => 'Bearer T1RLAQK1K4f7zGhW6EzACVKzbHEOQ3/91RBsHSKWOv10ZPZcb/tBjaF6AADA+YE8aeVdGVVfdqPo/s1BxECT/GdZ7hi8S6BQD9MfRIUheFTWGzy5qxJ+kwGotfu3TnM3CdS5oDzYQIbirDxpDEXMcCU/ksICIn5ZhYDptRaPGWF/p4/Vxx8SplmKnkNzEdv6eUqX/1PxH2oZfjYVaUZPHEc9aPoRGzxl5EcWbkxJMP3vvG0C/QxaJ+tGFFrfOhEwMj/LmgFrlz6IiWJqWqTJ2gMcB2xKtkIMkQ/+2O3TkyHn4OOM61UR2tV2EtbV',
					'Accept' => 'application/json',
					'Content-Type' => 'application/json',
				]
			]);
			$args['data'] =  $response->getBody();
			$args['data'] = json_decode($args['data']);
			$args['links'] = $args['data'];
			$href = $args['links']->Links[0]->href;
			$args['next_link'] = str_replace("offset=1", "offset=11",$href);
			$args['data'] = $args['data']->PricedItineraries; 
			 // dd($args);
			return view('flight_search')->with($args);
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}    
	}

	public function flight_detail(LaraRequest $request ,$tagID){
		// dd($tagID);
		$detail_api = 'https://api-crt.cert.havail.sabre.com/v1/shop/flights/tags/';
		try {
			$client = new Client(
				[ 
					'base_uri' => 'https://api-crt.cert.havail.sabre.com/v1/'
				]
			);
			$response = $client->get('shop/flights/tags/'. $tagID, [
				'headers' => [
					'Authorization' => 'Bearer T1RLAQK1K4f7zGhW6EzACVKzbHEOQ3/91RBsHSKWOv10ZPZcb/tBjaF6AADA+YE8aeVdGVVfdqPo/s1BxECT/GdZ7hi8S6BQD9MfRIUheFTWGzy5qxJ+kwGotfu3TnM3CdS5oDzYQIbirDxpDEXMcCU/ksICIn5ZhYDptRaPGWF/p4/Vxx8SplmKnkNzEdv6eUqX/1PxH2oZfjYVaUZPHEc9aPoRGzxl5EcWbkxJMP3vvG0C/QxaJ+tGFFrfOhEwMj/LmgFrlz6IiWJqWqTJ2gMcB2xKtkIMkQ/+2O3TkyHn4OOM61UR2tV2EtbV',
					'Accept' => 'application/json',
					'Content-Type' => 'application/json',
				]
			]);

			$args['data'] =  $response->getBody();
			$args['data'] = json_decode($args['data']);
			// $args['links'] = $args['data'];
			// $href = $args['links']->Links[0]->href;
			// $args['next_link'] = str_replace("offset=1", "offset=11",$href);
			// $args['data'] = $args['data']->PricedItineraries; 
			//dd($args);
			return view('traveller_details')->with($args);
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}    
	}
}
