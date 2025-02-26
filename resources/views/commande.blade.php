@extends('app.layouts')


@section('title','Gestion des commandes')

@section('content')

<h2 class="mb-4">Gestion des commandes</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID Commande</th>
            <th>Client</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Totl</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <!-- Exemple de commande -->
         <tr>
            <td>1</td>
            <td>Boussim Abila</td>
            <td>26/02/2025</td>
            <td>En attente</td>
            <td>1500 £</td>
            <td>
                    <a href="#" class="btn btn-info btn-sm">Voir</a>
                    <a href="#" class="btn btn-success btn-sm">Confirmer</a>
                    <a href="#" class="btn btn-danger btn-sm">Annuler</a>
                </td>
         </tr>
          <!-- Répétez les lignes pour chaque commande -->
    </tbody>
</table>
@endsection