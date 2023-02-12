<div>
    <footer id="footer" class="footer">

        @livewire('site.subscribe-newsletter')

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{route('home')}}" class="logo d-flex align-items-center">
                            <img
                                src="{{ ($logo = \App\Models\Setting::where('name','logo')->first()) ? url("storage/".$logo->value) : url('front/assets/img/logo.png')}}"
                                alt="">
                            <span>{{($setting = \App\Models\Setting::where('name',"site_name")->first()) ? $setting->value : env('NODE_PATHAPP_NAME')}}</span>
                        </a>
                        <p> {{($setting = \App\Models\Setting::where('name',"description")->first()) ? $setting->value : ''}} </p>
                        <div class="social-links mt-3">
                            <a href="{{($setting = \App\Models\Setting::where('name',"url_twitter")->first()) ? $setting->value : '#'}}"
                               class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{($setting = \App\Models\Setting::where('name',"url_facebook")->first()) ? $setting->value : '#'}}"
                               class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{($setting = \App\Models\Setting::where('name',"url_instagram")->first()) ? $setting->value : '#'}}"
                               class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>روابط مفيدة</h4>
                        <ul>
                            @if($menus)
                                @foreach($menus->submenus as $key =>  $submenu)
                                    <li><i class="bi bi-chevron-right"></i> <a
                                            href="{{$submenu->url}}">{{$submenu->name}}</a></li>

                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>خدماتنا</h4>

                        <ul>
                            @if($services)
                                @foreach($services as $key =>  $service)
                                    <li><i class="bi bi-chevron-right"></i> <a
                                            href="#recent-blog-posts">{{ Str::limit($service->title,20) }}</a></li>
                                @endforeach
                            @endif
                        </ul>

                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>تواصل معنا</h4>
                        <p>
                            {{($setting = \App\Models\Setting::where('name',"address")->first()) ? $setting->value : ''}}
                            <br>

                            <strong>Phone:</strong> {{($setting = \App\Models\Setting::where('name',"mobile")->first()) ? $setting->value : ''}}
                            <br>
                            <strong>Email:</strong> {{($setting = \App\Models\Setting::where('name',"email")->first()) ? $setting->value : ''}}
                            <br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright &copy; <strong><span>oracle media</span></strong>. جميع الحقوق محفوظة
            </div>
            <div class="credits">
            </div>
        </div>
    </footer>
</div>
