<form action="{{ route('admin.vedios.store') }}" method="post">

    @csrf

    @isset($vedio)
        <input type="hidden" name="pk_i_id" value="{{ $vedio->getKey() }}" />
    @endisset

    <x-localizable-inputs :inputs="$inputs" :item="$vedio">
    </x-localizable-inputs>

    <div class="row">
        

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-control-label">الفيديو:</label>
                <input name="s_vedio" type="file" multiple class="form-control-file" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-12 col-xl-12">
                <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                    <div class="kt-avatar__holder"
                        style="background-image: url({{ $vedio && $vedio->s_cover ? asset($vedio->s_cover) : '' }})">
                    </div>
                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                        data-original-title="Change avatar">
                        <i class="fa fa-pen"></i>
                        <input type="file" name="s_cover">
                    </label>
                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                        data-original-title="Cancel avatar">
                        <i class="fa fa-times"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>



    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">@lang('buttons.save')</button>
        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">@lang('buttons.close')</button>
    </div>

</form>
