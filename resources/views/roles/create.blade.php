Crear role

<form action="{{ url('/roles')}}" method="post">
    @csrf
    <label for="TipoRol">TipoRol</label>
    <input type="text" name="TipoRol">
    <input type="submit" value="Crear">
</form>
