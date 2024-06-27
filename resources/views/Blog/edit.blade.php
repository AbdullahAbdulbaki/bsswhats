{{ Form::model($blog, ['route' => ['blog_backend.update', $blog->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('title', __('Title'), ['class' => 'form-label']) }}
            {{ Form::text('title', $blog->title, ['class' => 'form-control', 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('category_id', __('Category'), ['class' => 'form-label']) }}
            {{ Form::select('category_id', $categories, $blog->category_id, ['class' => 'form-control', 'placeholder' => __('Select a category'), 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('short_description', __('Short Description'), ['class' => 'form-label']) }}
            {{ Form::textarea('short_description', $blog->short_description, ['class' => 'form-control', 'required' => 'required', 'rows' => 3]) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('long_description', __('Long Description'), ['class' => 'form-label']) }}
            {{ Form::textarea('long_description', $blog->long_description, ['class' => 'form-control', 'required' => 'required', 'rows' => 5]) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('lang', __('Language'), ['class' => 'form-label']) }}
            {{ Form::select('lang', $languages, $blog->lang, ['class' => 'form-control', 'required' => 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('img', __('Image'), ['class' => 'form-label']) }}
            <br>
            {{ Form::file('img', ['class' => 'form-control-file']) }}
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="text-end">
        <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
        <input type="submit" value="{{ __('Update') }}" class="btn  btn-primary">
    </div>
</div>
{{ Form::close() }}
