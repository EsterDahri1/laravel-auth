@extends('layouts.admin')

@section('content')

    <section class="create py-5 col-6 mx-auto">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <form action=" {{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-5">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId"
                        value="{{ old('title') }}">
                    <small id="titleHelper" class="text-muted">Type a title of Project</small>
                    @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="cover_image" class="form-label">Image</label>
                    <input type="file" name="cover_image" id="cover_image"
                        class="form-control @error('content') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId">
                    <small id="imageHelper" class="text-muted">Upload an image</small>
                    @error('cover_image')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        cols="30" rows="5" placeholder="Type a description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                {{-- <div class="mb-5">
                    <label for="github" class="form-label">Github</label>
                    <input type="text" name="github" id="github"
                        class="form-control @error('github') is-invalid @enderror" placeholder="" aria-describedby="helpId"
                        value="{{ old('github') }}">
                    @error('github')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" name="link" id="link"
                        class="form-control @error('link') is-invalid @enderror" placeholder="" aria-describedby="helpId"
                        value="{{ old('link') }}">
                    @error('link')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div> --}}

                <div class="mb-3">
                    <label for="github" class="form-label">Github link</label>
                    <div class="input-group">
                        <span class="input-group-text" id="github">https://</span>
                        <input type="text" name="github" class="form-control" id="github" aria-describedby=""
                            basic-addon4" value="{{ old('github') }}">
                        @error('github')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-text" id="basic-addon4">Insert your github link.</div>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <div class="input-group">
                        <span class="input-group-text" id="link">https://</span>
                        <input type="text" name="link" class="form-control" id="link" aria-describedby=""
                            basic-addon4" value="{{ old('link') }}">
                        @error('link')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-text" id="basic-addon4">Insert your github link.</div>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
                <a class="text-decoration-none btn btn-primary" href="{{ route('admin.projects.index') }}">Go to project
                    table</a>

            </form>
        </div>
    </section>


@endsection
