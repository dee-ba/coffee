<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $users = User::paginate(15);
        // $users = User::all();       without pages
        return view('users/index', ['users' => $users]);
   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name; 
        $user->last_name = $request->last_name; 
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->password = $request->password;
       
   
        $user->save();
   
        return redirect('/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view ('users/edit', ['user'=>$user]); 
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->first_name = $request->first_name; 
        $user->last_name = $request->last_name; 
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->save();
   
        return redirect('/users');
  
       
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/users');    
    }
}
