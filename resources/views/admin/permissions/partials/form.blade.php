

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['clase'=> 'form-control', 'placeholder'=>'Ingrese el nombre de permiso']) !!}

            @error('name')
            <small class="text-danger">
                {{$message  }}
            </small>
            @enderror

        </div>

        <div class="cart">

            <div class="cart-body">
                <table id="permiso" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                    <thead class="thead-dark"   >
                       <tr>
                           <th>ID</th>
                           <th>Rol</th>
                           <th colspan="2">Opción</th>
                       </tr>
                       <tr></tr>
                    </thead>
                    <tbody>
                        @foreach ( $permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td width="10">
                                <a href="{{route('admin.permissions.edit', $permission)}}" class="btn btn-warning btn-sm">Editar</a></td>
                            <td width="10">
                                <form action="{{route('admin.permissions.destroy', $permission)}}" method="POS">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


