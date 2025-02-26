@extends('layouts.app')

@section('title','Nos produits')

@section('content')
    <h2 class="mb-4">Nos produits</h2>
    <div class="row">
        <!-- Exemple de produit -->
         <div class="col-md-4">
            <div class="card mb-4">
            <img src="chemin/vers/image.jpg" class="card-img-top" alt="Nom du Produit">
            <div class="card-body">
                <h5 class="card-title">Nom du produit</h5>
                <p class="card-text">Description courte du texte</p>
                <p class="card-text"><strong>Prix:</strong> 100 €</p>
                <a href="" class="btn btn-primary">Ajouter au panier</a>
            </div>
            </div>
         </div>

         <!-- Répétez les blocs de produits selon vos besoins -->

    </div>
    @endsection