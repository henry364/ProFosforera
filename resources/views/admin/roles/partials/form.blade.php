


        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['clase'=> 'form-control', 'placeholder'=>'Ingrese el nombre del rol']) !!}

            @error('name')
            <small class="text-danger">
                {{$message  }}
            </small>
            @enderror

        </div>

        <h2 class="h3">Lista de permisos</h2>
        <div class="col-lg-12 left">
        @foreach ( $permissions as $permission )
        <div>
            <label>
               {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
               {{$permission->descripcion}}
            </label>
        </div>
        @endforeach







