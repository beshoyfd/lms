<div role="tabpanel" class="tab-pane fade active show "
     id="lmsKey">
    @if (permissionCheck('save.api.setting'))
        <form class="form-horizontal" action="{{route('api-key.setting')}}"
              method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-10 ">

                                    <div class="primary_input mb-15">
                                        <label class="primary_input_label"
                                               for="">{{__('setting.App Key')}}</label>
                                        <input class="primary_input_field "
                                               type="text" name="api_key" id="inputKey"
                                               autocomplete="off"
                                               value="{{Settings('api_key')}}">
                                    </div>

                                </div>
                                <div class="col-lg-2 mb-30">
                                    <button type="button" id="generateNewKey"
                                            class="primary-btn small fix-gr-bg mt-40">
                                        <span class="ti-plus pe-2"></span>
                                        {{__('setting.Generate')}}
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <button type="button" id="confirmBtn"
                                    class="primary-btn fix-gr-bg">
                                <i class="ti-check"></i>
                                {{__('common.Update')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
<div class="modal fade admin-query" id="AppKeyModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@lang('common.Confirmation')</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="ti-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <strong>{{__('common.Update')}} {{__('setting.API Key')}}</strong>
                    <h4>@lang('setting.are_you_sure_to_change_api_key')</h4>
                </div>

                <div class="mt-40 justify-content-between">
                    <form id="activate_form" action="{{route('api-key.setting')}}" method="POST">
                        @csrf
                        <input type="hidden" id="appKeyUpdateInput" name="api_key" value="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for="title">{{__('common.Enter Password')}} <span
                                            class="text-danger">*</span></label>
                                    <input required type="password" id="password"
                                           class="primary_input_field" name="password" autocomplete="off"
                                           value="" placeholder="{{__('common.Enter Password')}} ">

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="primary_input">
                                <button type="submit" class="primary-btn fix-gr-bg"
                                        id="save_button_parent">{{ __('common.Confirm') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
