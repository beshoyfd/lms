@extends('service::layouts.app_install', ['title' => __('service::install.database')])

@section('content')
    <div class="single-report-admit">
        <div class="card-header">
            <h2 class="text-center text-uppercase color-whitesmoke ">{{ __('service::install.database_title') }}
            </h2>

        </div>
    </div>

    <div class="card-body">
        <div class="requirements">
            <div class="row">
                <div class="col-md-12">
                    <h4>{{ __('service::install.database_setup') }} </h4>
                    <hr class="mt-0">
                </div>
                <div class="col-md-12">
                    <form method="post" action="{{ route('service.database') }}" id="content_form">
                        @if(config('spondonit.support_multi_connection', false))
                            <div class="form-group">
                                <label class="required" for="db_connection">{{ __('service::install.db_connection') }}
                                    <i class="ti-help" data-bs-toogle="tooltip"
                                       title="{{ __('service::install.db_connection_help') }}"></i> </label>
                                <select class="form-control select2" name="db_connection" id="db_connection" required
                                        data-bs-placeholder="{{ __('service::install.db_connection') }}"
                                        data-bs-parsley-errors-container="#parsley_db_connection_error">
                                    <option
                                        value="mysql" {{ env('DB_CONNECTION', 'mysql') == 'mysql' ? 'selected' : '' }}>{{ __('service::install.mysql') }}</option>
                                    <option
                                        value="pgsql" {{ env('DB_CONNECTION', 'mysql') == 'pgsql' ? 'selected' : '' }}>{{ __('service::install.pgsql') }}</option>
                                </select>
                                <span id="parsley_db_connection_error"></span>
                            </div>
                        @endif

                        <div class="form-group">
                            <label class="required" for="db_host">{{ __('service::install.db_host') }}</label>
                            <input type="text" class="form-control " name="db_host" id="db_host" required="required"
                                   placeholder="{{ __('service::install.db_host') }}"
                                   value="{{ env('DB_HOST', 'localhost') }}">
                        </div>
                        <div class="form-group">
                            <label class="required" for="db_port">{{ __('service::install.db_port') }}</label>
                            <input type="text" class="form-control" name="db_port" id="db_port" required="required"
                                   placeholder="{{ __('service::install.db_port') }}"
                                   value="{{ env('DB_PORT', '3306') }}">
                        </div>
                        <div class="form-group">
                            <label class="required" for="db_database">{{ __('service::install.db_database') }}</label>
                            <input type="text" class="form-control" name="db_database" id="db_database"
                                   required="required" placeholder="{{ __('service::install.db_database') }}"
                                   autofocus="" value="{{ env('DB_DATABASE') }}">
                        </div>
                        <div class="form-group">
                            <label class="required" for="db_username">{{ __('service::install.db_username') }}</label>
                            <input type="text" class="form-control" name="db_username" id="db_username"
                                   required="required" placeholder="{{ __('service::install.db_username') }}"
                                   value="{{ env('DB_USERNAME') }}">
                        </div>
                        <div class="form-group">
                            <label for="db_password">{{ __('service::install.db_password') }}</label>
                            <input type="password" class="form-control" name="db_password" id="db_password"
                                   placeholder="{{ __('service::install.db_password') }}"
                                   value="{{ env('DB_PASSWORD') }}">
                        </div>
                        <div class="form-group">
                            <label data-id="bg_option" class="primary_checkbox d-flex mr-12 ">
                                <input name="force_migrate" type="checkbox">
                                <span class="checkmark"></span>
                                <span class="ml-2">Force Delete Previous Table</span>
                            </label>
                        </div>

                        <button type="submit"
                                class="offset-3 col-sm-6 primary-btn fix-gr-bg mt-40 submit bc-color">{{ __('service::install.lets_go_next') }}</button>
                        <button type="button" class="offset-3 col-sm-6 primary-btn fix-gr-bg mt-40 submitting bc-color"
                                disabled style="display:none">{{ __('service::install.submitting') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        _formValidation('content_form');
        @if(config('spondonit.support_multi_connection', false))
        $('#db_connection').select2();
        $(document).on('change', '#db_connection', function () {
            $('#db_port').val($(this).val() === 'pgsql' ? 5432 : 3306)
        })
        $('[data-bs-toogle="tooltip"]').tooltip()
        @endif
        $(document).ready(function () {

            setTimeout(function () {
                $('.preloader h2').html('We are validating your database. <br> Please do not refresh or close the browser')
            }, 2000);
        })
    </script>
@endpush
