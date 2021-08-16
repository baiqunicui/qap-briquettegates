<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('footer.urutan') ? 'invalid' : '' }}">
        <label class="form-label required" for="urutan">{{ trans('cruds.footer.fields.urutan') }}</label>
        <input class="form-control" type="text" name="urutan" id="urutan" required wire:model.defer="footer.urutan">
        <div class="validation-message">
            {{ $errors->first('footer.urutan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.urutan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.footer_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.footer.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.footers.storeMedia') }}" collection-name="footer_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.footer_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.footer.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="footer.style_id" />
        <div class="validation-message">
            {{ $errors->first('footer.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.footer.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="footer.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('footer.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.footer.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="footer.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('footer.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.footer.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="footer.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('footer.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.footer.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="footer.color">
        <div class="validation-message">
            {{ $errors->first('footer.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.footer.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="footer.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('footer.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>