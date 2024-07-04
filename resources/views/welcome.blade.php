@extends('app.layouts.app')
@section('style')
    <style>
        .hero {


            height: 100vh;
            /* make the hero section full-screen height */

            width: 100%;
            /* make the hero section full-screen width */

            background-size: cover;
            /* make the background image cover the entire section */

            background-position: center;
            /* center the background image */

            display: flex;
            /* make the section a flex container */

            justify-content: center;
            /* center the content horizontally */

            align-items: center;
            /* center the content vertically */

        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('{{ asset('images/destinations/no-image.jpg') }}')">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center text-white">
                    <h1 class="display-4" style="font-weight: 600; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome to
                        Our Travel Agency</h1>
                    <p class="lead" style="font-weight: 500; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">Explore the world
                        with us</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna
                        sed, convallis ex.</p>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination Section -->
    <section class="destination">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3">Popular Destinations</h2>
                    <div class="row">
                        @foreach ($destinations as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/destinations/'.$item->image) }}" alt="{{ $item->destination_name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->destination_name }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3">Get in Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
