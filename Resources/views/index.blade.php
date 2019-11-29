@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>

    <ul>
        @forelse($posts as $post)
            <li>{{ $post->title }} - {{ $post->author }}</li>
        @empty
            <li>Não há dados</li>
        @endforelse
    </ul>
@endsection
