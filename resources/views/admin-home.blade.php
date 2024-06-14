@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if(session('login-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('login-success') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">
                            Gestion des utilisteurs
                        </a>
                        <a href="" class="btn btn-primary">
                            Gestion des livress
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection