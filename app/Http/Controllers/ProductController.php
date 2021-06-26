<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'welcome to product';
        $data =  product::all();
        return view('product',['data'=>$data]);
    }

    public function details($id)
    {
        //
        $data =  product::find($id);
        return view('details',['data'=>$data]);
    }

    public function search(Request $request)
    {
        //
         $data =  product::
         where('name','like','%'.$request->input('query').'%')
         ->get();
         return view('search',['data'=>$data]);
      
    }

    
    public function add_to_cart(Request $request)
    {
        //

         if($request->session()->has('user'))
         {
             $cart = new cart;
             $cart->user_id=$request->session()->get('user')['id'];
             $cart->product_id=$request->input('product_id');
            $cart->save(); 
            return redirect('/');
         }
         else{
             return redirect('/login');
         }
      
    }

    static  function cartItem()
    {
        //
       $user_id = Session::get('user')['id'];
       return cart::where('user_id',$user_id)->count();
        
      
    }
    
    public function catrtlist(Request $request)
    {
        //
        if($request->session()->has('user'))
        {
        $user_id = Session::get('user')['id'];
        $data =  DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->select('products.*','carts.id as cart_id')
        ->where('carts.user_id',$user_id)
        ->get();

        return view('cardlist',['data'=>$data]);
        } 
        else{
            return redirect('/login');
        }   
    }

    public function removecart($id)
    {
        //
      cart::destroy($id);
      return redirect('/catrtlist');
      
    }
    
    public function ordernow()
    {
        //
      $user_id = Session::get('user')['id'];
        $total =  DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->where('carts.user_id',$user_id)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
      
    }
    

    public function orderplace(Request $request)
    {
        //
        $user_id = Session::get('user')['id'];
        $allCart = cart::where('user_id',$user_id)->get();
        foreach ($allCart as $cart) {
           $order = new order;
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->address=$request->address;
           $order->payment_method=$request->payment;;
           $order->payment_status='pending';
           $order->status='pending';

           $order->save();
           
        }
        cart::where('user_id',$user_id)->delete();
        return redirect('/');
    }

    
    public function myorders(Request $request)
    {
        //
        if($request->session()->has('user'))
        {
        $user_id = Session::get('user')['id'];
        $orders =  DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('myorders',['orders'=>$orders]);
        }
        else
        {
            return redirect('/login');
        }
        
        
    }
    public function about(Request $request)
    {
        //
        
        return view('about');
        
    }
    

    
    
}
