@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Bize Ulaşın
                    </h4>
                    <div class="contact_link_box">
                        <a href="https://goo.gl/maps/USTy4vEin8f86bW66">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  {{ $setting->address }}
                </span>
                        </a>
                        <a href="tel:05317263850">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                {{ $setting->phone }}

                </span>
                        </a>
                        <a href="mailto:info@lottie.com.tr">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                  {{ $setting->email }}
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="{{route('index')}} " class="logo"><img width="150px" src="{{asset('assets')}}/images/logo.png" ></a>
                    <div style="margin-top: 10px"
                    <p>
                        {{ $setting->companyslogan }}
                    </p>
                </div>
                    <div class="footer_social">

                        @if($setting->instagram != null)<a href="{{ $setting->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>@endif
                        @if($setting->twitter != null)<a href="{{ $setting->twitter }} "><i class="fa fa-twitter" aria-hidden="true"></i></a>@endif
                        @if($setting->facebook != null)<a href="{{ $setting->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>@endif
                        @if($setting->youtube != null)<a href="{{ $setting->youtube }}"><i class="fa fa-youtube" aria-hidden="true"></i></a>@endif
                        @if($setting->twitter != null)<a href="{{ $setting->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>@endif

                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h4>
                    Çalışma Saatleri
                </h4>
                <p>
                    Her gün
                </p>
                <p>
                    {{ $setting->openinghours }}
                </p>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span>
                <a href="/">{{ $setting->company }}</a><br><br>

            </p>
        </div>
    </div>
</footer>
<!-- footer section -->


<!-- jQery -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="assets/js/custom.js"></script>

<!-- usericon js -->
<script src="assets/js/usericon.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->

