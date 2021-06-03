@extends('layouts.front')

@section('content')
    @include('components.preloder')
    @include('components.navigation')
    @include('components.Page_header')
    @include('components.service_section')
    @include('components.features_section')
    @include('components.service_card')
    @include('components.newsletter')
    @include('components.contact_section')
@endsection