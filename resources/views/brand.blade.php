<div>
    <h3>Catalogue des marques</h3>
    @foreach ($brands as $item)
        Nom : {{ $item->name }}
        <br>
        <a href="/brand/{{ $item->id }}">Voir les détails</a>
        <br> <br>
    @endforeach
</div>
