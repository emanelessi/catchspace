<script src="{{url('/')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/js/all.min.js"></script>

{{--<script src="{{url('/')}}/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>--}}
<script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@yield('js')

<script>
    var myCarousel = document.querySelector('#myCarousel')
    $(document).ready(function () {
        $(".wish-icon i").click(function () {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });

</script>


@stack('js')
