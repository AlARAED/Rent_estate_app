<form class="modal-body " method="post" wire:submit.prevent="store">
    {{csrf_field()}}


    <div class="row g-2">


        <div class="col-6">
            <div class="form-group">
                <label class="control-label">تاريخ الحجز</label>
                <input wire:model.defer="reservation.date"
                       class="form-control @error('reservation.date') is-invalid @enderror" type="date">
                @error('reservation.date')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

    </div>

    <div>
        <div wire:loading>
            <i class="fas fa-sync fa-spin"></i>
            {{__("Loading please wait")}} ...
        </div>
    </div>
    <div class="text-center mt-3">
        <button wire:loading.attr="disabled" class="btn btn-primary w-25"
                type="submit">{{__("Store")}}</button>
    </div>
</form>

