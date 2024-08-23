<form action="/contacto" method="POST">
    @csrf

    @for ($i = 1; $i <= 5; $i++)
        <h3>Persona {{ $i }}</h3>
        <label for="nombre_{{ $i }}">Nombre:</label>
        <input type="text" name="nombre[]" id="nombre_{{ $i }}">

        <label for="telefono_{{ $i }}">Teléfono:</label>
        <input type="text" name="telefono[]" id="telefono_{{ $i }}">

        <label for="direccion_{{ $i }}">Dirección:</label>
        <input type="text" name="direccion[]" id="direccion_{{ $i }}">
        <hr>
    @endfor

    <button type="submit">Registrar Contactos</button>
</form>