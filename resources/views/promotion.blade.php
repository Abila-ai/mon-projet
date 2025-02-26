@extends('app.layouts')

@secttion('title','Promotions')

@section('content')
<h2 class="mb-4">Promotions en Cours</h2>
<div class="row">
     <!-- Exemple de promotion -->
      <div class="col-md-4">
        <div class="card mb-4"></div>
        <img src="chemin/vers/image_promotion.jpg" class="card-img-top" alt="Nom de la Promotion">
        <div class="card-body">
            <h5 class="card-title">Nom de la Promotion</h5>
            <p class="card-text">Description de la Promotion</p>
            <p class="card-text"><strong>Valide jusqu'au :</strong>31/03/2025</p>
            <a href="#" class="btn btn-primary">Profiter de l'Offre</a>
            </div>
            </div>
        </div>
    <!-- Répétez les cartes pour chaque promotion -->
    </div>
@endsection