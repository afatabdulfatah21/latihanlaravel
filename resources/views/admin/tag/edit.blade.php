@extends('layouts.sbadmin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tag</h1>
    <p class="mb-4">This is tag page for administrator</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tag <strong>{{ $tag->tag }}</strong></h6>
        </div>
        <div class="card-body">
            <form action="{{ route('updateTag',['id' => $tag->id]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Tags</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control" placeholder="Tag Name">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
