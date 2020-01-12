@csrf
<div class="form-group row">
    {!! Form::label('judul', __('Title'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('judul', old('judul'), ['class' => 'form-control col-md-7', 'required', 'autofocus', 'placeholder' => 'Insert your title...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('isi', __('Content'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('isi', old('isi'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

<div class="form-group row">
    {!! Form::label('kategori_artikel_id', __('Category'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('kategori_artikel_id', $kategori_artikel, old('kategori_artikel_id'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

{!! Form::hidden('users_id', Auth::id()) !!}

<div class="form-group row">
    <div class="btn-group">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('artikel.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script>

