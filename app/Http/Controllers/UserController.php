<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;



class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)  
{
   return view('edit')->with('user' , $user);
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, User $user)
    {
        // dd($user);

          $validated= $request->validate([
        'userName' => 'string',
        'userEmail' => 'email | string',
        'userPhone'=> 'min:10',
        'national_id'=>'min:10'

       ]);


         $user->update([
              'name'=>$validated['userName'],
              'email'=>$validated['userEmail'],
              'phone_number'=>$validated['userPhone'],
              'national_id'=>$validated['national_id']
         ]);

         
            return redirect()->back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
