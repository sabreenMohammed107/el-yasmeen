<script src="{{ asset('webassets/js/jquery.min.js')}}"></script>
<script src="{{ asset('webassets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('webassets/js/popper.min.js')}}"></script>
<script src="{{ asset('webassets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('webassets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('webassets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('webassets/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('webassets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('webassets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('webassets/js/aos.js')}}"></script>
<script src="{{ asset('webassets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('webassets/js/scrollax.min.js')}}"></script>
<script src="{{ asset('webassets/js/main.js')}}"></script>
<script>
      const navLinks = document.querySelectorAll('.nav-item')
    const menuToggle = document.getElementById('ftco-nav')
    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})

    navLinks.forEach((l) => {
        l.addEventListener('click', () => { bsCollapse.toggle()  })
    })
</script>
    @yield('scripts')

</body>

</html>
