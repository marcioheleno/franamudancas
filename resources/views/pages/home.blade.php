@extends('frana')

@section('title', '| Home')

@section('content')
    @include('partials._main')

    <!-- serviceMkt -->
    @include('partials._serviceMkt')
    <!--<section>-->
    @include('partials._testimonial')
    <!-- serviceMkt -->
@endsection

