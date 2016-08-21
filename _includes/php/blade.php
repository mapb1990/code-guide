{% raw %}
<!-- Code difficult to read -->
<select class="dh-input-select form-control" id="carModel" name="carModel">
    <option value="" disabled default
            @if(!$model)
            selected
            @endif
            >{{ trans('quote.please select') }}</option>
    @foreach($models as $value)
        <option
            @if($model && $modelCode == $value['code'])
            selected
            @endif
            value="{{ $value['code'] }}">
            {{ $value['value'] }}</option>
    @endforeach
</select>

<!-- Much easier to read -->
<select class="dh-input-select form-control" id="carModel" name="carModel">
    <option value="" disabled {{ !$model ? 'selected' : '' }}>{{ trans('quote.please select') }}</option>
    @foreach ($models as $value)
        <option {{ ($model && $modelCode == $value['code'] ? 'selected' : '' }} value="{{ $value['code'] }}">{ $value['value'] }}</option>
    @endforeach
</select>
{% endraw %}