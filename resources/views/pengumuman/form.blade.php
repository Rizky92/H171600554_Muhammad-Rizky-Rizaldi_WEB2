@csrf
<div class="form-group row">
    {!! Form::label('judul', __('Title'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('judul', old('judul'), ['class' => 'form-control col-md-7', 'required', 'autofocus', 'placeholder' => 'Insert your announcement title...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('isi', __('Content'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('isi', old('isi'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

<div class="form-group row">
    {!! Form::label('kategori_pengumuman_id', __('Category'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('kategori_pengumuman_id', $kategori_pengumuman, old('kategori_pengumuman_id'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

{!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('pengumuman.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script>

