<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function __construct()
{
    $this->middleware('can:admin user');
   // $this->middleware('can:admin.users.edit')->only('edit', 'update');

}

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:roles'
        ]);

        $role = Role::create($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se creó con éxito');

    }

    public function show(Role $role)

    {
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));

    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=>'required',

        ]
        );
        $role ->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role)->with('info','Se actualizaron los roles correctamente');
     }

    public function destroy(Role $role)
    {


        $role ->delete();

       return redirect()->route('admin.roles.index')->with('info','EL rol se eliminó con éxito');

    }
}
