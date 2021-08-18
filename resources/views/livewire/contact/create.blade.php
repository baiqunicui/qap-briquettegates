<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contact.urutan') ? 'invalid' : '' }}">
        <label class="form-label required" for="urutan">{{ trans('cruds.contact.fields.urutan') }}</label>
        <input class="form-control" type="text" name="urutan" id="urutan" required wire:model.defer="contact.urutan">
        <div class="validation-message">
            {{ $errors->first('contact.urutan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.urutan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.contact_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.contact.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.contacts.storeMedia') }}" collection-name="contact_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.contact_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.contact.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="contact.style_id" />
        <div class="validation-message">
            {{ $errors->first('contact.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.contact.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="contact.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('contact.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.contact.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="contact.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('contact.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.contact.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="contact.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('contact.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.contact.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="contact.color">
        <div class="validation-message">
            {{ $errors->first('contact.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.contact.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="contact.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('contact.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>