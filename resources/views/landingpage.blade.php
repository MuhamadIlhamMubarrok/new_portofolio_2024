@extends('layouts.landingpage')

@section('title', 'Home')

@section('content')
    @include('components.landingPage.hero')
    @include('components.landingPage.aboutus')
    @include('components.landingPage.skill')
    @include('components.landingPage.count')
    @include('components.landingPage.certificate')
    @include('components.landingPage.project')
    @include('components.landingPage.service')
    @include('components.landingPage.news')
@endsection
