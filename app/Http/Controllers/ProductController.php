<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use App\Product;

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

    public function findProductBySku($sku)
    {
        $products = Product::all();

        foreach ($products as $product){
            if ($product->sku == $sku){
                return $product;
            }
        }

        return NULL;
    }

    public function wasPaid($sku)
    {
        $products = Product::all();

        foreach ($products as $product){
            if ($product->sku == $sku){
                $product->delete();
                return 1;
            }
        }

        return 0;
    }

    public function findBySkuArduino($sku)
    {
        $products = Product::all();

        foreach ($products as $product){
            if ($product->sku == $sku){
                return 1;
            }
        }

        return 0;
    }
}
