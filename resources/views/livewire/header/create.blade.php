<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.header_logo') ? 'invalid' : '' }}">
        <label class="form-label" for="logo">{{ trans('cruds.header.fields.logo') }}</label>
        <x-dropzone id="logo" name="logo" action="{{ route('admin.headers.storeMedia') }}" collection-name="header_logo" max-file-size="1" max-width="1000" max-height="1000" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.header_logo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.header.fields.logo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('header.menu') ? 'invalid' : '' }}">
        <label class="form-label" for="menu">{{ trans('cruds.header.fields.menu') }}</label>
        <textarea class="form-control" name="menu" id="menu" wire:model.defer="header.menu" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('header.menu') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.header.fields.menu_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('header.lang') ? 'invalid' : '' }}">
        <label class="form-label" for="lang">{{ trans('cruds.header.fields.lang') }}</label>
        <textarea class="form-control" name="lang" id="lang" wire:model.defer="header.lang" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('header.lang') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.header.fields.lang_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('header.button') ? 'invalid' : '' }}">
        <label class="form-label" for="button">{{ trans('cruds.header.fields.button') }}</label>
        <textarea class="form-control" name="button" id="button" wire:model.defer="header.button" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('header.button') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.header.fields.button_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.headers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>