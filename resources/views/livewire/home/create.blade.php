<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('home.urutan') ? 'invalid' : '' }}">
        <label class="form-label required" for="urutan">{{ trans('cruds.home.fields.urutan') }}</label>
        <input class="form-control" type="text" name="urutan" id="urutan" required wire:model.defer="home.urutan">
        <div class="validation-message">
            {{ $errors->first('home.urutan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.urutan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.home_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.home.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.homes.storeMedia') }}" collection-name="home_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.home_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.home.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="home.style_id" />
        <div class="validation-message">
            {{ $errors->first('home.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.home.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="home.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('home.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.home.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="home.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('home.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.home.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="home.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('home.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.home.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="home.color">
        <div class="validation-message">
            {{ $errors->first('home.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.home.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="home.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('home.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>