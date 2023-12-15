
@if($section)
    <input type="hidden" name="section_id" value="{{$section->id}}">
    @if (isset($section->fields['trans']) && count($section->fields['trans']) > 0)

        <ul class="nav nav-tabs">

            @foreach (config('app.locales') as $locale)
            <li class="nav-item ">
                <a href="#locale-{{ $locale }}"  data-toggle="tab" aria-expanded="false" class="nav-link @if($locale == app()->getLocale()) active @endif">
                    <span class="d-none d-sm-block">{{ trans('admin.locale_'.$locale) }}</span>
                </a>
            </li>
            @endforeach

        </ul>
        <div class="tab-content">
            @foreach (config('app.locales') as $locale)
            <div role="tabpanel" class="tab-pane fade @if($locale == app()->getLocale()) active show @endif " id="locale-{{ $locale }}">

                @foreach ($section->fields['trans'] as $key => $field)
                    @include('admin.form-controllers.trans.'.$field['type'])
                @endforeach
            </div>
            @endforeach
        </div>


    @endif
    @if (isset($section->fields['nonTrans']) && count($section->fields['nonTrans']) > 0)
        @foreach ($section->fields['nonTrans'] as $key => $field)
            @include('admin.form-controllers.nonTrans.'.$field['type'])
        @endforeach
    @endif

    @elseif($component)
    @if (isset(getComponentAttribute($component->type_id)['trans']) && count(getComponentAttribute($component->type_id)['trans']) > 0)
    <ul class="nav nav-tabs">
        @foreach (config('app.locales') as $locale)
        <li class="nav-item ">
            <a href="#locale-{{ $locale }}"  data-toggle="tab" aria-expanded="false" class="nav-link @if($locale == app()->getLocale()) active @endif">
                <span class="d-none d-sm-block">{{ trans('admin.locale_'.$locale) }}</span>
            </a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach (config('app.locales') as $locale)
        <div role="tabpanel" class="tab-pane fade @if($locale == app()->getLocale()) active show @endif " id="locale-{{ $locale }}">
            @foreach (getComponentAttribute($component->type_id)['trans'] as $key => $field)
                @include('admin.form-controllers.trans.'.$field['type'], ['field' => $field])
            @endforeach
        </div>
        @endforeach
    </div>
    @endif
    @if (isset(getComponentAttribute($component->type_id)['nonTrans']) && count(getComponentAttribute($component->type_id)['nonTrans']) > 0)
    @foreach (getComponentAttribute($component->type_id)['nonTrans'] as $key => $field)
        @include('admin.form-controllers.nonTrans.'.$field['type'])
    @endforeach
    @endif
    <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
        @foreach (componentsType() as $key => $type)
            @if (!$type['manual'])
                <input class="form-check-input" type="radio" name="data_type" value="connected">
            @else
                <input class="form-check-input" type="radio" name="data_type" disabled value="connected">
            @endif
        @endforeach
        <label class="form-check-label fw-medium fs-3 text-gray-900" for="component_data_type_connected">
            დაკავშირებული
        </label>
    </div>

    <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
        @foreach (componentsType() as $key => $type)
            @if ($type['manual'])
                <input class="form-check-input" type="radio" name="data_type" value="manual" checked>
            @else
                <input class="form-check-input" type="radio" name="data_type" disabled>
            @endif
        @endforeach
        <label class="form-check-label fw-medium fs-3 text-gray-900" for="component_data_type_manual">
            ხელით მიბმა
        </label>
    </div>
    <input type="hidden" name="type_id" value="{{$component->type_id}}">
    <input type="hidden" name="component_id" value="{{$component->id}}">

@endif

<div class="form-group text-right mb-0">
    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
        {{ trans('admin.save') }}
    </button>
</div>
