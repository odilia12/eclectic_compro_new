@extends('main')
@section('body')
    <header class="page-hero" style="background-image: url('{{ asset('assets/img/home.webp') }}')">
        <div class="container page-hero-content">
            <h1 class="page-hero-title">{{ $solution['name'] }}</h1>
            <div class="page-hero-breadcrumb">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('our_solutions') }}">Our Solution</a> /
                {{ $solution['name'] }}
            </div>
        </div>
    </header>

    @if (($solution['slug'] ?? '') === 'sap')
        <section class="page-section sap-erp-intro">
            <div class="container">
                <div class="text-center">
                    <h2 class="sap-erp-title">SAP</h2>
                    <div class="sap-erp-desc">
                        SAP is a world-leading Enterprise Resource Planning (ERP) platform that integrates and manages all core business processes within a single, unified system. It connects key functions such as finance, procurement, supply chain, manufacturing, sales, and human resources, allowing organizations to operate with full visibility, consistency, and control across all departments and business units.
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section sap-solution">
            <div class="container">
                <div class="text-center">
                    <h2 class="sap-solution-title">
                        Strategic business solutions and SAP product implementation that is hyper-focused on
                        building what your business needed.
                    </h2>
                </div>

                <div class="row g-4 justify-content-center pt-4">
                    <div class="col">
                        <div class="sap-product-card">
                            <div class="sap-product-logo sap-logo-rise">RISE<br />WITH<br />SAP</div>
                            <div class="sap-product-name">SAP S/4HANA Cloud Private Edition</div>
                            <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sap-product-card">
                            <div class="sap-product-logo sap-logo-grow">GROW<br />WITH<br />SAP</div>
                            <div class="sap-product-name">SAP S/4HANA Cloud Public Edition</div>
                            <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sap-product-card">
                            <div class="sap-product-logo sap-logo-sf">SAP SuccessFactors</div>
                            <div class="sap-product-name">Suite of cloud-based HCM software</div>
                            <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="row g-4 justify-content-center pt-4">
                    <div class="col">
                        <div class="sap-product-card">
                            <div class="sap-product-logo sap-logo-sac">SAP Analytics Cloud</div>
                            <div class="sap-product-name">A complete solution for analytics and planning</div>
                            <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sap-product-card">
                            <div class="sap-product-logo sap-logo-btp">SAP Business Technology Platform</div>
                            <div class="sap-product-name">Innovation platform optimized for SAP applications</div>
                            <a class="sap-product-btn" href="{{ route('maintenance') }}">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section sap-why">
            <div class="container">
                <div class="text-center">
                    <h2 class="sap-why-title">Why SAP is Essential for Streamlining Business Processes?</h2>
                </div>

                <div class="sap-why-icons">
                    <div class="sap-why-icon-item">
                        <div class="sap-why-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                    </div>
                    <div class="sap-why-icon-item">
                        <div class="sap-why-icon">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>
                    </div>
                    <div class="sap-why-icon-item">
                        <div class="sap-why-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                    </div>
                    <div class="sap-why-icon-item">
                        <div class="sap-why-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                    </div>
                </div>

                <div class="sap-why-body">
                    <div class="sap-why-text">
                        <div class="sap-why-subtitle">Business Process</div>
                        <div class="sap-why-paragraph">
                            Without a centralized system to manage operations, businesses often face inefficiencies due to manual processes, inconsistent practices, and scalability issues. Many companies rely on spreadsheets and disconnected tools to handle various tasks, leading to errors, redundancies, and slowdowns.
                        </div>
                    </div>
                    <div class="sap-why-illustration">
                        <img src="{{ asset('assets/img/landingpage/leading_digital_future.png') }}" alt="Business process illustration" />
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section sap-value">
            <div class="container">
                <div class="sap-value-grid">
                    <div class="sap-value-image" style="background-image: url('{{ asset('assets/img/home.webp') }}')">
                        <div class="sap-value-image-overlay">
                            <div class="sap-value-image-text">
                                Eclectic Consulting<br />
                                Unparalleled Value As<br />
                                SAP Implementor
                            </div>
                        </div>
                    </div>
                    <div class="sap-value-points">
                        <div class="sap-value-point">
                            <div class="sap-value-point-icon"><i class="fa-solid fa-user"></i></div>
                            <div class="sap-value-point-text">Came from the backgrounds as an actual SAP user.</div>
                        </div>
                        <div class="sap-value-point">
                            <div class="sap-value-point-icon"><i class="fa-regular fa-lightbulb"></i></div>
                            <div class="sap-value-point-text">Proven methods to implement evolutionary solution, instead of business revolution.</div>
                        </div>
                        <div class="sap-value-point">
                            <div class="sap-value-point-icon"><i class="fa-solid fa-medal"></i></div>
                            <div class="sap-value-point-text">Our achievement as a Gold Partner in such a short time as an implementor and our rich clientele says all.</div>
                        </div>
                        <div class="sap-value-point">
                            <div class="sap-value-point-icon"><i class="fa-regular fa-thumbs-up"></i></div>
                            <div class="sap-value-point-text">Our people are the best SAP implementor in Indonesia, acknowledged by our principal.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section sap-client">
            <div class="container">
                <div id="sapClientCarousel" class="carousel slide sap-client-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="sap-client-card">
                                <div class="sap-client-logo">
                                    <img src="{{ asset('assets/img/success_story/sidomuncul.png') }}" alt="Sido Muncul" />
                                </div>
                                <div class="sap-client-content">
                                    <div class="sap-client-title">PT Industri Jamu dan Farmasi Sido Muncul Tbk</div>
                                    <div class="sap-client-text">
                                        As a traditional herbal manufacturing company, we need a global ERP system to scale up our fast-growing business. We have benefited from SAP S/4 HANA to give real-time information...
                                    </div>
                                    <a class="sap-client-btn" href="{{ route('maintenance') }}">learn more about us</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="sap-client-card">
                                <div class="sap-client-logo">
                                    <img src="{{ asset('assets/img/success_story/pollux.png') }}" alt="Pollux Properties" />
                                </div>
                                <div class="sap-client-content">
                                    <div class="sap-client-title">PT Pollux Properti Indonesia Tbk</div>
                                    <div class="sap-client-text">
                                        Eclectic has been a trusted partner for years. Working with them has transformed our business and improved our operational efficiency through SAP implementation.
                                    </div>
                                    <a class="sap-client-btn" href="{{ route('maintenance') }}">learn more about us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sap-client-controls">
                        <button class="sap-client-control sap-client-control-prev" type="button" data-bs-target="#sapClientCarousel" data-bs-slide="prev" aria-label="Previous"></button>
                        <button class="sap-client-control sap-client-control-next" type="button" data-bs-target="#sapClientCarousel" data-bs-slide="next" aria-label="Next"></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section sap-industry">
            <div class="container">
                <div class="text-center">
                    <h2 class="sap-industry-title">Eclectic Consulting SAP Solutions Approach<br />by Industry</h2>
                </div>

                <div class="row g-4 justify-content-center pt-4">
                    <div class="col-12 col-md-4">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/1.jpg') }}')">
                            <span class="industry-card-label">Pharmacy and Chemicals</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/2.jpg') }}')">
                            <span class="industry-card-label">Consumer Goods</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/3.jpg') }}')">
                            <span class="industry-card-label">Logistics</span>
                        </a>
                    </div>
                </div>

                <div class="row g-4 justify-content-center pt-3">
                    <div class="col-12 col-md-3">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/4.jpg') }}')">
                            <span class="industry-card-label">Retail and Distribution</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/5.jpg') }}')">
                            <span class="industry-card-label">Mills</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/6.jpg') }}')">
                            <span class="industry-card-label">Real Estate</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <a class="industry-card" href="{{ route('maintenance') }}" style="background-image: url('{{ asset('assets/img_template/portfolio/3.jpg') }}')">
                            <span class="industry-card-label">Oil and Gas</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @elseif (($solution['slug'] ?? '') === 'yonyou')
        <section class="page-section yonyou-hero">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-12 col-lg-7">
                        <div class="yonyou-title">YONYOU</div>
                        <div class="yonyou-text">
                            Yonyou is an Enterprise Resource Planning (ERP) system that integrates core business functions such as finance, human resources, and supply chain into a single, unified platform. By centralizing data and processes, it enables organizations to streamline operations, improve accuracy, and enhance overall efficiency.
                            <br /><br />
                            With Yonyou, businesses gain real-time visibility across departments, allowing for better coordination, faster decision-making, and stronger operational control. Its scalable and flexible architecture makes it well suited for companies looking to standardize processes and support sustainable growth.
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="yonyou-logo">
                            <img src="{{ asset('assets/img/logo/yonyou.png') }}" alt="Yonyou" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sap-divider"></div>

        <section class="page-section yonyou-help">
            <div class="container">
                <div class="yonyou-section-title">How It Helps Your Business?</div>
                <div class="yonyou-text yonyou-text-center">
                    Yonyou eliminates disconnected systems by providing a unified platform for managing operations. This allows businesses to monitor performance in real time and make faster, more accurate decisions. For example, finance and inventory data are automatically synchronized, reducing errors and improving planning accuracy.
                </div>
            </div>
        </section>

        <section class="page-section yonyou-benefits-section">
            <div class="container">
                <div class="yonyou-section-title">What Are The Benefits?</div>

                <div class="yonyou-benefits-grid">
                    <div class="yonyou-benefits-illustration">
                        <img src="{{ asset('assets/img/landingpage/leading_digital_future.png') }}" alt="Yonyou benefits" />
                    </div>
                    <div class="yonyou-benefits-items">
                        <div class="yonyou-benefit-item">
                            <div class="yonyou-benefit-icon"><i class="fa-solid fa-gears"></i></div>
                            <div class="yonyou-benefit-title">Operational efficiency</div>
                            <div class="yonyou-benefit-desc">Automated workflows reduce manual tasks</div>
                        </div>
                        <div class="yonyou-benefit-item">
                            <div class="yonyou-benefit-icon"><i class="fa-solid fa-database"></i></div>
                            <div class="yonyou-benefit-title">Better data accuracy</div>
                            <div class="yonyou-benefit-desc">Integrated systems minimize errors</div>
                        </div>
                        <div class="yonyou-benefit-item">
                            <div class="yonyou-benefit-icon"><i class="fa-regular fa-clock"></i></div>
                            <div class="yonyou-benefit-title">Real-time visibility</div>
                            <div class="yonyou-benefit-desc">Monitor business performance instantly</div>
                        </div>
                        <div class="yonyou-benefit-item">
                            <div class="yonyou-benefit-icon"><i class="fa-solid fa-people-group"></i></div>
                            <div class="yonyou-benefit-title">Improved coordination</div>
                            <div class="yonyou-benefit-desc">Align all departments in one system</div>
                        </div>
                        <div class="yonyou-benefit-item">
                            <div class="yonyou-benefit-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                            <div class="yonyou-benefit-title">Cost optimization</div>
                            <div class="yonyou-benefit-desc">Reduce inefficiencies and operational waste</div>
                        </div>
                    </div>
                </div>

                <div class="yonyou-cta">
                    Imagine having full control over every aspect of your business.<br />
                    Let’s simplify and optimize your operations with Yonyou. Contact us now.
                </div>
            </div>
        </section>
    @else
        <section class="page-section page-solution">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="solution-card">
                            <div class="solution-card-logo">
                                <img src="{{ asset($solution['logo']) }}" alt="{{ $solution['name'] }}" />
                            </div>
                            <div class="solution-card-name">{{ $solution['name'] }}</div>
                            <div class="milestone-desc">
                                Detail halaman untuk {{ $solution['name'] }}. Silakan isi konten sesuai kebutuhan (deskripsi layanan, fitur, studi kasus, dll).
                            </div>
                            <div class="pt-3">
                                <a class="solution-card-btn" href="{{ route('our_solutions') }}">Back to Our Solution</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endif

    @include('contact_solution')
@endsection
