@extends('showroom.layout')
@section('contenu')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Make Better Life With Trusted Analitic Tool</h1>
                    <p class="animated slideInDown">Get the best out of your mobile money POS by fetching and analising your data
                        with a more efficient and time saving tool, that will change your life for good. be updated 
                        in real time about 
                        </p>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a>
                </div>

                        <div class="col-sm-5 pe-0  justify-content-right">
                            <div class="col">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                
                                    <div class="card-header">
                                    @if (Route::has('login'))

                                    <h3 class="text-center font-weight-light my-4">
                                    @auth

                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                                    @endauth
                                </h3>
                                    @endif
                                
                                </div>


                                    <div class="card-body">
                                        
                                        <form method="POST" action="{{route('login')}}" >
                                        @csrf    
                                                {{$errors}} 
                                        <div class="form-floating mb-3">
                                                <input name="email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" :value="old('email')" required autofocus />
                                                <label for="email" :value="__('email')">Email address</label>
                                                <div class="invalid-feedback">Email Not good !</div>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" required autocomplete="current-password"  id="inputPassword" type="password" name="password" />
                                                <label for="inputPassword" :value="__('Password')">Password</label>
                                            </div>

                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button class="btn btn-primary">{{ __('Log in') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <!-- only admin creates accounts and send credentials -->
                                        <!--<div class="small"><a href="register.html">Need an account? Sign up!</a></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                <!--<div class="col-lg-6 animated fadeIn">-->




                    <!--<img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-1.png" alt="">-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5" >
        <div class="container" id="about">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/about.png" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p class="text-primary fs-5 mb-4">The Most Trusted Cryptocurrency Platform</p>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                            Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Tempor erat elitr rebum at clita</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Tempor erat elitr rebum at clita</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Tempor erat elitr rebum at clita</span>
                        </div>
                        <a class="btn btn-primary py-3 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                    
                    <!-- les nobres venant de la base de donnée-->
            <h1 class="display-4" data-toggle="counter-up">00345</h1> <!-- les nobres venant de la base de donnée-->
                    <p class="fs-5 text-primary mb-0">Today Transactions</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="img/icon-10.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1> <!-- les nobres venant de la base de donnée-->
                    <p class="fs-5 text-primary mb-0">Monthly Transactions</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1> <!-- les nobres venant de la base de donnée-->
                    <p class="fs-5 text-primary mb-0">Total Transactions</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Why Us!</h1>
                <p class="text-primary fs-5 mb-5">The Best In The crypto Industry</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Easy To Start</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-6.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Safe & Secure</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-5.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Affordable Plans</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Secure Storage</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Protected By Insurance</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">24/7 Support</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5" id="service">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Services</h1>
                <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">Currency Wallet</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h5 class="mb-3">Currency Transaction</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3">Bitcoin Investment</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-5.png" alt="">
                        <h5 class="mb-3">Currency Exchange</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h5 class="mb-3">Bitcoin Escrow</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Service End -->

        <!-- Google Map Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->

      <!-- Contact Start -->
      <div class="container-xxl py-5" id="contact">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-6">Contact Us</h1>
                    <p class="text-primary fs-5 mb-0">If You Have Any Query, Please Contact Us</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-4" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">Our office:</p>
                    <h4>123 Street, New York, USA</h4>
                    <hr class="w-100">
                    <p class="mb-2">Call us:</p>
                    <h4>+012 345 6789</h4>
                    <hr class="w-100">
                    <p class="mb-2">Mail us:</p>
                    <h4>info@example.com</h4>
                    <hr class="w-100">
                    <p class="mb-2">Follow us:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Your Phone Number">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                                

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" placeholder="Your City">
                                    <label for="city">Your City</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
