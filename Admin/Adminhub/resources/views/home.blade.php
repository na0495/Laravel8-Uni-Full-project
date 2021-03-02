@extends('layouts.app')
@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <a href="#" class="btn btn-success float-right">Profil</a>
                </div>
                <div class="alert alert-primary" role="alert">
                Vous donner on etait enregister dans la base de donner <a href="/welcome" class="alert-link">cliquez</a> pour revenir au stpre
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
