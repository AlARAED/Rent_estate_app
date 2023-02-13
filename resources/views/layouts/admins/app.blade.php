<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome CSS -->
    <!-- Favicons -->
    <link href="{{asset('dashboard/images/loge2.svg')}}" rel="icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/images/loge2.svg')}}">
    <!-- Vendor CSS Files -->

    <title> {{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
          crossorigin="anonymous" referrerpolicy="no-referrer">


    <!--  Bootstrap 5.2 css or font awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">


    <!-- custom style css  -->
    <link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- include fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    @livewireStyles

    @yield('css_code')
</head>

<body class="bg-light">
<div id="loader"></div>

@if(auth()->check())
    @include('layouts.admins.header')
    <div class="h-73p"></div>
@endif

@if(auth()->check())
    <div class="row g-0">
        <div class="col-md-2">
            @livewire('admin.layouts.sidebar')
        </div>
        <div class="col-md-10 h-100 mt-4 px-2">
            <main>

                @yield('content')

                {{ isset($slot) ? $slot : null }}

            </main>

        </div>
    </div>

@else
    @yield('content')

    {{ isset($slot) ? $slot : null }}

@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--  Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{asset('dashboard/js/main.js')}}"></script>


<!-- include fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

@livewireScripts

@yield('js_code')

<script>

    window.livewire.on('success', (message) => {
        $(".modal").modal("hide");

        Swal.fire({
            title: message,
            icon: 'success',
            confirmButtonText: 'Ok',
            timer: 1500
        })
    });

    window.livewire.on('alertSuccess', (message) => {

        $(".modal").modal('hide');

        Swal.fire({
            title: message,
            icon: 'success',
            confirmButtonText: 'Ok'
        })

    })

    window.livewire.on('alertError', (message) => {
        Swal.fire({
            title: 'هناك خطأ ما',
            text: message,
            icon: 'error',
            confirmButtonText: 'OK'
        })

        // setTimeout(function(){
        //     window.location.href = "";
        // }, 1500);
    })

    $('.modal').on('hide.bs.modal', function () {
        Livewire.emit('refreshModal')
    })

</script>
</body>

</html>
