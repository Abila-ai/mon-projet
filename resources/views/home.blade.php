@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenue sur UJKZ E-commerce</h1>
        <p class="lead">Votre plateforme de confiance pour acheter et vendre des produits en toute simplicité.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/produits') }}" role="button">Voir les Produits</a>
    </div>
@endsection