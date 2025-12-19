<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                @if(isset($parent))
                <li class="breadcrumb-item"><a href="#">{{ $parent }}</a></li>
                @endif
                <li class="breadcrumb-item text-white active" aria-current="page">{{ $active }}</li>
            </ol>
        </nav>
    </div>
</div>