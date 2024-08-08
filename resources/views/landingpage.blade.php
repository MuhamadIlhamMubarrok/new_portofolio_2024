@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    @include('components.landingPage.hero')
    @include('components.landingPage.aboutus')
    @include('components.landingPage.count')
    @include('components.landingPage.service')
    @include('components.landingPage.product')
    @include('components.landingPage.comment')
@endsection
