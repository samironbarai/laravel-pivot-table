@extends('master')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Posts</th>
            <th scope="col">Categories with extra field</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                    @foreach($post->categories as $category)
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-primary">{{ $category->name }}</button>
                            <button type="button" class="btn btn-sm btn-warning">{{ $category->pivot->extra_field }}</button>
                        </div>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection