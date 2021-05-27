<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

public function __construct()
{
    $this->middleware('can:admin user');
   // $this->middleware('can:admin.users.edit')->only('edit', 'update');

}

    public function index()
    {
        return view('admin.users.index');
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreateRequest $request)

    {

        User::create($request->only('name', 'username', 'email')
    +[
        'password'=> bcrypt($request->input('password')),
    ]);
    return redirect()->route('admin.users.index')->with('info', 'El usuario se creó con éxito');

    }

    public function show(User $user)
    {
        $roles = role::all();
        return view ('admin.users.show',compact('user','roles'));
    }

    public function edit(User $user)
    {
       $roles = role::all();
       return view ('admin.users.edit',compact('user','roles'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
        'name'=>'required',
        'username'=>'required',
        'email'=>'required',

    ]
    );


        $user ->update($request->all());
       $user->roles()->sync($request->roles);

       return redirect()->route('admin.users.index', $user)->with('info','Cambio realizado correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
