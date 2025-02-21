@extends('admin.template.layout')

@section('title', 'Upload Artikel')

@section('single_content')
    {{-- Articles --}}
    @include('admin.template.form-articles')
@endsection
