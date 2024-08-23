<form action="/promedio" method="POST">
    @csrf

    @for ($i = 1; $i <= 5; $i++)
        <h3>Nota {{ $i }}</h3>
        <label for="nota_{{ $i }}">Calificación:</label>
        <input type="number" name="notas[]" id="nota_{{ $i }}" min="0" max="10">
        <hr>
    @endfor

    <button type="submit">Calcular Promedio</button>
</form>

@if(isset($promedio))
    <p>El promedio es: {{ $promedio }}</p>
@endif