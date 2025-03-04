<div>
    <h3>Catalogue de motos</h3>
    @foreach ($motorcycles as $item)
        Nom : {{ $item->name }}
        <br>
        Price : {{ $item->price }} €
        <br>
        <a href="/motorcycle/{{ $item->id }}">Voir les détails</a>
        <br> <br>
    @endforeach
</div>
