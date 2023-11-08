@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success!</strong> {{ session('message') }}
            </div>
        @endif
    </div>

    <h1>Projects Table</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr class="">
                        <td scope="row">{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <img width="100" class="img-fluid" src="{{ $project->cover_image }}" alt="">
                        </td>
                        <td>{{ $project->description }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.projects.show', $project->slug) }}"
                                class="btn btn-outline-primary"></a>
                            <!--TO DO edit, delete-->
                        </td>
                    </tr>
                @empty
                    <p>There are no projects yet</p>
                @endforelse

            </tbody>
        </table>
        <div> {!! $projects->withQueryString()->links('pagination::bootstrap-5') !!} </div>
    </div>
@endsection
