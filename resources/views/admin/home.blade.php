@extends('admin.template.layout')
@section('title', 'Admin Dashboard')

@section('table_content')

    {{-- Stats --}}
    @include('admin.template.article', ['title' => 'Articles yang Dibuat', 'articles' => $articles])

    {{-- Doctor --}}
    @include('admin.template.member', ['title' => 'Doctors', 'users' => $doctors])

    {{-- Nurse --}}
    @include('admin.template.member', ['title' => 'Nurses', 'users' => $nurses])

@endsection

@section('vertical_content')
    {{-- Vertical Content --}}
    @include('admin.template.vertical')
@endsection
