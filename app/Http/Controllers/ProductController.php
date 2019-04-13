<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class ProductController extends Controller
{


    public function productoTienda($sku)
    {
    	$headers = [
    		'Accept' => 'application/json',
    		'RIPLEY-APP-VERSION' => '10.0.0.58',
    		'RIPLEY-SUCURSAL' => '0012',
    		'RIPLEY-VENDEDOR' => '613794502',
    		'RIPLEY-POS' => '359878063204677',
    		'Ocp-Apim-Subscription-Key' => '2533a22c550e481aae376c2bfcd43d0f',
		];

		$client = new GuzzleClient([
		    'headers' => $headers
		]);

		$response = $client->get('https://clripley-qa.azure-api.net/productos/api/Producto/12?ean13=' . $sku);

		return $response;
    }
}
