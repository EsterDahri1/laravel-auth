@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-4 align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                Welcome {{ Auth::user()->name }} !
            </h2>

        </div>
        <div class="py-4 row row-cols-1 row-cols-sm-2 row-cols-md-3 gap-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>My projects
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd"
                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Currently there are</h5>
                    <p class="card-text">{{ $total_projects }} projects</p>
                    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"> Go to Projects </a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <h3>Users
                        <svg xmlns="http://www.w3.org/2000/svg" height="0.7em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Currently <span class="text-danger">{{ Auth::user()->name }} </span> is logged
                        in.</h5>
                    <a class="my-3 btn btn-primary" href="{{ url('profile') }}"> Go to Profile </a>
                </div>
                <div class="card-footer text-muted">
                    Hello!
                </div>
            </div>
        </div>
    </div>
@endsection
