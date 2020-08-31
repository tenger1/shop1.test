<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
class SearchController extends Controller
{
    public function SearchAction ($search){

//$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//$search_value=$_POST["search"];

//$products = Goods::find($search);
$products = Goods::where('name', 'LIKE', '%' . $search . '%')->paginate(5);

if ($products) {
            return view('search', ['goods' => $products]);
            
        }

    }

}
?>