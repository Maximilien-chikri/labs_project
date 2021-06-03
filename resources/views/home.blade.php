@extends('layouts.front')

@section('content')
    @include('components.preloder')
    @include('components.navigation')
    @include('components.hero_section')
    @include('components.about_section')
    @include('components.testimonial')
    @include('components.service_section')
    @include('components.team_section')
    @include('components.promotion_section')
    @include('components.contact_section')
@endsection