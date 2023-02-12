<form class="mt-2" method="post" wire:submit.prevent="update">
    {{csrf_field()}}

    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">{{ __('Name') }}</label>
                        <input value="" wire:model.defer="country.name" placeholder="{{ __('Add Name') }}"
                               name="name"
                               class="form-control @error('country.name') is-invalid @enderror" type="text">
                        @error('country.name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">{{ __('iso2') }}</label>
                        <input value="" wire:model.defer="country.iso2"
                               name="iso2"
                               class="form-control @error('country.iso2') is-invalid @enderror" type="text">
                        @error('country.iso2')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">{{ __('iso3') }}</label>
                        <input value="" wire:model.defer="country.iso3"
                               name="iso3"
                               class="form-control @error('country.iso3') is-invalid @enderror" type="text">
                        @error('country.iso3')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">{{ __('phone_code') }}</label>
                        <input value="" wire:model.defer="country.phone_code"
                               name="phone_code"
                               class="form-control @error('country.phone_code') is-invalid @enderror" type="text">
                        @error('country.phone_code')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">{{ __('price') }}</label>
                        <input value="" wire:model.defer="country.price"
                               name="price"
                               class="form-control @error('country.price') is-invalid @enderror" type="text">
                        @error('country.price')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div>
        <div wire:loading>
            <i class="fas fa-sync fa-spin"></i>
            {{__("Loading please wait")}} ...
        </div>
    </div>
    <div>
        <button wire:loading.attr="disabled" class="btn btn-primary submit"
                type="submit">{{__("Update")}}</button>
    </div>
</form>

