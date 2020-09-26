@extends('master')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categories</th>
            <th scope="col">Posts</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>
                    @foreach($category->myPosts as $post)
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-primary">{{ $post->title }}</button>
                        </div>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection