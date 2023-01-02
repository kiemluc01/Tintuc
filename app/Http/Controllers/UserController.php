<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request){
        $link = "/";
        $Cookie = new CookieController();
        if($Cookie->check('url'))
            $link = $Cookie->get('url'); //return link before login
        $username = $request->input('username');
        $password = $request->input('password');
        if(User::where('username', $username)->where('password', $password)->exists())
        {
            $user = User::where('username', $username)->where('password', $password)->first();
            if($Cookie->setUser($user->idUser))
            {
                $Cookie->set('last_user', $username);
                $Cookie->delete('password');
                if($request->has('remember'))
                {
                    $Cookie->set('password', $password);
                }
                return redirect($link)->with('success','đăng nhập thành công');
            }
        }
        return redirect('/login')->with('login fail','sai tài khoản hoặc mật khẩu');
    }
}
