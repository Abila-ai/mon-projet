@extends('app.layouts')

@section('title', 'Votre Panier')

@section('content')

<h2 class="mb-4">Votre Panier</h2>
<table class="table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Exemple d'article dans le panier -->
         <tr>
            <td>Nom du Produit</td>
            <td>1</td>
            <td>100 €</td>
            <td>100 €</td>
         </tr>
    </tbody>
</table>