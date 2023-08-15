@extends('layouts.mainlayout')

@section('title', 'home')

@push('styles')
<style>
    .pricing-block .price {
        font-size: 35px;
    }
</style>
@endpush

@section('content')

    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/image/wifi.jpg') }});background-size: 90% 180%;"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Price Plan Three</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Price Plan </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Start Pricing Five Section-->
    <section class="pricing-style-two centred">
        <div class="pattern-layer"  style="background-image: url({{ asset('assets/image/shape-52.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title style-two centred">
                <h5>Pricing</h5>
                <h2>Explore Flexible Pricing Plans </h2>
                <div class="divider" style="background-image: url({{ asset('assets/image/divider-1') }});"></div>
            </div>
            <div class="row">
                
                <div class="col-md-12">
                    <h2>Residential Internet Pricing Plans </h2>
                </div>
                <!-- Pricing block -->
                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>SMErt Home</h3>
                        <div class="price"> <sup>₦</sup>13,650</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 10Mbps</li>
                            <li>Unlimited</li>
                        </ul>
                        <!-- <a href="" class="theme-btn1 btn-style-five"><span class="btn-title">Read More</span></a> -->
                    </div>
                </div>

                <!-- Pricing block -->
                <div class="pricing-block tagged col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <h3>Silver Home</h3>
                        <div class="price"> <sup>₦</sup>18,700</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 15Mbps</li>
                            <li>Unlimited</li>
                        </ul>
                    </div>
                </div>

                <!-- Pricing block -->

                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>Premium Home</h3>
                        <div class="price"> <sup>₦</sup>28,700</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 20Mbps</li>
                            <li>Unlimited</li>
                        </ul>
                    </div>
                </div>
                <!-- Pricing block -->

                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>Premium Plus Home</h3>
                        <div class="price"> <sup>₦</sup>38,900</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 25Mbps</li>
                            <li>Unlimited</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-12">
                    <h2>SME Internet Pricing Plans </h2>
                </div>
                <!-- Pricing block -->
                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>SME Silver</h3>
                        <div class="price"> <sup>₦</sup>45,500</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 10Mbps</li>
                            <li>Unlimited</li>
                            <li>SetUp <b><sup>₦</sup>75,000</b></li>
                        </ul>
                        <!-- <a href="" class="theme-btn1 btn-style-five"><span class="btn-title">Read More</span></a> -->
                    </div>
                </div>

                <!-- Pricing block -->
                <div class="pricing-block tagged col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <h3>SME Topaz</h3>
                        <div class="price"> <sup>₦</sup>82,500</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 15Mbps</li>
                            <li>Unlimited</li>
                            <li>Set-Up <b><sup>₦</sup>85,000</b></li>
                        </ul>
                    </div>
                </div>

                <!-- Pricing block -->

                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>SME Topaz Plus</h3>
                        <div class="price"> <sup>₦</sup>122,500</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 20Mbps</li>
                            <li>Unlimited</li>
                            <li>Set-Up <b><sup>₦</sup>95,000</b></li>
                        </ul>
                    </div>
                </div>
                <!-- Pricing block -->

                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <h3>Premium Diamond</h3>
                        <div class="price"> <sup>₦</sup>155,975</div>
                        <ul class="features">
                            <li>30 Days</li>
                            <li>Up to 25Mbps</li>
                            <li>Unlimited</li>
                            <li>Set-Up <b><sup>₦</sup>105,000</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Five Section -->



@endsection

@push('scripts')
@endpush