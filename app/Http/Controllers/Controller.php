<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected function set_session($msg, $status){
	     session()->put('result', $status);
	     session()->put('msg', $msg);
    }

    protected function call_api_post($request_uri){

        try {
			$client = new Client(
				[ 
					'base_uri' => env("SABRE_END_POINT")
				]
			);
			$response = $client->post($request_uri, [
				'headers' => [
					'Authorization' => env("SABRE_TOKEN"),
					'Accept' => 'application/json',
					'Content-Type' => 'application/json',
                ],
                'json' => array (
                    'GetHotelDescriptiveInfoRQ' => 
                    array (
                      'HotelRefs' => 
                      array (
                        'HotelRef' => 
                        array (
                          0 => 
                          array (
                            'HotelCode' => '7521',
                          ),
                          1 => 
                          array (
                            'HotelCode' => '22390',
                          ),
                        ),
                      ),
                      'DescriptiveInfoRef' => 
                            array (
                                'PropertyInfo' => true,
                                'LocationInfo' => true,
                                'Amenities' => true,
                                'Descriptions' => 
                                array (
                                'Description' => 
                                array (
                                    0 => 
                                    array (
                                    'Type' => 'Dining',
                                    ),
                                ),
                                ),
                                'Airports' => true,
                                'AcceptedCreditCards' => true,
                            ),
                    ),
                  )
            ]);

            // $response = $client->request('POST', 'http://httpbin.org/post', [
            //     'form_params' => [
            //         'field_name' => 'abc',
            //         'other_field' => '123',
            //         'nested_field' => [
            //             'nested' => 'hello'
            //         ]
            //     ]
            // ]);
            
			$body =  $response->getBody();
			$decode_body = json_decode($body);
            return $decode_body;            
            
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
        }

    }
}
