@extends('layouts.app')

@section('content')
    @include('component.HomeBanner')
    @include('component.HomeService')
    @include('component.HomeCourse')
    @include('component.HomeProject')
    @include('component.HomeContact')
    @include('Component.HomeReview')
@endsection