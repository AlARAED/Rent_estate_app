<div style="display: contents">

    <!-- Content area -->
    <div class="content">
        <div class="container-fluid">

            @include('layouts.admins.alert')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary ">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white mb-0">{{__('Settings')}}</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form class="mt-2" method="post" wire:submit.prevent="update">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("Site Name")}}</label>
                                            <input value="" wire:model.defer="site_name"
                                                   placeholder="{{__("Add Site Name")}}"
                                                   name="site_name"
                                                   class="form-control @error('site_name') is-invalid @enderror"
                                                   type="text">
                                            @error('site_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("Email")}}</label>
                                            <input value="" wire:model.defer="email" placeholder="{{__("Add Email")}}"
                                                   name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   type="text">
                                            @error('email')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("Mobile")}}</label>
                                            <input wire:model.defer="mobile" placeholder="{{__("Add Mobile")}}"

                                                   class="form-control @error('mobile') is-invalid @enderror"
                                                   type="text">
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("Phone")}}</label>
                                            <input value="" wire:model.defer="phone" placeholder="{{__("Add Phone")}}"
                                                   name="phone"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   type="number">
                                            @error('phone')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>


                                <div class="row">

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("Address")}}</label>
                                            <input wire:model.defer="address" placeholder="{{__("Add Address")}}"
                                                   name="address"
                                                   class="form-control @error('address') is-invalid @enderror"
                                                   type="text">
                                            @error('address')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group ">
                                            <label class="control-label mb-2">{{__("Site Description")}}</label>
                                            <textarea wire:model.defer="description"
                                                      placeholder="{{__("Add Site Description")}}"
                                                      id="summernote" name="description"
                                                      class="form-control summernote @error('description') is-invalid @enderror"
                                                      type="checkbox"></textarea>
                                            @error('description')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("URL Facebook")}}</label>
                                            <input wire:model.defer="url_facebook" placeholder="{{__("Add Facebook")}}"
                                                   name="url_facebook"
                                                   class="form-control @error('url_facebook') is-invalid @enderror"
                                                   type="text">
                                            @error('url_facebook')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("URL Twitter")}}</label>
                                            <input wire:model.defer="url_twitter" placeholder="{{__("Add Twitter")}}"
                                                   name="url_twitter"
                                                   class="form-control @error('url_twitter') is-invalid @enderror"
                                                   type="text">
                                            @error('url_twitter')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("URL Instagram")}}</label>
                                            <input wire:model.defer="url_instagram"
                                                   placeholder="{{__("Add Instagram")}}"
                                                   name="url_instagram"
                                                   class="form-control @error('url_instagram') is-invalid @enderror"
                                                   type="text">
                                            @error('url_instagram')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label mb-2">{{__("URL WhatsApp")}}</label>
                                            <input wire:model.defer="url_whatsapp" placeholder="{{__("Add WhatsApp")}}"
                                                   name="url_whatsapp"
                                                   class="form-control @error('url_whatsapp') is-invalid @enderror"
                                                   type="text">
                                            @error('url_whatsapp')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <div class="card d-table p-1 m-auto">
                                                @if($logoTemp)
                                                    <img width="150" class="img-fluid rounded"
                                                         src="{{ $logoTemp->temporaryUrl() }}"
                                                         data-holder-rendered="true">

                                                @else

                                                    <img width="200" class="img-thumbnail"
                                                         src="{{$logo ? url('storage/'.$logo) : url('dashboard/images/image1.png')}}"
                                                         data-holder-rendered="true">

                                                @endif
                                            </div>

                                            <div class="d-table p-1 m-auto uniform-uploader">
                                                <input type="file" wire:model.defer="logoTemp"
                                                       class="form-input-styled form-control @error('logoTemp ') is-invalid @enderror"
                                                       data-fouc=""
                                                >
                                                <span class="filename">{{__("File Image ")}}</span>
                                                @error('logoTemp')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div>
                                <div wire:loading>
                                    <i class="fas fa-sync fa-spin"></i>
                                    {{__("Loading please wait")}} ...
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" wire:loading.attr="disabled"
                                        class="btn btn-success btn-block">{{__("Update")}}</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>






