@extends('layouts.sbadmin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trashed Post</h1>
    <p class="mb-4">This is Post page for administrator</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Trashed Post</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Featured</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>Featured</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="text-center"> <img src="{{ asset('' . $post->featured) }}" alt="{{ asset($post->title) }}" width="80px" height="50px"></td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('restorePost', ['id' => $post->id]) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ route('deletePost', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>   
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
