<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    @include('publicSite.layouts.css')
</head>
<body>
<!-- ======= Hero Section ======= -->
{{--<section id="hero">--}}

{{--    @include('publicSite.layouts.header-1')--}}
@if ($auth_worker = \Illuminate\Support\Facades\Session::get('worker'))
{{--    <div class="alert alert-success">--}}
        <p style="display: none">
{{ $id=$auth_worker->id }}
</p>
{{--    </div>--}}
@endif

@yield('content')

@include('publicSite.layouts.footer')


{{--</section>--}}

@include('publicSite.layouts.js')

</body>
</html>
