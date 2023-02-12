<div>
    <!-- End header -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <img
                    src="{{ ($logo = \App\Models\Setting::where('name','logo')->first()) ? url("storage/".$logo->value) : url('front/assets/img/logo.png')}}"
                    alt="">
                <span
                    class="fs-5 ps-1">{{($setting = \App\Models\Setting::where('name',"site_name")->first()) ? $setting->value : env('NODE_PATHAPP_NAME')}}</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    @if($menus)
                        @foreach($menus->submenus as $key =>  $submenu)
                            <li><a class="nav-link scrollto {{ $key == 0 ? 'active' : '' }}"
                                   href="{{$submenu->url}}">{{$submenu->name}}</a></li>
                        @endforeach
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
</div>
