@extends('admin.template.layout')

@section('title', 'Admin Artciles')

@section('single_content')
    {{-- Articles --}}
    @include('admin.template.list-all-articles', [
        'title' => 'Articles yang Dibuat',
        'articles' => $articles,
    ])
@endsection
