@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-4 align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                {{ __('Dashboard') }}
            </h2>

            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"> Table Project </a>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
