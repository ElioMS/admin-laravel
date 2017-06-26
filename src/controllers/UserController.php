<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $users = Admin::whereHas('role', function($q) use ($id) {
            $q->where('code' , '!=' , $id);
        })->get();
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    public function profile() {
        if (\Auth::user()) {
            return view('admin.user.profile');
        } else {
            return false;
        }
    }

    public function saveProfile (Request $request) {
        
        $auth_user_id = \Auth::user()->id;

        $actual_user = Admin::find($auth_user_id); 
        $actual_user->name = request('name');
        $actual_user->email = request('email');
        
        if ($request->hasFile('image')) {
           $ext = $request->image->getClientOriginalExtension();
           $path = public_path().'/uploads/profile/';
           $image_name = $auth_user_id.'.'.$request->image->extension();
           $request->image->move($path , $image_name);

           $img_path = '/uploads/profile/'.$image_name;
           $actual_user->image = $img_path;
        }
        
        $actual_user->save();

        session()->flash('success' , 'Perfil actualizado!');
        return redirect()->route('user.profile');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
