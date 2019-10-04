@csrf
<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

    <div class="col-md-6">
        <input id="nama" type="text" class="form-control" name="nama" required autofocus>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Done') }}
        </button>
        <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>
