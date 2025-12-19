@extends('layouts.app')

@section('title', 'Food Menu - Restoran')

@section('hero')
<x-hero title="Food Menu" parent="Pages" active="Menu" />
@endsection

@section('content')
<!-- Menu Start -->
@include('sections.menu')
<!-- Menu End -->
@endsection