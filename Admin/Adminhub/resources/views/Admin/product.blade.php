@extends('layouts.admin')

@section('title')
    Gestion de produit | shop
@endsection

@section('content')
<!--modal-->
<div class="modal fade" id="Ajouter" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Ajouter un produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-product" method="post">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-row">
          <div class="col-md-6 mb-2">
            <label for="namep" class="col-form-label">Nom de produit :</label>
            <input type="text" name="name" class="form-control" id="namep" required>
          </div>
          <div class="col-md-6 mb-2">
            <label for="prixp" class="col-form-label">Prix en DH :</label>
            <input type="number" min="0.00" step="0.01" max="2500" name="price" class="form-control" id="prixp" required>
          </div>
        </div>
        <div class="form-row"> 
          <div class="col-md-6 mb-2">
            <label for="quntityp" class="col-form-label">Quantité :</label>
            <input type="number"  name="quntity" class="form-control" id="quntityp" required>
          </div>
          <div class="col-md-6 mb-2">
            <label for="typp" class="col-form-label">type :</label>
            <input type="text" name="type" class="form-control" id="typp" required>
          </div>
        </div> 
          <div class="form-group">
            <label for="desp" class="col-form-label">Description :</label>
            <input type="text" name="description" class="form-control" id="desp" required>
          </div>
          <div class="custom-file">
            <label for="imgp" class="custom-file-label">chose an image</label>
            <input type="file" name="image" class="form-control" id="imgp" required>
          </div>
      </div>     
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success">Confirmer</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--code-->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Table de different produit</h4>
                <p> Pour ajoute un produit Cliquez ici :
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Ajouter" style="border-radius: 10px;">Ajouter</button></p>
                <div class="alert alert-warning col-md-4" role="alert">
                Attention a vos modifications SVP !!!
                </div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table table-bordered table-hover table-responsive">
                    <thead class="text-primary thead-dark text-white">
                      <th>id</th>
                      <th>Nom Produit</th>
                      <th>Descr</th>
                      <th>image</th>
                      <th>Prix Dh</th>
                      <th>Qt</th>
                      <th>type</th>
                      <th>Modifications</th>
                    </thead>
                    <tbody>
                    @foreach ($product as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->image}}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->quntity }}</td>
                        <td>{{ $row->type }}</td>
                        <td class="btn-group" role="group">
                        <a href="/product-edit/{{ $row->id }}" class=" mr-2 btn btn-xs btn-info">Edit</a>
                           <form action="/product-delete/{{ $row->id }}" method="POST">
                           {{ csrf_field() }}
                           {{ method_field('DELETE') }} 
                           <button type="submit" class="btn btn-xs btn-danger mr-2">Delete</button>
                           </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endsection

@section('scripts')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable(
      {
        lengthMenu: [5, 10, 20]
      }
    );
  } );
</script>
@endsection