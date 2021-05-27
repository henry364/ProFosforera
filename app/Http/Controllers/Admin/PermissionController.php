<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PermisosCreateRequest;
use App\Http\Requests\PermisosEditRequest;

use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin user');
       // $this->middleware('can:admin.users.edit')->only('edit', 'update');

    }
    public function index()
    {
        $permissions= Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $permissions = Permission::all();
        return view('admin.permissions.create');
    }

    public function store(PermisosCreateRequest $request)
    {


        $permission = Permission::create($request->all());

        return redirect()->route('admin.permissions.index', $permission)->with('info', 'Permiso se  creó con éxito');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('admin.permissions.edit')->with('permission',$permission);

    }

    public function update(PermisosEditRequest $request, $id)
    {
        $permissions = Permission::find($id);

        $permissions->name = $request->get('name');
        $permissions->descripcion = $request->get('descripcion');

        $permissions->save();

        return redirect('/admin/permissions')->with('info','Se actualizaron los roles correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

       return redirect()->route('admin.permissions.index')->with('info','EL rol se eliminó con éxito');
    }
}
