@extends('admin.layouts.dashboard')
@section('content')

    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                @lang('navigation.settings')
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        @foreach ($settingsConfig as $key => $setting)
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="{{ $key }}"
                                        class="control-label">{{ trans($setting['localization_key']) }}</label>

                                    @if ($setting['type'] == \SettingsEnums::STRING)
                                        <input type="text" name="{{ $key }}"
                                            value="{{ old($key, $settings[$key] ?? $setting['default_value']) }}"
                                            class="form-control">
                                    @elseif($setting['type'] == \SettingsEnums::BOOLEAN)
                                        <select name="{{ $key }}" class="form-control">
                                            <option value="">{{ __('general.please_choose') }}</option>
                                            <option value="1"
                                                {{ old($key, $settings[$key] ?? $setting['default_value']) == '1' ? 'selected' : '' }}>
                                                {{ __('general.active') }}</option>
                                            <option value="0"
                                                {{ old($key, $settings[$key] ?? $setting['default_value']) == '0' ? 'selected' : '' }}>
                                                {{ __('general.inactive') }}</option>
                                        </select>
                                    @elseif($setting['type'] == \SettingsEnums::TEXT)
                                        <textarea name="{{ $key }}" class="form-control" rows="5">{{ old($key, $settings[$key] ?? $setting['default_value']) }}</textarea>
                                    @elseif($setting['type'] == \SettingsEnums::FILE)
                                        <input type="file" name="{{ $key }}" class="form-control">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">@lang('buttons.save')</button>
                <a href="{{ route('admin.home') }}" class="btn btn-secondary">@lang('buttons.close')</a>
            </div>
        </form>

    </div>

@endsection

@push('scripts-footer')
    <script src="{{ asset('assets/validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        $.validator.setDefaults({
            errorClass: 'help-block',
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            }
        });

        $('#form').validate();
    </script>
@endpush
