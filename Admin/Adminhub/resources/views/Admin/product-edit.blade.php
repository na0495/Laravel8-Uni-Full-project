@extends('layouts.admin')

@section('title')
    Gestion des produit| shop
@endsection

@section('content')        

<div class="container">
    <div class="row">
        <div class="col-md-10 align-middle">
            <div class="card">
                <div class="card-header">
                    <h3>Gestion des produit</h3>
                </div>   
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <form action="/product-register-update/{{ $product->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row mb-4">
                                <div class="col-md-5 mb-2">
                                    <lable>Nom du produit</lable>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control rounded" require>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <lable>Prix DH</lable>
                                    <input type="number" name="price" min="0.00" step="0.01" max="2500" value="{{ $product->price }}" class="form-control rounded" require>
                                </div>
                            </div>    
                            <div class="row mb-4">    
                                <div class="col-md-5 mb-2">
                                    <lable>Quantité</lable>
                                    <input type="number" name="quntity" value="{{ $product->quntity }}" class="form-control rounded" require>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <label>Type</label>
                                    <input type="text" name="type" value="{{ $product->type }}" class="form-control rounded" require>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col mb-2">
                                    <lable>Description</lable>
                                    <textarea type="text" class="form-control border border-secondary rounded" rows="6" name="description">  {{ $product->description }}</textarea>
                                </div>
                            </div>        
                            <div class="form-group">
                                <label for="imp"> chose an image</label>
                                <input type="file" id="imp" name="image" value="{{ $product->image }}" class="form-control-file" required>
                            </div>

                            <button type="sumbit" class="btn btn-success float-right mr-2"> Sauvgarder </button>
                            <a href="/product" class="btn btn-warning float-right mr-2"> Annuler </a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection