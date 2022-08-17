<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Departamento</th>
        <th>Ciudad</th>
        <th>Correo</th>
        <th>FechaCreacion</th>
    </tr>
    </thead>
    <tbody>
    @foreach($participantes as $participante)
        <tr>
            <td>{{ $participante->nombre }}</td>
            <td>{{ $participante->apellido }}</td>
            <td>{{ $participante->cedula }}</td>
            <td>{{ $participante->telefono }}</td>
            <td>{{ $participante->departamento }}</td>
            <td>{{ $participante->ciudad }}</td>
            <td>{{ $participante->correo }}</td>
            <td>{{ $participante->fechaCreacion }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
