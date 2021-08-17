<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.header_logo') ? 'invalid' : '' }}">
        <label class="form-label" for="logo">{{ trans('cruds.header.fields.logo') }}</label>
        <x-dropzone id="logo" name="logo" action="{{ route('admin.headers.storeMedia') }}" collection-name="header_logo"
            max-file-size="1" max-width="1000" max-height="1000" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.header_logo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.header.fields.logo_helper') }}
        </div>
    </div>

    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.headers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
