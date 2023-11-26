@extends('layouts.app')
@section('page_title',$page_title)
@section('banner_title',$banner_title)

@section('content')

@include('components.hero2')

@include('components.skill')

@include('components.experience')

@include('components.education')

@endsection