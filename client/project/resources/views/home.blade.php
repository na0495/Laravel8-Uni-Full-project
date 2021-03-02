@extends('layouts.index')

@section('center')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <p>Name: {!! Auth::user()->name !!}</p>
                    <p>Email: {!! Auth::user()->email !!}</p>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit">Se déconnecter</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
