@extends('layouts.app')

@section('title', 'Booking - Restoran')

@section('hero')
<x-hero title="Booking" parent="Pages" active="Booking" />
@endsection

@section('content')
<!-- Reservation Start -->
@include('sections.reservation')
<!-- Reservation End -->
@endsection