
<footer id="colorlib-footer">
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>

                    </p>

                    <div class="social_icon">
                        <a href="https://fb.me/" target="_blank">
                        </a>
                    </div>
                    {{-- <div class="contact-us">
                        <a href="contact">
                            <img src="{{ URL::asset('images/envelope.png')}}">
                        </a>
                    </div>
                    <div class="footprint">
                        <a href="footprint">
                            <img src="{{ URL::asset('images/footprint.gif')}}">
                        </a>
                    </div> --}}


                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

@section('script')
<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{ URL::asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ URL::asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{ URL::asset('js/jquery.stellar.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{ URL::asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('js/magnific-popup-options.js')}}"></script>
<!-- Counters -->
<script src="{{ URL::asset('js/jquery.countTo.js')}}"></script>
<!-- Main -->
<script src="{{ URL::asset('js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    @if(session()->has('alert_msg'))
    Swal.fire('{{session('alert_msg')}}')
    @endif
</script>

@show


</body>
</html>

