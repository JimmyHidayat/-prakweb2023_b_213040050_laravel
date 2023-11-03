@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['tittle'] }}</a>
            </h2>
            <h2>By: {{ $post['author'] }}</h2>
            <h2>{{ $post['body'] }}</h2>
        </article>
    @endsection
