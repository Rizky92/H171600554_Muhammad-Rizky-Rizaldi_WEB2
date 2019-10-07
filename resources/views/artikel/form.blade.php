@csrf
<div class="form-group row">
    {!! Form::label('judul', __('Title'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('judul', null, ['class' => 'form-control col-md-7', 'name' => 'judul', 'required', 'autofocus', 'value' => old('judul'), 'placeholder' => 'Insert your title...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('isi', __('Content'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control col-md-7', 'name' => 'isi', 'value' => old('isi')]) !!}
</div>

<div class="form-group row">
    {!! Form::label('kategori_artikel_id', __('Category'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('kategori_artikel_id', $kategori_artikel, $selected, ['class' => 'form-control col-md-7', 'name' => 'kategori_artikel_id', 'value' => old('kategori_artikel_id')]) !!}
</div>

{!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('artikel.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script>

