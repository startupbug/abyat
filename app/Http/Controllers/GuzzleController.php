<?php
namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;



class GuzzleController extends Controller
{
    public function getRemoteData(){

        //try {
            $client = new Client(
                [ 
                    'base_uri' => 'https://api-crt.cert.havail.sabre.com/v1/', 
                    'headers' => [
                                    'Authorization' => 'Bearer T1RLAQJraMU7+qLbSDwrfu8im/aBFhPUPBDRku7zKw41JhxPSXvLayovAADA85L2SoAXv2OqbtPuswsl7ry6cp4l/Bx0j1Mqc79sCvzaBmyvqHWvquweU47t8e7PYYZ2RFBzGlPQGaVE+fe6iy2EQnmdHslyKp+jHN0zmdYkRJIIM9q9hKm1Rxxdm40R3s7B1DtP70Xt9zq3fVogfSe7dxAAJNNPD1fQFhxMMRAbb+O4cgitPZyWu5duKUtO652eudNL4JmXdWFTgFVB/SJgqWQ/qBBENuZdQo2kz03HuGA3Jbw3v1b5haBULf6s',
                                    'content-type'=>'application\json',
                                    'accept' => 'application\json'
                                ]
                ]
            );
             //dd($client);
            $response = $client->get('shop/flights?origin=JFK&destination=LAX&departuredate=2018-10-07&returndate=2018-10-09&onlineitinerariesonly=N&limit=10&offset=1&eticketsonly=N&sortby=totalfare&order=asc&sortby2=departuretime&order2=asc&pointofsalecountry=US');
            // dd($response);
            $data =  $response->getBody();
            $data = json_decode($data);
           // dd($data);
       // } catch (Exception $e) {
          //  echo 'Caught exception: ', $e->getMessage(), "\n";
        //}
    
    }
}
