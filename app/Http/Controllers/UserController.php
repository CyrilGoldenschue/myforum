<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = RoleUser::all();
        return view('users.index')->with(compact('users'));
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
        $userInfos = RoleUser::all()->where('user_id', '=', $id);
        return view('users.show')->with(compact('userInfos'));
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
    public function destroy($idUser, $idRole)
    {
        print_r("hello");
        $user = RoleUser::where(['user_id', '=', $idUser], ['role_id', '=', $idRole]);
        $controlUser = RoleUser::where('user_id', '=', $idUser)->count();

        if($controlUser >= 1) {
            $user->delete();
            return redirect(route('users.show', $idUser))->with('message', 'Référence supprimée');
        }else{
            return redirect(route('users.index', $idUser))->with('message', 'Le role n\' a pas pu être enlevé');
        }
    }
}
