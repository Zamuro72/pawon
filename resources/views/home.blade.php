@extends('layouts.app')

@section('title', 'Pawon - Home')

@section('hero')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Nikmati<br>Semua Hidangan Kami</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Enak semua lu cobain dah satu satu ketagihan ntar lu</p>
                <a href="{{ route('booking') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Booking Meja</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="{{ asset('img/hero.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Service Start -->
@include('sections.service')
<!-- Service End -->

<!-- About Start -->
@include('sections.about')
<!-- About End -->

<!-- Menu Start -->
@include('sections.menu')
<!-- Menu End -->

<!-- Reservation Start -->
@include('sections.reservation')
<!-- Reservation Start -->

<!-- Team Start -->
@include('sections.team')
<!-- Team End -->

<!-- Testimonial Start -->
@include('sections.testimonial')
<!-- Testimonial End -->
@endsection