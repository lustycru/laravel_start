<div>
    <h3>Catalogue des marques</h3>
    @foreach ($brands as $item)
        Nom : {{ $item->name }}
        <br> <br>
    @endforeach
</div>
