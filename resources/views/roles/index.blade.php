Mostrar role
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TipoRol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
            <tr class="">
                <td scope="row">{{ $rol->id }}</td>
                <td>{{ $rol->TipoRol }}</td>
                <td>Editar|
                
                <form action="{{url('/roles/'.$rol->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Quieres eliminar este registro')" value="Eliminar">    
                </form>    
                <td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
