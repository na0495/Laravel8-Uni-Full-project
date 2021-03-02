@extends('layouts.admin')

@section('title')
    Update user
@endsection

@section('content')        

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3>Modification des donner de l'utilisateur :</h3>
                </div>   
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <form action="/role-register-update/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                        <div class="form-group col-md-6">
                            <lable>Nom de l'utilisateur</lable>
                            <input type="text" name="name" value="{{ $users->name }}" class="form-control" require>
                        </div>
                        <div class="form-group col-md-8">
                            <lable>Adress email</lable>
                            <input type="email" name="email" value="{{ $users->email }}" class="form-control" require>
                        </div>
                        <div class="form-group col-md-6">
                            <lable>Tel</lable>
                            <input type="number" name="phone" value="{{ $users->phone }}" class="form-control" require>
                        </div>
                        <div class="form-group col-md-10">
                            <label>Choisissez le Rôle</label>
                            <select name="usertype"  class="custom-select" require>
                                <option value="">Ouvrez ce menu de sélection</option>
                                <option value="admin">Admin</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <button type="sumbit" class="btn btn-success float-right"> Sauvgarder </button>
                        <a href="/role-register" class="btn btn-warning float-right"> Annuler </a>
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
