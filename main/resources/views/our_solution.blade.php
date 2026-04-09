@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('{{ asset('assets/img/header/our_solution_crop.png') }}')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">Our Solution</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / Our Solution</div>
        </div>
    </header>

    <section class="page-section page-solution">
        <div class="container">
            <div class="text-center">
                <div class="page-solution-kicker">Redefining what's possible through smarter technology solution</div>
                <h2 class="page-solution-title">
                    Transforming business through integrated technology solutions<br />
                    Build around your needs, Powered by leading platforms
                </h2>
            </div>

            <div class="row g-4 justify-content-center pt-4">
                @foreach ($solutions as $solution)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="solution-card">
                            <div class="solution-card-logo">
                                <img src="{{ asset($solution['logo']) }}" alt="{{ $solution['name'] }}" />
                            </div>
                            <div class="solution-card-name">{{ $solution['name'] }}</div>
                            <a class="solution-card-btn" href="{{ $solution['url'] }}">Learn more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('contact_solution')
@endsection
