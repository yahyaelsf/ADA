@extends('admin.layouts.dashboard')
@section('content')
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand fa fa-list"></i>
                </span>
                <h3 class="kt-portlet__head-title">{{ $pageTitle }}</h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="alert-section"></div>
            <form id="create-album" action="{{ route('admin.albums.store') }}" method="post"
                  enctype="multipart/form-data">

                @csrf

                @isset($album)
                    <input type="hidden" name="pk_i_id" value="{{ $album->getKey() }}"/>
                @endisset

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 col-xl-12">
                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                <div class="kt-avatar__holder"
                                     style="background-image: url({{ $album && $album->s_cover ?  asset($album->s_cover) : '' }})"></div>
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

                <x-localizable-inputs :inputs="$inputs" :item="$album">
                </x-localizable-inputs>


                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">@lang('general.images'):</label>
                            <input name="files[]" type="file" multiple class="form-control-file"/>
                        </div>
                    </div>
                    <style>
                        .close-ic {
                            position: absolute;
                            top: 10px;
                            left: 10px;
                            z-index: 10;
                        }

                        .close-ic i {
                            color: white;
                            background-color: red;
                            height: 28px;
                            width: 28px;
                            border-radius: 50%;
                            text-align: center;
                            line-height: 28px;
                            font-size: 16px;
                            cursor: pointer;
                        }
                    </style>

                    <div class="col-md-12">
                        <div class="row">
                            @if(isset($album) && $album->resources)
                                @foreach ($album->resources as $resource)
                                    <div id="resource-{{ $resource->getKey() }}" class="col-md-3">
                                        <figure class="position-relative">
                                            <a onclick="deleteResource({{ $resource->getKey() }})" class="close-ic">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            @if($resource->e_type == 'IMAGE')
                                                <img class="img-thumbnail" src="{{ asset($resource->s_filename) }}"/>
                                            @else
                                                <video width="320" height="240" controls>
                                                    <source src="{{ asset($resource->s_filename) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </figure>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <hr>


                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="progress" style="display: none; height: 20px !important;">
                            <div class="progress-bar progress-bar-striped progress-bar-success active"
                                 role="progressbar"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">@lang('buttons.save')</button>
                    <a href="{{ route('admin.albums.index') }}" class="btn btn-secondary ml-2">@lang('buttons.close')</a>
                </div>

            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>

        $('#create-album').submit(function (e) {
            e.preventDefault();
        }).validate({
            submitHandler: function (form) {
                const data = new FormData(form);
                const action = $('form').attr('action');

                $.ajax({
                    url: action,
                    type: "POST",
                    data: data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var myXhr = $.ajaxSettings.xhr();
                        if(myXhr.upload){
                            $('.progress').show();
                            myXhr.upload.addEventListener('progress',  progress, false);
                        }
                        return myXhr;
                    },
                    success: function (data) {
                        console.log(data);

                        if (data.success) {
                            var form = $('#create-album');

                            if (data.action === 'create') {
                                form.find("input[type=text],input[type=file],textarea").val("");
                                form.validate().resetForm();
                                form.find('form-group').removeClass('has-error');
                            }

                            toastr.success(data.message, {timeOut: 2000});
                            $('#validation-errors').empty();

                            setTimeout(function() {
                                location.reload();
                            },  2000);


                        } else {
                            validationErrors(data.errors, '');
                            $('.progress').hide();
                        }
                    }
                });
            }
        });



        function progress(e){

            if(e.lengthComputable){
                var max = e.total;
                var current = e.loaded;

                var percentage = (current * 100)/max;
                console.log(percentage);
                var percentVal = percentage + '%';
                $('.progress-bar').width(percentVal);

                if(percentage >= 100) {}
            }
        }

        function deleteResource(id) {

            if (confirm("@lang('alerts.you_sure')")) {
                $.ajax({
                    url: '/admin/resources/' + id,
                    type: 'DELETE',
                    success: function (result) {
                        if (result.success) {
                            $('#resource-' + id).remove();
                        }
                    }
                });
            }

        }
    </script>
@endpush
