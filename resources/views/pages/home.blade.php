@extends('layouts.app')

@section('title')
    Fortuna
@endsection

@section('content')
    <!-- header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful Word
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You Will see Beautiful
            <br>
            Dont Skip This Momen
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <P>Member</P>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <P>Country</P>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <P>Hotel</P>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <P>Partners</P>
                </div>

            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br>
                            before in this word
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="pupularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('{{ $item->galleries->count()? Storage::url($item->galleries->first()->image) : '' }}') ;">
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail',$item->slug ) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <section class="section-network" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our networks</h2>
                        <p>
                            Compaines are trusted ut
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/partner.png') }}" alt="logo" class="img-partner">
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They are loving us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial.png" alt="user">
                                <div class="mb-4 rounded-circle">
                                    <h3 class="mb-4">Angga Risky</h3>
                                    <p class="testimonial">
                                    " It was glorius and i cloud not stop to
                                    say wohooo for
                                    every single moment dankeeeeee "
                                    </p>
                                </div>
                                <hr/>
                                <p class="trip-to mt-2">
                                    Trip to Ubud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/avatar-2.png" alt="user">
                                <div class="mb-4 rounded-circle">
                                    <h3 class="mb-4">Angel Shakira</h3>
                                    <p class="testimonial">
                                    " Enjoy a relaxing trip with 
                                    an interesting program "
                                    </p>
                                </div>
                                <hr/>
                                <p class="trip-to mt-2">
                                    Trip to Paris
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection