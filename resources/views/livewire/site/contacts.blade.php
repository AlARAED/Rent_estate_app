<div>
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>التواصل</h2>
                <p>تواصل معنا </p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>العنوان</h3>
                                <p>{{($setting = \App\Models\Setting::where('name',"address")->first()) ? $setting->value : 'العنوان فارغ'}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>الاتصال</h3>
                                <p>{{($setting = \App\Models\Setting::where('name',"mobile")->first()) ? $setting->value : 'الهاتف فارغ'}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>ايميل</h3>
                                <p>{{($setting = \App\Models\Setting::where('name',"email")->first()) ? $setting->value : 'البريد الإلكتروني فارغ'}}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form wire:submit.prevent="store" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" wire:model.defer="contact.name" name="name"
                                       class="form-control @error('contact.name') is-invalid @enderror"
                                       placeholder="الأسم" required>
                                @error('contact.name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" wire:model.defer="contact.email"
                                       class="form-control @error('contact.email') is-invalid @enderror " name="email"
                                       placeholder="البريد الالكتروني" required>
                                @error('contact.email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control @error('contact.message') is-invalid @enderror"
                                          wire:model.defer="contact.message" name="message" rows="6"
                                          placeholder="الرسالة" required></textarea>
                                @error('contact.message')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" wire:loading.attr="disabled">ارسال</button>
                            </div>

                            <div>
                                <div wire:loading>
                                    <i class="fas fa-sync fa-spin"></i>
                                    {{__("Loading please wait")}} ...
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
</div>


