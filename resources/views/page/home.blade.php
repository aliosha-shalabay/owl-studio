@extends('layouts.base')
@section('content')
    @include('section.home.header')
    @include('section.home.services')
    @include('section.home.about')
{{--    @include('section.home.how-it')--}}
    @include('section.home.count')
    @include('section.home.portfolio')
    @include('section.home.price')
    @include('section.home.contact')
    @include('section.home.seo-text')
@endsection