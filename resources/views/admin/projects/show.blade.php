@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Selected project</h1>
        <div class="my-2 row row-cols-2 g-3">
            <div class="col">
                <div class="card p-4 shadow rounded-0">
                    <img class="card-img-top w-70" src="{{ $project->cover_image }}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{ $project->title }}</h4>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 rounded-0">
                    <div class="card-body d-flex flex-column">
                        <a class="btn btn-dark my-2" href="{{ $project->github }}">GITHUB</a>
                        <a class="btn btn-primary my-2" href="{{ $project->link }}">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- make it better --}}
