@csrf
<div class="form-group row">
    {!! Form::label('judul', __('Name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control col-md-7', 'name' => 'nama', 'required', 'autofocus', 'value' => old('nama'), 'placeholder' => 'Insert gallery name...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('keterangan', __('Description'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control col-md-7', 'name' => 'keterangan', 'value' => old('keterangan')]) !!}
</div>

<div class="form-group row">
    {!! Form::label('kategori_galeri_id', __('Category'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('kategori_galeri_id', $kategori_galeri, $selected, ['class' => 'form-control col-md-7', 'name' => 'kategori_galeri_id', 'value' => old('kategori_galeri_id')]) !!}
</div>

{!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script>

