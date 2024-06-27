{{ Form::open(['route' => 'blog_backend.store', 'enctype' => 'multipart/form-data']) }}
<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('title', __('Title'), ['class' => 'form-label']) }}
            {{ Form::text('title', '', ['class' => 'form-control', 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('category_id', __('Category'), ['class' => 'form-label']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => __('Select a category'), 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('short_description', __('Short Description'), ['class' => 'form-label']) }}
            {{ Form::textarea('short_description', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 3]) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('long_description', __('Long Description'), ['class' => 'form-label']) }}
            {{ Form::textarea('long_description', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 5]) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('lang', __('Language'), ['class' => 'form-label']) }}
            {{ Form::select('lang', $languages, null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('img', __('Image'), ['class' => 'form-label']) }}
            <br>
            {{ Form::file('img', ['class' => 'form-control-file', 'required' => 'required']) }}
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="text-end">
        <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
        <input type="submit" value="{{ __('Create') }}" class="btn  btn-primary">
    </div>
</div>
{{ Form::close() }}
