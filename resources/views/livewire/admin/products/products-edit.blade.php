<form class="mt-2" method="post" wire:submit.prevent="update">
    {{csrf_field()}}

    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <div class="card d-table p-1 m-auto">
                    @if($imageTemp)
                        <img width="150" class="img-fluid rounded"
                             src="{{ $imageTemp->temporaryUrl() }}"
                             data-holder-rendered="true">

                    @else
                        @if(!empty($product['image']))
                            <img width="200" class="img-fluid rounded"
                                 src="{{ $product['image']}}"
                                 data-holder-rendered="true">
                        @endif

                    @endif
                </div>

                <div class="d-table p-1 m-auto uniform-uploader">
                    <input type="file" wire:model.defer="imageTemp"
                           class="form-input-styled form-control submit2 @error('imageTemp') is-invalid @enderror"
                           data-fouc=""
                    >
                    <span class="filename">{{__("File Image ")}}</span>
                    @error('imageTemp')
                    <span class="invalid-feedback"
                          role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">{{ __('Name') }}</label>
                        <input value="" wire:model.defer="product.name" placeholder="{{ __('Add Name') }}"
                               name="name"
                               class="form-control @error('product.name') is-invalid @enderror" type="text">
                        @error('product.name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">{{__("Services")}}</label>
                        <select wire:model.defer="product.service_id"
                                class="form-control @error('product.service_id') is-invalid @enderror">
                            <option value="0">{{__("Select")}} ...</option>
                            @foreach( $services as $key => $service )
                                <option value="{{$service->id }}">{{$service->title}}</option>
                            @endforeach
                        </select>
                        @error('product.service_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">{{ __('Address') }}</label>
                        <input value="" wire:model.defer="product.address" placeholder="{{ __('Add Address') }}"
                               name="address"
                               class="form-control @error('product.address') is-invalid @enderror" type="text">
                        @error('product.address')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">{{ __('time expiry') }}</label>
                        <input value="" wire:model.defer="product.time_expiry"
                               name="time_expiry"
                               class="form-control @error('product.time_expiry') is-invalid @enderror"
                               type="datetime-local">
                        @error('product.time_expiry')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">{{ __('file') }}</label>
                        <input value="" wire:model.defer="product.file" accept="application/pdf"
                               name="file"
                               class="form-control @error('product.file') is-invalid @enderror" type="file">
                        @error('product.file')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">{{ __('url video') }}</label>
                        <input value="" wire:model.defer="product.url_video" placeholder="{{ __('Add url video') }}"
                               name="url_video"
                               class="form-control @error('product.url_video') is-invalid @enderror" type="text">
                        @error('product.url_video')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>


                @if ($product_descriptions)

                    <div class="col-md-12">

                        @foreach ($product_descriptions as $key => $product_description)
                            <div class="row mb-2">
                                <div class="col-md-5">
                                    <div class="form-group mb-0">
                                        <label class="control-label"> {{ __('Name') }} {{$key}}</label>
                                        <input value="" wire:model.defer="product_descriptions.{{$key}}.name"
                                               placeholder="{{ __('Add Name') }}"
                                               name="name"
                                               class="form-control  @error('product_descriptions.'.$key.'.name') is-invalid @enderror"
                                               type="text">
                                        @error('product_descriptions.'.$key.'.name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group mb-0">
                                        <label class="control-label"> {{ __('Number') }} {{$key}}</label>
                                        <select wire:model.defer="product_descriptions.{{$key}}.number"
                                                class="form-control @error('product_descriptions.'.$key.'.number') is-invalid @enderror">
                                            <option value="null">{{__("Select")}} ...</option>
                                            @for ($i = 100; $i <= 5000; $i+=100)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        @error('product_descriptions.'.$key.'.number')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-2 form-group mb-2 ">
                                    @if(count($product_descriptions) > 1 and $key > 0)
                                        <label for="episode-add" class="control-label d-block">حذف </label>
                                        <button class="btn btn-sm btn-danger mx-auto"
                                                wire:click.prevent="RemoveProductDescription({{$key}})"><i
                                                class="fas fa-minus"></i></button>
                                    @else
                                        <label for="episode-add" class="control-label d-block">إضافة </label>
                                        <button class="btn btn-sm btn-success mx-auto"
                                                wire:click.prevent="AddProductDescription()"><i
                                                class="fas fa-plus"></i></button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        @else

                            <div class="clearfix">
                                <label for="episode-add" class="control-label d-block">إضافة </label>
                                <button class="btn btn-sm btn-success mx-auto"
                                        wire:click.prevent="AddProductDescription()"><i
                                        class="fas fa-plus"></i></button>
                            </div>

                    </div>
                @endif



                {{--                <div class="col-md-12">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label class="control-label">{{ __('Description') }}</label>--}}
                {{--                        <textarea rows="5" value="" wire:model.defer="product.description"--}}
                {{--                                  placeholder="{{ __('Add Description') }}"--}}
                {{--                                  id="description" name="description"--}}
                {{--                                  class="form-control  @error('product.description') is-invalid @enderror"--}}
                {{--                                  type="text"></textarea>--}}
                {{--                        @error('product.description')--}}
                {{--                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
                {{--                        @enderror--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>

        </div>
    </div>

    <div>
        <div wire:loading>
            <i class="fas fa-sync fa-spin"></i>
            {{__("Loading please wait")}} ...
        </div>
    </div>
    <div class="modal-footer justify-content-center mt-2">
        <button wire:loading.attr="disabled" class="btn btn-info mx-4"
                type="submit">{{__("Update")}}</button>
        <button type="button" class="btn btn-danger close-btn" data-bs-dismiss="modal">{{__("Close")}}</button>
    </div>
</form>

