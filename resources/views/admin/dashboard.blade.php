@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-4 align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                Welcome {{ Auth::user()->name }} !
            </h2>

            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"> Table Project </a>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Welcome {{ Auth::user()->name }}!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="py-4 row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Projects</h4>
                        <p class="card-text">These are the wonderful projects I made</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">To fill</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Group projects</h4>
                        <p class="card-text">Class 104 projects</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
