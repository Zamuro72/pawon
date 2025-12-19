@extends('layouts.app')

@section('title', 'Our Team - Restoran')

@section('hero')
<x-hero title="Our Team" parent="Pages" active="Team" />
@endsection

@section('content')
<!-- Team Start -->
@include('sections.team-full')
<!-- Team End -->
@endsection