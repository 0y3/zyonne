@extends('layouts.mainlayout')

@section('title', 'home')

@push('styles')
<style>
    .slide-item img{
        max-height: 800px !important;
    }
    .event-block-two .inner-box {
        padding: 15px 10px;
    }


.acc-title {
    text-align: center;
    font-size: 3rem;
    padding: 1rem;
    color: rgba(58, 72, 218, 0.9);
}

.acc-container {
    padding: 2rem 2rem;
}
.acc-btn {
    width: 100%;
    padding: 1rem 2rem;
    font-size: 1.2rem;
    cursor: pointer;
    background: inherit;
    border: none;
    outline: none;
    text-align: left;
    transition: all 0.5s linear;
}
.acc-btn:after {
    content: "\27A4";
    color: #5851dc;
    float: right;
    transition: all 0.3s linear;
}
.acc-btn.is-open:after {
    transform: rotate(90deg);
}
.acc-btn:hover, .acc-btn.is-open {
    color: #000;
    font-weight: bold;
}

.acc-content {
    max-height: 0;
    color: rgba(0,0,0,0.75);
    font-size: 1.5rem;
    margin: 0 2rem;
    padding-left: 1rem;
    overflow: hidden;
    transition: max-height 0.3s ease-in-out;
    border-bottom: 1px solid #ccc;
}

.credit {
    text-align: center;
    padding: 1rem;
}
.credit a {
    text-decoration: wavy underline;
    color: dodgerblue;
}
</style>
@endpush

@section('content')

 <!-- Bnner Section -->
 <section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">

        <!-- Slide Item -->
        <div class="slide-item">
            <img src="{{ asset('assets/images/main-slider/slide7.jpg') }}" height="300px" alt="" />
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <img src="{{ asset('assets/images/main-slider/slide6.png') }}" height="300px" alt="" />
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <img src="{{ asset('assets/images/main-slider/slide1.png') }}" height="300px" alt="" />
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <img src="{{ asset('assets/images/main-slider/slide5.png') }}" height="300px" alt="" />
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <img src="{{ asset('assets/images/main-slider/close-up-woman-being-fed.png') }}" height="300px" alt="" />
        </div>

    </div>
</section>
<!-- End Bnner Section -->

<!-- Services Form Section -->
{{-- <section class="services-form-section">
    <div class="image-layer" style="background-image:url({{ asset('assets/images/background/1.png') }})"></div>
    <div class="container ">

        <!-- Services Form -->
        <div class="services-form">

            <!--Contact Form-->
            <form method="post" action="contact.html">
                <div class="row">

                    <!--Form Group-->
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <div class="map-icon fas fa-map-marker-alt"></div>
                        <div class="location-icon icon-target"></div>
                        <select class="custom-select-box">
                            <option>Select your area</option>
                            <option>Area One</option>
                            <option>Area Two</option>
                            <option>Area Three</option>
                            <option>Area Four</option>
                        </select>
                    </div>

                    <!--Form Group-->
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <select class="custom-select-box">
                            <option>Select Service type</option>
                            <option>Service One</option>
                            <option>Service Two</option>
                            <option>Service Three</option>
                            <option>Service Four</option>
                        </select>
                    </div>

                    <!--Form Group-->
                    <div class="form-group button-group col-lg-4 col-md-12 col-sm-12">
                        <div class="left-curves"></div>
                        <div class="right-curves"></div>
                        <button class="theme-btn submit-btn" type="submit" name="submit-form">Get Your Service Now</button>
                    </div>

                </div>
            </form>

        </div>

    </div>
</section> --}}
<!-- End Services Form Section -->

<!-- Welcome Section -->
<section class="booking-section featured-section">
    <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-1.png') }})"></div>
    <div class="container">
        <!-- Sec Title -->
        <div class="section-title text-center">
            <h2 style="color: rgba(58, 72, 218, 0.9);">Welcome To Zyonne</h2>
            <p class="text pb-3" style="color: #223a66;font-weight: bold;">A Residential Assisted Living Oasis</p>
        </div>

        {{-- <div class="row">

            <!-- Featured Block -->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-pill"></span>
                    </div>
                    <h3><a href="#">Specialised <br> Support</a></h3>
                    <p>The hospital plays a statewide role in rehabilitation services, which includes the Acquired</p>
                </div>
            </div>

            <!-- Featured Block -->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                    <div class="icon-box">
                        <span class="icon icon-diagnosis"></span>
                    </div>
                    <h3><a href="#">Diagnosis & <br> Investigation</a></h3>
                    <p>Hospital doctors examine patients so that they can diagnose and treat health conditions</p>
                </div>
            </div>

            <!-- Featured Block -->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                    <div class="icon-box">
                        <span class="icon icon-medical1"></span>
                    </div>
                    <h3><a href="#">Medical & <br> Surgical</a></h3>
                    <p>Medicine is a very wide field with many possible specialisms. Some doctors work in general</p>
                </div>
            </div>

        </div> --}}
    </div>
</section>
<!-- End Wellcome Section -->

<!-- Fullwidth Section -->
<section class="container-fluid">
    <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
    <div class="outer-section">
        <div class="clearfix">

            <!-- Left Column -->
            <div class="left-column">
                <div class="inner-column">
                    <div class="shadow-one paroller" style="background-image:url({{ asset('assets/images/icons/shadow-1.png') }})" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
                    <div class="shadow-two paroller" style="background-image:url({{ asset('assets/images/icons/shadow-2.png') }})" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
                    <div class="shadow-three paroller" style="background-image:url({{ asset('assets/images/icons/shadow-3.png') }})" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
                    <div class="image">
                        <img src="{{ asset('assets/images/main-slider/image-2.png') }}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <div class="inner-column">
                    <ul class="featured-list">
                        <li class="wow fadeInUp clearfix" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="icon icon-user-3" style="background-color: #362ED9;"></span>
                            <div class="content">
                                <div class="title" style="color: rgba(58, 72, 218, 0.9);">Who we are</div>
                                <p>
                                    We are a faith-based Residential Assisted Living (RAL) oasis that provides a safe and comfortable home for
                                    seniors who need assistance with activities of daily living.
                                    We are unique in that we are not an institutionalized facility, but a community of caring
                                    professionals who are dedicated to helping our residents live their best lives in a home dedicated to their comfort.
                                </p>
                            </div>
                        </li>
                        <li class="wow fadeInUp clearfix" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <span class="icon icon-magic-wand"></span>
                            <div class="content">
                                <div class="title" style="color: rgba(58, 72, 218, 0.9);">What we do</div>
                                <p>
                                    We offer a variety of services and amenities to meet the needs of our residents, including:
                                    <b>Personal care assistance</b>,
                                    <b>Meal preparation & dining services</b>,
                                    <b>Housekeeping & laundry services</b>,
                                    <b>Medication management</b>,
                                    <b>Activities & social programs</b>.
                                </p>
                            </div>
                        </li>
                        <li class="wow fadeInUp clearfix" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <span class="icon icon-house-2"></span>
                            <div class="content">
                                <div class="title" style="color: rgba(58, 72, 218, 0.9);">Our Commitment</div>
                                <p>
                                    We are committed to providing our residents with a high quality of life.<br>
                                    We believe that every resident deserves to be treated with love and dignity.
                                    We are here to help our residents maintain their independence and dignity,
                                    and to provide them with a safe and comfortable place to call home.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Fullwidth Section -->
<section class="fullwidth-section-two">
    <div class="outer-container">
        <div class="clearfix">

            <!-- Left Column -->
            <div class="left-column" style="background-image:url({{ asset('assets/images/background/5.jpg') }})">
                <div class="inner-column">
                    <h2 class="pt-3">Are you looking for a home for your elderly loved one, where they will feel loved, cared for, and safe? </h2>
                     {{-- <h4 style="position: relative;color:#ffffff;font-weight:700;line-height:1.3em;">where they will feel loved, cared for, and safe?  </h4> --}}
                    <p class="text">&nbsp;</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="right-column" style="background-image:url({{ asset('assets/images/main-slider/slide3.jpeg') }})">
                <div class="inner-column">
                    <!-- Phone -->
                    <a href="" class="phone">
                        <span class="icon-box flaticon-phone-call"></span>
                        <span class="title">Give us a call today</span><strong>+1 (708) 465-5438</strong>
                    </a>
                </div>
            </div>
            {{-- <div class="left-column" style="background-image:url({{ asset('assets/images/background/5.jpg') }})">
                <div class="inner-column">
                    <h2>Subscribe to our <br> Newsletter</h2>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter your mail here" required>
                                <button type="submit" class="theme-btn subscribe-btn"><span class="icon icon-envelope3"></span> Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <p class="text">&nbsp;<br></p>
                </div>
            </div> --}}

            {{--
            <div class="right-column" style="background-image:url({{ asset('assets/images/main-slider/slide3.jpeg') }})">
                <div class="inner-column">
                    <!-- Phone -->
                    <a href="" class="phone">
                        <span class="icon-box flaticon-24-hours"></span>
                        <span class="title">Are You Looking For Elderly Care Just Call Us</span><strong>+1 (708) 580-0028</strong>
                    </a>
                </div>
            </div>
             --}}

        </div>
    </div>
</section>
<!-- End Fullwidth Section Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="team-pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-1.png') }})"></div>
    <div class="team-pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
    <div class="container">

        <!-- Sec Title -->
        <div class="section-title text-center">
            <h2>We introduce to you “<span style="color: rgba(58, 72, 218, 0.9);">Graceland</span>”</h2>
            <p class="text">Residential Assisted Living Board and Care home located in Frankfort Square in Will County, Illinois.</p>
        </div>
        <div class="row">

            <!-- Block -->
            <div class="column col-md-12 col-sm-12">
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            {{-- <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div> --}}
                            <h3>Over 1,500 square feet of living space in a quiet and senior friendly low traffic neighborhood.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>A 4 beds ranch home.</h3>
                        </div>
                    </div>
                </div>

                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>A functional sun room</h3>
                        </div>
                    </div>
                </div>

                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>Close proximity to park, shops, library, worship center, dinning and transport.</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="column col-lg-6 col-md-12 col-sm-12">

                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>A patio and fenced yard</h3>
                        </div>
                    </div>
                </div>

                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>A family room and living room area</h3>
                        </div>
                    </div>
                </div>

                <!-- Block -->
                <div class="event-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="content clearfix">
                            <!-- Event Date -->
                            <div class="event-date">
                                <span class="icon icon-check"></span>
                            </div>
                            <h3>Ample open space behind the home for gardening or recreation.</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="image-layer" style="background-image:url({{ asset('assets/images/background/4.png') }})"></div>
    <div class="container">
        <div class="title-box">
            <h2>“Graceland”</h2>
        </div>

        <div class="row">

            <!-- Project Block -->
            <div class="project-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('assets/images/gallery/1.jpeg') }}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content">
                                    <a class="plus" href="{{ asset('assets/images/gallery/1.jpeg') }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-eye"></span> view</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('assets/images/gallery/2.jpeg') }}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content">
                                    <a class="plus" href="{{ asset('assets/images/gallery/2.jpeg') }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-eye"></span> view</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('assets/images/gallery/3.jpeg') }}" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content">
                                    <h3><a href="#">View</a></h3>
                                    <a class="plus" href="{{ asset('assets/images/gallery/3.jpeg') }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-eye"></span> view</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <!-- Button Box -->
        {{-- <div class="button-box text-center">
            <a href="#" class="theme-btn btn-style-three">View All <span class="arrow icon-chevron-right"></span></a>
        </div> --}}

    </div>
</section>
<!-- End Gallery Section -->

<section class="">
    <h2 class="acc-title">FAQ</h2>
    <div class="col-md-8 offset-md-2">
        <div class="acc-container">

            <button class="acc-btn">What is Residential Assisted Living(RAL)? </button>
            <div class="acc-content">
                <p>
                    Residential Assisted Living is a type of senior care that provides housing, meals, personal care, and medication assistance to older adults who need help with activities of daily living (ADLs). Residential assisted living is a more independent living option than a nursing home, but it still offers a level of care and support that can help older adults maintain their independence and quality of life. It is not a nursing facility.
                </p>
            </div>

            <button class="acc-btn"> Who is a good candidate for Residential Assisted Living? </button>
            <div class="acc-content">
                <p>
                    A good candidate for Residential Assisted Living is an older adult who needs help with some or all of the following:<br>

                    <b>* Bathing </b> <br>
                    <b>* Dressing </b> <br>
                    <b>* Grooming </b> <br>
                    <b>* Toileting </b> <br>
                    <b>* Transferring</b> (getting in and out of bed or a chair)<br>
                    <b>* Medication management </b> <br>
                    <b>* Meal preparation </b> <br>
                    <b>* Housekeeping </b> <br>
                </p>
            </div>

            <button class="acc-btn">
                How much does Residential Assisted Living cost?
            </button>
            <div class="acc-content">
                <p>
                    The cost of residential assisted living varies depending on the location, the level of care provided, and the size and amenities of the facility.
                </p>
            </div>

            <button class="acc-btn">
                Is a Residential Assited Living located in a residential Neighborhood?
            </button>
            <div class="acc-content">
                <p>
                    Yes. It is a typical home in a residential community with amenities to support senior living.
                </p>
            </div>

            <button class="acc-btn">
                Is a Residential Assisted Living licensed by the state?
            </button>
            <div class="acc-content">
                <p>
                Yes it is.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>


// fn
$(".acc-btn").on('click', function () {
    this.classList.toggle("is-open");

  // the acc-content
  const content = this.nextElementSibling;

  // IF open, close | else open
  if (content.style.maxHeight) content.style.maxHeight = null;
  else content.style.maxHeight = content.scrollHeight + "px";
})
// const btns = document.querySelectorAll(".acc-btnn");
// function accordion() {
//   // this = the btn | icon & bg changed
//   this.classList.toggle("is-open");

//   // the acc-content
//   const content = this.nextElementSibling;

//   // IF open, close | else open
//   if (content.style.maxHeight) content.style.maxHeight = null;
//   else content.style.maxHeight = content.scrollHeight + "px";
// }

// // event
// btns.forEach((e) => e.addEventListener("click", accordion));
</script>
@endpush
