<div class="sidbar h-100 ">
    <!-- start  menu mobail btm -->
    <button class="navbar-toggler position-relative border-0 collapsed mt-3 d-md-none d-block" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
                            <span class="btn overlaymnu d-lg-none d-block">
                                    <span class="our-btn"></span>
                            </span>
    </button>
    <!-- end  menu mobail btm -->
    <nav class="navbar navbar-expand-lg navbar-light pb-0">
        <div class="navbar-collapse collapse" id="navbarSupportedContent">

            <div class="text-center">
                <a class="navbar-brand d-lg-none d-block logo-mo my-4 " href="{{ route('admin.home') }}"><img
                        class="img-fluid" width="100" src="{{asset('dashboard/images/loge.svg')}}" alt=""></a>
            </div>
            <ul class="navbar-nav flex-column position-relative z-index40 w-100">
                <li class="nav-item mx-0 mb-2 {{request()->is('admin') ? 'active' : ''}}">
                    <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                       href="{{ route('admin.home') }}"><i
                            class="fa-sharp fa-solid fa-house fs-5 pe-2"></i> {{__('Home')}} </a>
                </li>

                @if(auth()->user()->can('users show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/users') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.users') }}"><i
                                class="fa-solid w-35p fa-user-group fs-5 pe-2"></i>{{__('Users')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('roles show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/roles') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.roles') }}"><i
                                class="fa-solid w-35p fa-lock fs-5 pe-2"></i>{{__('Roles')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('services categories show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/service-categories') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.services-categories') }}"><i
                                class="fa-solid w-35p fa-bars fs-5 pe-2"></i>{{__('Services Categories')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('services show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/services') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.services') }}"><i
                                class="fa-solid w-35p fa-server fs-5 pe-2"></i>{{__('Services')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('products show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/products') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.products') }}"><i
                                class="fa-solid w-35p fa-clipboard fs-5 pe-2"></i>{{__('Products')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('ads show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/ads') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.ads') }}"><i
                                class="fa-solid w-35p fa-paper-plane fs-5 pe-2"></i>{{__('Ads')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('countries show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/countries') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.countries') }}"><i
                                class="fa-solid w-35p fa-globe fs-5 pe-2"></i>{{__('Countries')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('cities show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/cities') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.cities') }}"><i
                                class="fa-solid w-35p fa-globe fs-5 pe-2"></i>{{__('Cities')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('reservations show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/reservations') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.reservations') }}"><i
                                class="fa-solid w-35p fa-calendar-days fs-5 pe-2"></i>{{__('Reservations')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('contacts show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/contacts') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.contacts') }}"><i
                                class="fa-solid w-35p fa-envelope fs-5 pe-2"></i>{{__('Contacts')}} </a>
                    </li>
                @endif

                @if(auth()->user()->can('settings show') )
                    <li class="nav-item mx-0 mb-2 {{request()->is('admin/settings') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold text-white d-flex align-items-center"
                           href="{{ route('admin.settings') }}"><i
                                class="fa-solid w-35p fa-gear fs-5 pe-2"></i>{{__('Settings')}} </a>
                    </li>
                @endif


            </ul>
        </div>
    </nav>
</div>
