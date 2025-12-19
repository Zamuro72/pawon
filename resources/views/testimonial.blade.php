@extends('layouts.app')

@section('title', 'Testimonial - Restoran')

@section('hero')
<x-hero title="Testimonial" parent="Pages" active="Testimonial" />
@endsection

@section('content')
<!-- Testimonial Start -->
@include('sections.testimonial')
<!-- Testimonial End -->
@endsection