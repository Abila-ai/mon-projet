@extends('app.layouts')

@section('title','Détails du produit')


@section('content')
<div class="row">
    <div class="col-mb-6">
        <img src="chemin/vers/image.jpg" class="img-fluid" alt="Nom du produit">
    </div>
    <div class="col-md-6">
        <h2>Nom du Produit</h2>
        <p>Description détaillée du produit</p>
        <p><strong>Prix :</strong> 100 €</p>
        <p><strong>Stock :</strong> Disponible</p>
        <a href="" class="btn btn-primary">Ajouter au panier</a>
    </div>
</div>
@endsection