<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScannedProductsReport;
use App\Models\Product;

class ProductController extends Controller
{
    public function  addProducts(){
        return view('logic.add_products');
    }

    public function  saveProducts(Request $request){

        $this ->validate($request, [


        ]);

        $saveProducts = new Product();

        $saveProducts->productName = $request->input('pname');
        $saveProducts->productDescription = $request->input('description');
        $saveProducts->price = $request->input('price');
        $saveProducts->barcode = $request->input('barcode');
        $saveProducts->qrCode = $request->input('qrcode');
        $saveProducts->category = $request->input('category');
        $saveProducts->siUnit = $request->input('siunit');
        $saveProducts->expiryDate = $request->input('expDate');
        $saveProducts->manufactureDate = $request->input('manuDate');
        $saveProducts->shelveNumber = $request->input('shelveNumber');
        $saveProducts->shelveRow = $request->input('shelveRow');
        $saveProducts->colour = $request->input('colour');

        $saveProducts->save();
        return redirect()->back()->with('message', 'Product Successfully Saved.');
    }

    public function viewProducts(){
        $getProducts =  Product::all();

        return view('logic.view_product', compact('getProducts'));
    }
}
