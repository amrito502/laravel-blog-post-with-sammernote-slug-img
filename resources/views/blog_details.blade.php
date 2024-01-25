@extends('master')
@section('title')
All Blog
@endsection
@section('main_content')
<div class="main_content">
    <h1 class="blog_post">Blog Details</h1>
    <hr>
    <h3>{{ $blog->name }}</h3>
    <div class="desc">
        {!! $blog->desc !!}
    </div>
</div>

@endsection

{{-- blog details --}}
