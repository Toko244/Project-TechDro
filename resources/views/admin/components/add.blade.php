@extends('admin.layouts.app')
@push('name')
    {{ trans('admin.components') }}
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <form action="/{{ app()->getLocale() }}/admin/component/create" method="POST" enctype="multipart/form-data"
                    data-parsley-validate novalidate>
                    @csrf
                    <h4 class="header-title mt-0 mb-3">{{ trans('admin.add_component') }}</h4>
                    <div style="padding:20px">
                        <div class="form-group">
                            <label for="name">{{ trans('admin.name') }}</label>
                            @error('name')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                            @enderror
                            <input type="text" name="name" parsley-trigger="change"
                                class="@error('title') danger @enderror form-control inputparsley" onchange="myFunction()"
                                Required>
                        </div>
                        <div class="form-group">
                            <label for="componentselect">{{ trans('admin.type') }}</label>
                            @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.component_is_required') }}</small>
                            @enderror


                            <select class="form-control componentGroup @error('type') danger @enderror" name="type_id"
                                id="componentselect">
                                <option value="">{{ trans('admin.choose_component') }}</option>
                                @foreach (componentsType() as $key => $type)
                                    <option value="{{ $type['id'] }}" data-manual="{{ $type['manual'] }}"
                                        data-section="{{ $type['section'] }}">
                                        {{ trans('componentTypes.' . $key) }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group" id="componentDataSection">
                            <div class="col-lg-12 d-flex">
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type" value="manual"
                                        id="component_data_type_manual" disabled>
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_manual">
                                        {{ trans('admin.manual') }}
                                    </label>
                                </div>
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type"
                                        value="connected" id="component_data_type_connected" disabled>

                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_connected">
                                        {{ trans('admin.automatic') }}
                                    </label>
                                </div>

                            </div>
                        </div>

                        <script>
                            // Add an event listener to the select element
                            document.getElementById('componentselect').addEventListener('change', function() {
                                // Get the selected option
                                var selectedOption = this.options[this.selectedIndex];

                                // Get the manual attribute value
                                var isManual = selectedOption.getAttribute('data-manual') === '1';

                                // Show/hide and enable/disable the radio buttons based on the manual attribute
                                if (isManual) {
                                    document.getElementById('componentDataSection').style.display =
                                        'block';
                                    document.getElementById('component_data_type_manual').disabled =
                                        false;
                                    document.getElementById('component_data_type_connected').disabled =
                                        true;
                                } else {
                                    document.getElementById('componentDataSection').style.display =
                                        'block';
                                    document.getElementById('component_data_type_manual').disabled =
                                        true;
                                    document.getElementById('component_data_type_connected').disabled =
                                        false;
                                }
                            });
                        </script>
                        <script>
                            // Assuming you have a unique identifier for your select element, replace 'yourSelectClassName' with the actual class name.
                            var componentGroup = document.getElementsByClassName("componentGroup")[0];

                            componentGroup.addEventListener('change', function() {
                                var selectedOption = this.options[this.selectedIndex];
                                var isection = selectedOption.getAttribute('data-section') === '1';

                                var sectionGroup = document.getElementById('sectionGroup');
                                var sectionConection = document.getElementById('radioFormGroup');
                                if (isection) {
                                    sectionGroup.style.display = 'block';
                                    sectionConection.style.display = 'block';
                                } else {
                                    sectionGroup.style.display = 'none';
                                    sectionConection.style.display = 'none';
                                }
                            });
                        </script>
                        <div class="form-group" id="sectionGroup" style="display:none">
                            <label for="componentselect">{{ trans('admin.sections') }}</label>

                            <select class="form-control @error('type') danger @enderror" name="section_id"
                                id="sectionselect">
                                <option value="">{{ trans('admin.choose_section') }}</option>
                                @foreach ($sections as $key => $section)
                                    <option value="{{ $section->id }}" id="sectionoption">
                                        {{ $section->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="radioFormGroup" style="display: none;">
                            <div class="col-lg-12 d-flex">
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="section_data_type" value="manual"
                                        id="section_data_type_manual">
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="section_data_type_manual">
                                        {{ trans('admin.manual') }}
                                    </label>
                                </div>
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="section_data_type" value="automate"
                                        id="section_data_type_automate">
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="section_data_type_automate">
                                        {{ trans('admin.automatic') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Add event listeners to the radio buttons
                            var radioButtons = document.querySelectorAll('input[name="section_data_type"]');
                            radioButtons.forEach(function(radioButton) {
                                radioButton.addEventListener('change', function() {
                                    updateSubmitButtonState();
                                });
                            });

                            // Function to update the disabled state of the submit button
                            function updateSubmitButtonState() {
                                var saveButton = document.getElementById('saveButton');
                                var anyRadioButtonChecked = Array.from(radioButtons).some(function(radioButton) {
                                    return radioButton.checked;
                                });
                                saveButton.disabled = !anyRadioButtonChecked;
                            }
                        </script>

                    </div>


                    <ul class="nav nav-tabs">
                        @foreach (config('app.locales') as $locale)
                            <li class="nav-item">
                                <a href="#locale-{{ $locale }}" data-toggle="tab" aria-expanded="false"
                                    class="nav-link @if ($locale == app()->getLocale()) active @endif">
                                    <span class="d-none d-sm-block">{{ trans('admin.locale_' . $locale) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach (config('app.locales') as $locale)
                            <div role="tabpanel" class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}">
                                <div class="form-group">
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                    @error('name')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <input type="text" name="{{ $locale }}[title]" parsley-trigger="change"
                                        class="@error('title') danger @enderror form-control inputparsley"
                                        onchange="myFunction()" id="{{ $locale }}-title" Required>
                                </div>
                                <div class="form-group">
                                    <label for="{{ $locale }}-short_title">{{ trans('admin.short_title') }}</label>
                                    @error('name')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <input type="text" name="{{ $locale }}[short_title]" parsley-trigger="change"
                                        class="@error('title') danger @enderror form-control inputparsley"
                                        onchange="myFunction()" id="{{ $locale }}-short_title" Required>
                                </div>

                                <div class="form-group">
                                    <label for="{{ $locale }}-active">{{ trans('admin.active') }}</label>
                                    @error('active')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <br>
                                    <input type="hidden" name="{{ $locale }}[active]" value="0" />
                                    <input type="checkbox" name="{{ $locale }}[active]"
                                        id="{{ $locale }}-active" checked value="1" data-plugin="switchery"
                                        data-color="#3bafda" />
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @if (isset($errorMessage))
                        <div class="alert alert-danger">
                            {{ $errorMessage }}
                        </div>
                    @endif
                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1 save-component-fields" type="submit"
                            name="save">
                            {{ trans('admin.save') }}
                        </button>
                    </div>


                </form>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">




    <style>
        .danger {
            border: 1px solid rgb(239, 83, 80) !important;
        }
    </style>
@endpush

@push('scripts')
    <!-- Validation js (Parsleyjs) -->
    <script src="{{ asset('admin/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('admin/js/pages/form-validation.init.js') }}"></script>


    <!-- init js -->
    <script src="{{ asset('admin/js/pages/form-editor.init.js') }}"></script>


    <!-- Plugins Js -->
    <script src="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>



    <!-- Init js-->
    <script src="{{ asset('/admin/js/pages/form-advanced.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', 'button[name="save"]', function() {
                var danj = $(".danger");
                for (var i = 0; i < danj.length; i++) {
                    var cl3s = danj[i].classList;
                    cl3s.remove("danger");
                }
            });
            $.listen('parsley:field:error', function(parsleyField) {
                var ewes = $("input[name='" + parsleyField.$element.attr('name') + "']").closest(
                    '.tab-pane').attr('id');
                var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
                for (var i = 0; i < els.length; i++) {
                    var classes = els[i].classList;
                    classes.add("danger");
                }
            });
            $("input").on("input", function() {
                if ($(this).val().length > 0) {
                    var ewes = $(this).closest('.tab-pane').attr('id');
                    var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
                    for (var i = 0; i < els.length; i++) {
                        var classes = els[i].classList;
                        classes.remove("danger");
                    }
                }
            });
        });
    </script>
@endpush
