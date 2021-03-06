<div class="row">
    <div class="col-md-8">
        {{ Form::select('attribute_set_id', trans('attribute::attributes.attributes.attribute_set_id'), $errors, $attributeSets, $attribute, ['required' => true]) }}
        {{ Form::text('name', trans('attribute::attributes.attributes.name'), $errors, $attribute, ['required' => true]) }}
        {{ Form::checkbox('is_filterable', trans('attribute::attributes.attributes.is_filterable'), trans('attribute::admin.form.use_this_attribute_for_filtering_products'), $errors, $attribute) }}
    </div>
</div>
