@extends('master')
@section('title')
All Blog
@endsection
@section('main_content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slag</th>
            {{-- <th>Desc</th> --}}
            <th style="width: 25%">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($blogs as $key=>$blog)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $blog->name }}</td>
            <td>{{ $blog->slug }}</td>
            {{-- <td>{!!$blog->desc!!}</td> --}}
            <td class="d-flex">
                <a class="btn btn-info" href="{{ route('blog.details', [$blog->id, $blog->slug]) }}">View</a>
                <a class="btn btn-danger" href="{{ route('blog.delete', $blog->id) }}">Delete</a>
            </td>
        </tr>
        @empty
        <p class="danger">Blog is not available!</p>
        @endforelse

    </tbody>
</table>

@endsection
