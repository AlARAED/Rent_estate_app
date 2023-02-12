<form class="mt-2" method="post" wire:submit.prevent="store">
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
                type="submit">{{__("Store")}}</button>
    </div>
</form>

