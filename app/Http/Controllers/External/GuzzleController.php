<?php
namespace App\Http\Controllers\External;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Http\Request as LaraRequest;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class GuzzleController extends Controller
{
	 public function direct_flight_search(){
	 	$iata = file_get_contents(storage_path().'\app\iata\iata.json');        
        $json = json_decode($iata, true);
        return view('direct_flight_search',['json'=>$json]);
    }	
	public function flight_search(LaraRequest $request){
		
	    $pram = null;
	    if($request->departure_arrival_date){
		    $date = explode(" - ", $request->departure_arrival_date);
		    $departure = !empty($date[0]) ? date('Y-m-d',strtotime($date[0])) : date('Y-m-d');
		    $return = !empty($date[1]) ? date('Y-m-d', strtotime($date[1])) : date('Y-m-d', strtotime($departure . "+ 7days"));
		    $difference = date('Y-m-d', strtotime($departure . "+ 15days"));
		    if ($return > $difference) {
		    $this->set_session('Please Select The Return Date Less Than Fifteen Days',False);
	   		return redirect()->back();
		    }
	    	$pram .= "departuredate={$departure}&returndate={$return}";
	    }
	    foreach ($request->except("departure_arrival_date") as $key => $value) {
	    	$pram .= $value ? "&".$key."=".$value : "";
	    }
		try {
			$client = new Client(
				[ 
					'base_uri' => 'https://api.test.sabre.com/v1/'
				]
			);

			$response = $client->get('shop/flights?'.$pram, [
				'headers' => [
					'Authorization' => 'Bearer T1RLAQK1K4f7zGhW6EzACVKzbHEOQ3/91RBsHSKWOv10ZPZcb/tBjaF6AADA+YE8aeVdGVVfdqPo/s1BxECT/GdZ7hi8S6BQD9MfRIUheFTWGzy5qxJ+kwGotfu3TnM3CdS5oDzYQIbirDxpDEXMcCU/ksICIn5ZhYDptRaPGWF/p4/Vxx8SplmKnkNzEdv6eUqX/1PxH2oZfjYVaUZPHEc9aPoRGzxl5EcWbkxJMP3vvG0C/QxaJ+tGFFrfOhEwMj/LmgFrlz6IiWJqWqTJ2gMcB2xKtkIMkQ/+2O3TkyHn4OOM61UR2tV2EtbV',
					'Accept' => 'application/json',
					'Content-Type' => 'application/json',
				]
			]);
			
			$args['data'] =  $response->getBody();
			$args['data'] = json_decode($args['data']);
			$args['links'] = $args['data'];
			$next = str_replace("offset=".$request->offset, "offset=".($request->offset+10),$pram);
			$prev = str_replace("offset=".$request->offset, "offset=".($request->offset-10),$pram);
			$args['next'] = route('flight_search').'?'.$next;
			$args['prev'] = route('flight_search').'?'.$prev;
			$args['data'] = $args['data']->PricedItineraries;
			
			return view('flight_search')->with($args);
		} catch (RequestException $e) {
			$this->set_session('Caught exception: Result Not found'.  "\n",false);
	   		return redirect()->back();
		}
	}

	public function flight_detail(LaraRequest $request ,$tagID){
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
			return view('traveller_details')->with($args);
		} catch (RequestException $e) {
			$this->set_session('Caught exception: '. $e->getMessage() .  "\n",false);
			return redirect()->back();			
		}  
	}
}