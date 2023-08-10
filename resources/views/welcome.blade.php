@extends('layouts.app')

@section('content')

<header class="masthead" style="margin-top: 0px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light">Online Birth Registration System</h1>
        <p class="lead">Sign up and apply</p>
      </div>
    </div>
  </div>
</header>
<!-- <div class="container">
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

                    
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
