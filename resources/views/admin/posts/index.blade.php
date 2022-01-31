@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td><img src="{{ $post->image }}" alt="{{ $post->title }}" width="60px"></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->subtitle }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="">
                            <i class="fas fa-eye    "></i>
                        </a>
                        <a href="">
                            <i class="fas fa-pen    "></i>
                        </a>
                        <a href="">
                            <i class="fas fa-trash    "></i>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
