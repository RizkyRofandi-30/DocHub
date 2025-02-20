@extends('admin.template.layout')
@section('title', 'Admin Dashboard')

@section('navbar')
    @include('admin.template.navbar')
@endsection

@section('table_content')

    {{-- Stats --}}
    @include('admin.template.article', ['title' => 'Articles yang Dibuat', 'articles' => $articles])

    {{-- Doctor --}}
    @include('admin.template.medic', ['title' => 'Doctors', 'users' => $doctors])

    {{-- Nurse --}}
    @include('admin.template.medic', ['title' => 'Nurses', 'users' => $nurses])

@endsection

@section('vertical_content')
    {{-- Vertical Content --}}
    @include('admin.template.vertical')
@endsection
