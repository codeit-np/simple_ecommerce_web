<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
        $user = Auth::user();
        if($user == null){
            View::share([
                'totalItems' => 0
            ]);
        }else{
            $totalItems = Cart::where('user_id',$user->id)->count();
            View::share([
                'totalItems' => $totalItems
            ]);
        }
         return $next($request);
        });
    }

    public function home()
    {
        // Fresh meat
        $meat = Category::where('slug','meat')->first();
        $freshMeat = Product::where('category_id',$meat->id)->get();

        //Fresh Vegetables
        $vegetables = Category::where('slug','vegetables')->first();
        $freshVeg = Product::where('category_id',$vegetables->id)->get();
        // return $freshVeg;

        // return $totalItems;
        // $totalItems = Cart::count();

        return view('frontend.pages.home',compact('freshMeat','freshVeg'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        // $totalItems = Cart::count();
        return view('frontend.pages.product_detail',compact('product'));
    }

    public function cart()
    {
        if(Auth::user()){
            $cartItems = Cart::where('user_id',Auth::user()->id)->get();
            $totalAmount = Cart::where('user_id',Auth::user()->id)->sum('amount');

        // return $cartItmes;
            // $totalItems = Cart::count();
            return view('frontend.pages.cart',compact('cartItems','totalAmount'));
        }else{
            return redirect("/login");
        }
    }

    public function addToCart(Request $request)
    {
        // return $request;
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->qty = $request->qty;
        $cart->amount = $request->selling_price * $request->qty;
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect()->back();
    }

    public function deleteItem($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        return redirect()->back();
    }

    public function updateCartItem(Request $request, $id)
    {
        //  return $request;
         $cart =  Cart::find($id);
        //  $cart->product_id = $request->product_id;
         $cart->qty = $request->qty;
         $cart->amount = $request->selling_price * $request->qty;
         $cart->user_id = Auth::user()->id;
         $cart->update();
         return redirect()->back();
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('frontend.pages.profile',compact('user'));
    }

    public function address()
    {
        return view('frontend.pages.address');
    }

    public function history()
    {
        return view('frontend.pages.history');
    }


}

