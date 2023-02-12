<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->

    <title> وطن للصرافه والحوالات المالية</title>
    <link rel="icon" href="{{asset('front/images/watan.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('front/images/watan.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEZGS9DKTR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-QEZGS9DKTR');
    </script>

</head>
<body>

<div class="container">
    <div class="stars">
        <img src="{{asset('front/images/bg-stars.svg')}}" alt="">
    </div>
    <h1> وطن للصرافه والحوالات المالية</h1>

    {{--    <div class="countdown">--}}
    {{--        <div>--}}
    {{--            <p id="days">{time}</p>--}}
    {{--            <h3>الآيام</h3>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <p id="hours">{time}</p>--}}
    {{--            <h3>الساعات</h3>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <p id="minutes">{time}</p>--}}
    {{--            <h3>الدقائق</h3>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <p id="seconds">{time}</p>--}}
    {{--            <h3>الثواني</h3>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="socials">--}}
    {{--        <ul>--}}
    {{--            <li>--}}
    {{--                <a href="https://www.facebook.com/the.man.of.the.nation/">--}}
    {{--                    <img src="./images/icon-facebook.svg" alt="">--}}
    {{--                </a>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <a href="https://www.instagram.com/mohamedvall_haden">--}}
    {{--                    <img src="./images/icon-instagram.svg" alt="">--}}
    {{--                </a>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <a href="https://twitter.com/HadenVall">--}}
    {{--                    <img src="./images/icon-twitter.svg" alt="">--}}
    {{--                </a>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </div>--}}

    <div class="pattern">
        <img src="{{asset('front/images/pattern-hills.svg')}}" alt="">
    </div>
</div>


<!-- <div class="attribution">
  Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
  Coded by <a href="#">Your Name Here</a>.
</div> -->


<script src="{{asset('front/app.js')}}"></script>
</body>
</html>
