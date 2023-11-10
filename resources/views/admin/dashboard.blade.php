@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-4 align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                Welcome {{ Auth::user()->name }} !
            </h2>
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"> Table Project </a>
        </div>
        <div class="py-4 row row-cols-1 row-cols-sm-2 row-cols-md-3">

        </div>
    </div>
@endsection
