<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserToGroups;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit', [
            'user' => User::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->name;
        $email = $request->email;

        $user = User::where('id', $id)->first();
        $user->update([
            'name' => $name,
            'email' => $email
        ]);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user->hasRole(\App\Providers\AppServiceProvider::SUPER_ADMIN) && !$user->hasRole(\App\Providers\AppServiceProvider::ADMIN)) {

            $usersToGroup = UserToGroups::where('user_id', $id)->get();
            if(is_array($usersToGroup) && count($usersToGroup) > 0){
                foreach ($usersToGroup as $userToGroup) {
                    $userToGroup->delete();
                }
            }

            $user->delete();
        } else {
            $validator = Validator::make([], []);
            $validator->errors()->add('role', 'Users with role ' . AppServiceProvider::SUPER_ADMIN . ' or ' . AppServiceProvider::ADMIN . ' cannot be removed from user interface!');
        }

        return view('users.index', [
            'users' => User::all()
        ]);
    }
}
