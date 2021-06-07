<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use DB;



class ProductController extends Controller
{
    //returns the Home Page
    function index()
    {
        return view('home');
        // $data = Product::all();
        // return view('product', ['products'=> $data]);
    }

    function detail($id) 
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search (Request $req)
    {
         $name_data = Product::where('name', 'LIKE' , '%' .$req->input('query'). '%')->get();
        //  $price_data = Product::where()
        return view('search', ['products'=>$name_data]);
    }
    function addToFavorites(Request $req) 
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product__id;
            if(Cart::where('user_id', '=', $req->session()->get('user')['id'])->where('product_id', '=', $req->product__id)->exists())
                {
                    echo "Already added to favorites";
                }
                else 
                {
                    $cart->save();
                    return redirect('/');
                }
            }
        else 
        {
            return redirect('/login');
        }

    }


    static function favItem() {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function favoritesList() {
        $userId = Session::get('user')['id'];
        $favorites = 
        DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        return view('favoritesList', ['products' => $favorites]);

    }

    function remove($id) 
    {
        Cart:: destroy($id);
        return redirect('favoritesList');
    }
}
