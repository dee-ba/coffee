<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Order_Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    
		$data['order'] = Order::orderBy('id','asc')->paginate(5);	
		return view('orders/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$users = DB::table('users')->get();
		$order_items = DB::table('order_items')->get();		
		return view('orders/create', compact('users', 'order_items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$request->validate([
		'user_id' => 'required',
		'order_item_id' => 'required'
		]);
		
		$ord = new Order;
		$ord->user_id = $request->user_id;
		$ord->order_item_id = $request->order_item_id;
		$ord->save();
		return redirect('orders')
		->with('success','Order has been created successfully.');	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $ord)
    {
        return view('orders/show',compact('ord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $ord)
    {
		$users = DB::table('users')->get();
		$order_items = DB::table('order_items')->get();	
		return view('orders/edit',compact('ord', 'users', 'order_items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$request->validate([
		'user_id' => 'required',
		'order_item_id' => 'required'
		]);
		
		$ord = Order::find($id);
		$ord->user_id = $request->user_id;
		$ord->order_item_id = $request->order_item_id;
		$ord->save();
		return redirect('orders')
		->with('success','Order Has Been updated successfully');	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $ord)
    {
		$ord->delete();
		return redirect('orders')
		->with('success','Order has been deleted successfully');        
    }
}