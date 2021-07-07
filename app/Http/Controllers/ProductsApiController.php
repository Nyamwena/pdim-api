<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\ScannedProductsReport;

class ProductsApiController extends Controller
{
    public function index()
    {
        $products =  Product::all();
        $response["products"] = $products;
        $response["success"] = 1;
        return response()->json($response);
    }

    public function show($barcode)
    {
		
		
        $products = DB::table('products')
        ->select('*')
        ->where('barcode', '=', $barcode)
        ->get();

        $response["products"] = $products;
        $response["success"] = 1;
		$response["error"] = 0;
        return response()->json($response);
    }


    public  function storeScannedItems(Request $request){

        $scanned = ScannedProductsReport::create($request->all());
         return response()->json($scanned, 201);
    }

}
