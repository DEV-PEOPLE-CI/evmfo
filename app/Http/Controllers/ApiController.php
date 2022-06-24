<?php
/** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class ApiController extends Controller
{
    protected $url = 'http://api.eveilmedia.net/api';
    protected $version = '/v1/';
    protected $username = 'admindevpeople@eveilmedia.net';
    protected $password = '#Dev_People_CI_@@_#';


    /**
     * @throws JsonException
     */


    private function convertJson($data){
        $data = utf8_encode($data);
        return json_decode($data, true,512, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    protected function initAPIs(){
        $client = new Client(['base_uri' => 'http://api.eveilmedia.net/api/']);
        $auth = $client->request('post', 'auth/admin',[
            'form_params' => [
                'email' => $this->username,
                'password' => $this->password
            ]
        ]);
        return $this->convertJson($auth->getBody());
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */

    public function requestData(string $method='', string $uri=''){
        $client = new Client();
        $res = $client->request($method, 'http://api.eveilmedia.net/api/v1/'.$uri, [
            'headers' => [
                'Authorization' => 'Bearer '.$this->InitAPIs(),
                'Accept' => 'application/json',
            ]
        ]);
        return $this->convertJson($res->getBody());
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */

    public function sendData($method, $uri, $payload){
        $client = new Client();
        $res = $client->request($method, 'http://api.eveilmedia.net/api/v1'.$uri, [
            'headers' => [
                'Authorization' => 'Bearer '.$this->InitAPIs(),
                'Accept' => 'application/json',
            ],
            'form_params' => $payload
        ]);
        return $this->convertJson($res->getBody()->getContents());
    }

    public function setMessage(string $successMessage, string $failMessage, $status){
        $session = $failMessage;
        if($status === 200) {
            $session = $successMessage;
        }
        return $session;
    }
}
