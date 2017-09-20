<?php

namespace Ems\AdminEms\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $users = Admin::whereHas('role', function($q) use ($id) {
            $q->where('code' , '!=' , 1);
        })->get();
        // dd($users);
        return view('adminems::user.index', compact('users'));
    }

    public function profile() 
    {
        if (\Auth::user()) {
            return view('adminems::user.profile');
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

    public function changePassword(Request $request) 
    {
        if (\Auth::user()) {

            if ($request->ajax()) {
                //Valores del usuario administrador conectado 
                $actual_password = \Auth::user()->password;
                $actual_id = \Auth::user()->id;

                if (password_verify(request('actual_password') , $actual_password)) {

                    $validator = \Validator::make($request->all(), [
                        'new_password' => 'required|confirmed',
                        'new_password_confirmation' => 'required'
                    ]);

                    if ($validator->passes()) {
                        $user = Admin::find($actual_id);
                        $user->password = bcrypt(request('new_password'));
                        $user->save();
                        return response()->json(['state' => true , 'message' => 'Contraseña actualizada!']);
                    } else {
                        return response()->json(['state' => false , 'message' => 'Verificar la confirmación de la nueva contraseña!']);
                    }
                } 
                else {
                    return response()->json(['state' => false , 'message' => 'La contraseña actual no coincide!']);
                }
            }
        }
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
