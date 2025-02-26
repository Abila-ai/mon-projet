@extends('layouts.app')

@section('title','Catégories de Produits')

@section('content')
<h2 class="mb-4">Catégories de Produits</h2>
<ul class="list-group">
    <!-- Exemple de catégorie -->
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Électronique
    <span class="badge bg-primary rounded-pill">14 Produits</span>
    </li>
    <!-- Répétez les éléments pour chaque catégorie -->
</ul>
@endsection