@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a class="btn btn-app bg-danger">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> Users
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection