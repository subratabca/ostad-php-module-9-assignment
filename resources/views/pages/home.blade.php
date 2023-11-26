@extends('layouts.app')
@section('page_title',$page_title)

@section('content')

@include('components.hero')

@include('components.summary')

@include('components.services')

@include('components.blog')

@endsection