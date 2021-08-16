<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('style.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.style.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="style.title">
        <div class="validation-message">
            {{ $errors->first('style.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.style.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('style.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.style.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="style.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('style.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.style.fields.meta_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.style_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.style.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.styles.storeMedia') }}" collection-name="style_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.style_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.style.fields.image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.styles.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>