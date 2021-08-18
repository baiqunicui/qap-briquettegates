<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('about.urutan') ? 'invalid' : '' }}">
        <label class="form-label required" for="urutan">{{ trans('cruds.about.fields.urutan') }}</label>
        <input class="form-control" type="text" name="urutan" id="urutan" required wire:model.defer="about.urutan">
        <div class="validation-message">
            {{ $errors->first('about.urutan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.urutan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.about_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.about.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.abouts.storeMedia') }}" collection-name="about_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.about_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.about.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="about.style_id" />
        <div class="validation-message">
            {{ $errors->first('about.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.about.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="about.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('about.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.about.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="about.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('about.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.about.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="about.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('about.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.about.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="about.color">
        <div class="validation-message">
            {{ $errors->first('about.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.about.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="about.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('about.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>