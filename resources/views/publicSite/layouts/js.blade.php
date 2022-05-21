<script src="{{url('/')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/js/all.min.js"></script>
<script src="{{url('/')}}/assets/pages/scripts/all.min.js"></script>

@yield('js')

<script>
    $(document).ready(function () {
        $(".wish-icon i").click(function () {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>

@stack('js')
