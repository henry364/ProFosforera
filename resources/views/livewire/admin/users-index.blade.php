
@if (session('info'))
<div class="alert alert-success">
    <strong>
        {{session('info')}}
    </strong>
</div>
@endif

<table id="usuario" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Correo del Usuario</th>
            <th scope="col" width="100">Acción</th>
        </tr>
    </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td width="100">

                    <form action="{{route('admin.users.destroy',$user->id)}}" method="post">
                        <a href="{{route('admin.users.show', $user)}}" class="  btn-success btn-sm fas fa-users-cog"></a>
                        <a href="{{route('admin.users.edit', $user)}}" class=" btn btn-warning btn-sm fa fa-edit"></a>

                        @csrf
                        @method('delete')
                        <button type="submit" class=" btn btn-danger btn-sm  fa fa-times-circle"></button>
                    </form>
                    </td>
                </td>
            @endforeach
        </tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#usuario').DataTable(
        {
                    "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
                }

    );
} );
</script>

@endsection



