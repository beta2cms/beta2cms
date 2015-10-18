<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Data;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.users.edit', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest|Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        Data::checkIsSet($data, 'confirm');

        if(Hash::check($data['confirm'], auth()->user()->getAuthPassword()))
        {
            // todo: flash success
            $user = \App\User::find($id);
            $user->update($data);

            return redirect()->route('admin.user.index');

        }
        dd(auth()->user()->getAuthPassword());
        // todo: flash wrong password

        return redirect()->route('admin.user.edit')->withInput($data);
    }

}
