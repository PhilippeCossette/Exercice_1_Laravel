@extends('master')
@section('title', 'About Us')
@section('content')
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Our mission is to bring the perfect keyboard to every desk.</h1>
                    <p class="lead fw-normal text-muted mb-4">
                        At KeyCraft, we believe that typing should be a pleasure. That’s why we provide high-quality,
                        customizable mechanical keyboards for enthusiasts, professionals, and gamers alike.
                        Whether you’re looking for your first mechanical keyboard or a premium custom build, we’ve got you covered.
                    </p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Discover our story</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/img/kb-typing.jpg') }}" alt="Keyboards showcase" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Our beginning</h2>
                <p class="lead fw-normal text-muted mb-0">
                    KeyCraft started with a simple idea: keyboards should be as unique as the people using them.
                    From small custom builds for friends, we grew into a dedicated store helping thousands
                    of people find the perfect board, switch, and keycap set to match their style.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/img/kb-closeup.jpg') }}" alt="Workshop" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Growth &amp; innovation</h2>
                <p class="lead fw-normal text-muted mb-0">
                    What started as a small workshop has grown into a thriving community.
                    We now offer premium parts, DIY kits, and full custom services.
                    Our passion for keyboards pushes us to constantly innovate and create products
                    that combine performance, durability, and style.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Meet the team</h2>
            <p class="lead fw-normal text-muted mb-5">Passionate about keyboards, dedicated to you</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img style="object-fit: cover; width: 150px; height: 150px;" class="img-fluid rounded-circle mb-4" src="{{ asset('assets/img/team/alex-carter.jpg') }}" alt="Alex Carter" />
                    <h5 class="fw-bolder">Alex Carter</h5>
                    <div class="fst-italic text-muted">Founder &amp; Lead Designer</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img style="object-fit: cover; width: 150px; height: 150px;" class="img-fluid rounded-circle mb-4" src="{{ asset('assets/img/team/samantha-lee.jpg') }}" alt="Samantha Lee" />
                    <h5 class="fw-bolder">Samantha Lee</h5>
                    <div class="fst-italic text-muted">Head of Operations</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img style="object-fit: cover; width: 150px; height: 150px;" class="img-fluid rounded-circle mb-4" src="{{ asset('assets/img/team/marcus-rivera.jpg') }}" alt="Marcus Rivera" />
                    <h5 class="fw-bolder">Marcus Rivera</h5>
                    <div class="fst-italic text-muted">Customer Experience Manager</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img style="object-fit: cover; width: 150px; height: 150px;" class="img-fluid rounded-circle mb-4" src="{{ asset('assets/img/team/nina-patel.jpg') }}" alt="Nina Patel" />
                    <h5 class="fw-bolder">Nina Patel</h5>
                    <div class="fst-italic text-muted">Technical Lead</div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection("content")