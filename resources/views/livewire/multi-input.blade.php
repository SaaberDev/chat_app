<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dynamic-wrap">
                    <form role="form" autocomplete="off">
                        @for($i = 1; $i <= $input; $i++)
                        <label>FAQ #{{ $i }}</label>
                        <div class="entry input-group">
                            <input class="form-control" style="outline: 1px solid rgb(29 202 0 / 0.5); border: none;" name="question[]" type="text" placeholder="Type something" />
                            @if($i > 1)
                            <span class="input-group-btn">
                                <button wire:click.prevent="decrementInput()" class="btn btn-danger btn-remove" style="margin-left: 5px;" type="button">
                                <span class="fa fa-minus"></span>
                                </button>
                            </span>
                            @endif
                        </div>
                        <div class="mt-2">
                            <textarea name="answer[]" class="col-md-12" rows="5" style="resize:none; outline: 1px solid rgb(29 202 0 / 0.5); border: none;"></textarea>
                        </div>
                        @endfor
                        <button wire:click.prevent="incrementInput()" class="btn btn-success btn-add" style="float: right" type="button">
                            <span class="fa fa-plus"></span>
                            Add new field
                        </button>

                        <div class="row">
                            <div class="col-md-12">
                                <button wire:submit.prevent="" class="btn btn-primary btn-add" style="float: right" type="button">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>

                    <br>
                    <small>
                        Press [ <span class="fa fa-plus"></span> ] to add another form field ... :D
                    </small>
                </div>
            </div>
        </div>


    </div>
</div>

@push('scripts')

@endpush
