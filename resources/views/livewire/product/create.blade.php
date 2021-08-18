<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('product.urutan') ? 'invalid' : '' }}">
        <label class="form-label required" for="urutan">{{ trans('cruds.product.fields.urutan') }}</label>
        <input class="form-control" type="text" name="urutan" id="urutan" required wire:model.defer="product.urutan">
        <div class="validation-message">
            {{ $errors->first('product.urutan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.urutan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.product_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.product.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.products.storeMedia') }}" collection-name="product_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.product.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="product.style_id" />
        <div class="validation-message">
            {{ $errors->first('product.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.product.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="product.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('product.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.product.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="product.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('product.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.product.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="product.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('product.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.product.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="product.color">
        <div class="validation-message">
            {{ $errors->first('product.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.product.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="product.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('product.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>