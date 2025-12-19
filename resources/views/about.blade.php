@extends('layouts.app')

@section('title', 'About Us - Restoran')

@section('hero')
<x-hero title="Tentang Kami" parent="Pages" active="About" />
@endsection

@section('content')
<!-- About Start -->
@include('sections.about')
<!-- About End -->

<!-- Team Start -->
@include('sections.team')
<!-- Team End -->
@endsection