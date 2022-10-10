<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class PaymentController extends Controller
{
    public function payment(){



        $client = new Client();

        $response = $client->request('POST', 'https://next-stg.paymobsolutions.com/api/next/v1/next/onboard/', [
          'body' => '{"api_key":"ZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6VXhNaUo5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TWpJM01qUXdMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkuSC1jN25YSHUtSmZjamdkZ2E1WnlxVS1NVDhzV1JoM2w2U0FPekhmNGZYcjVkb0RXVTRCdlp0eWhfbDE3WF96ekxDYVEwSTBxN1hTR003M0xRd3VfZmc="}',
          'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
          ],
        ]);

        echo $response->getBody();
    }
}
/