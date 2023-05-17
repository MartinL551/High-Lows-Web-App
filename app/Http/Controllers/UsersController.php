<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UsersController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            return Inertia::render('Users', [
               'users' => User::all()
            ]);
        }
    
        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            //
        }
    
        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store()
        {
            //
        }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            //
        }
    
        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            //
        }
    
        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update(Request $request)
        {   

            
            
            $user = User::findOrFail($request->id);
            $user->update([
                "role" => $request->role,
            ]);
           
        }   
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy(User $user)
        {
           $user->delete();
        }
}
