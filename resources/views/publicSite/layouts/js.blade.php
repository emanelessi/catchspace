<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/all.min.js"></script>
@yield('js')

<script>
    $(document).ready(function () {
        $(".wish-icon i").click(function () {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>

@stack('js')
