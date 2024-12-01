@extends('landing.layouts.app')
@section('slider')
    @include('landing.component.slider')
@endsection
@section('products')
    @set($products, $products)
@endsection  
@section('content')
    <!-- shop section -->
    @include('landing.component.shop')
    <!-- end shop section -->

    <!-- saving section -->
    @include('landing.component.saving')
    <!-- end saving section -->

    <!-- why section -->
    @include('landing.component.why')
    <!-- end why section -->

    <!-- gift section -->
    @include('landing.component.gift')
    <!-- end gift section -->


    <!-- contact section -->
    @include('landing.component.contact')
    <!-- end contact section -->

    <!-- client section -->
    @include('landing.component.client')
    <!-- end client section -->
@endsection
