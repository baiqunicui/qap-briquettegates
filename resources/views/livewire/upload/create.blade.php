<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('upload.type') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.upload.fields.type') }}</label>
        <select class="form-control" wire:model="upload.type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('upload.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.upload.fields.type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('upload.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.upload.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="upload.title">
        <div class="validation-message">
            {{ $errors->first('upload.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.upload.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.upload_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.upload.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.uploads.storeMedia') }}" collection-name="upload_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.upload_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.upload.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.upload_file') ? 'invalid' : '' }}">
        <label class="form-label" for="file">{{ trans('cruds.upload.fields.file') }}</label>
        <x-dropzone id="file" name="file" action="{{ route('admin.uploads.storeMedia') }}" collection-name="upload_file" max-file-size="4" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.upload_file') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.upload.fields.file_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.uploads.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>