<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Member Guild KSB</h5>
            <h1 class="mb-5">Pasukan Tante</h1>
        </div>
        <div class="row g-4">
            @php
                $teamMembers = [1, 2, 3, 4, 2, 3, 4, 1]; // Pattern untuk 8 team members
            @endphp
            
            @foreach($teamMembers as $index => $img)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + (($index % 4) * 0.2) }}s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="{{ asset('img/team-'.$img.'.jpg') }}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>