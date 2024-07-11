@extends('layout')

@section("title", 'trang danh sách sản phẩm')


@section('content')
    <h2>danh sách bài viết</h2>
    <hr>

    @foreach ($books as $book )
        <a href="#">
            <h3>{{ $book->title }}</h3>
        </a>
        <div>{{ $book->author }}</div>
        <div>{{ $book->publisher }}</div>
        <div>{{ $book->publication }}</div>
    @endforeach
@endsection