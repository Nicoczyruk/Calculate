<h2>Lista de Contactos</h2>
<ul>
    @foreach($contactos as $contacto)
        <li>{{ $contacto['nombre'] }} - {{ $contacto['telefono'] }} - {{ $contacto['direccion'] }}</li>
    @endforeach
</ul>

<a href="/contacto">Volver al formulario</a>

