@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('{{ asset('assets/img/home.webp') }}')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">Exciting Career</h1>
            <div class="page-hero-breadcrumb"><a href="{{ route('home') }}">Home</a> / Exciting Career</div>
        </div>
    </header>

    <section class="page-section career-page">
        <div class="container">
            <div class="career-intro">
                <h2 class="career-title">
                    Let’s produce great work with great people. Come and join a<br />
                    team of smart and supportive people committed to learning and<br />
                    improving.
                </h2>
                <div class="career-subtitle">
                    Help us help companies unlock their full potential by creatively implementing SAP solutions. If you eager to grow professionally and learn precious experience, we might have a seat for you!
                </div>
                <a class="career-cta" href="mailto:info@eclectic.co.id" target="_blank" rel="noopener noreferrer">Join Us!</a>
            </div>

            <div class="career-gallery">
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 1" />
                </div>
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 2" />
                </div>
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 3" />
                </div>
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 4" />
                </div>
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 5" />
                </div>
                <div class="career-gallery-item">
                    <img src="{{ asset('assets/img/landingpage/team.png') }}" alt="Career 6" />
                </div>
            </div>

            <div class="career-why">
                <div class="career-why-title">Why Join Us?</div>
                <div class="career-why-text">
                    At Eclectic Consulting, we believe in the power of innovation and creativity to transform businesses. Our mission is to help companies unlock their full potential by implementing cutting-edge SAP solutions that drive efficiency, productivity, and growth. We invite you to be part of this exciting journey, where your contributions will directly impact the success of companies across Indonesia and beyond.
                    <br /><br />
                    We’re looking for passionate individuals who are eager to grow professionally, continuously learn, and tackle new challenges. At Eclectic Consulting, we foster an environment that encourages creativity, collaboration, and personal development. Whether you’re an experienced professional or just starting your career, we provide the support and opportunities needed to thrive.
                    <br /><br />
                    By joining our team, you will work with the latest SAP technologies, learn from some of the best minds in the industry, and gain invaluable experience in implementing world-class solutions. We believe in empowering our employees to take ownership of their projects, innovate, and bring fresh ideas to the table. Your growth is our priority, and we are committed to providing a dynamic, rewarding career path for every member of our team.
                    <br /><br />
                    At Eclectic, we value teamwork, curiosity, and a strong desire to make a difference. We offer a supportive and inclusive workplace, where you can collaborate with skilled professionals and learn from diverse perspectives. If you’re ready to take your career to the next level, solve complex business challenges, and be part of something impactful, we might have the perfect role for you.
                    <br /><br />
                    Join us and help shape the future of business by leveraging the power of SAP. Together, we can make a difference. Explore our current job openings at Eclectic Consulting, and take the next step in your professional journey with us!
                </div>
            </div>
        </div>
    </section>

    @include('contact_solution')
@endsection
