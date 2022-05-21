<script src="{{url('/')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/js/all.min.js"></script>
<script src="{{url('/')}}/assets/pages/scripts/all.min.js"></script>

<script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="{{url('/')}}/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>

@yield('js')

<script>
    $(document).ready(function () {
        $(".wish-icon i").click(function () {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>


@stack('js')
