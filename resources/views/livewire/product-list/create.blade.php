<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('productList.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.productList.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="productList.slug">
        <div class="validation-message">
            {{ $errors->first('productList.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.product_list_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.productList.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.product-lists.storeMedia') }}" collection-name="product_list_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_list_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.productList.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']" wire:model="productList.style_id" />
        <div class="validation-message">
            {{ $errors->first('productList.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.style_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.heading') ? 'invalid' : '' }}">
        <label class="form-label" for="heading">{{ trans('cruds.productList.fields.heading') }}</label>
        <textarea class="form-control" name="heading" id="heading" wire:model.defer="productList.heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.subheading') ? 'invalid' : '' }}">
        <label class="form-label" for="subheading">{{ trans('cruds.productList.fields.subheading') }}</label>
        <textarea class="form-control" name="subheading" id="subheading" wire:model.defer="productList.subheading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.subheading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.subheading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.desc') ? 'invalid' : '' }}">
        <label class="form-label" for="desc">{{ trans('cruds.productList.fields.desc') }}</label>
        <textarea class="form-control" name="desc" id="desc" wire:model.defer="productList.desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.color') ? 'invalid' : '' }}">
        <label class="form-label" for="color">{{ trans('cruds.productList.fields.color') }}</label>
        <input class="form-control" type="text" name="color" id="color" wire:model.defer="productList.color">
        <div class="validation-message">
            {{ $errors->first('productList.color') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.color_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.meta') ? 'invalid' : '' }}">
        <label class="form-label" for="meta">{{ trans('cruds.productList.fields.meta') }}</label>
        <textarea class="form-control" name="meta" id="meta" wire:model.defer="productList.meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.meta_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.product_list_imageproduct') ? 'invalid' : '' }}">
        <label class="form-label" for="imageproduct">{{ trans('cruds.productList.fields.imageproduct') }}</label>
        <x-dropzone id="imageproduct" name="imageproduct" action="{{ route('admin.product-lists.storeMedia') }}" collection-name="product_list_imageproduct" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_list_imageproduct') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.imageproduct_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.s_2_heading') ? 'invalid' : '' }}">
        <label class="form-label" for="s_2_heading">{{ trans('cruds.productList.fields.s_2_heading') }}</label>
        <textarea class="form-control" name="s_2_heading" id="s_2_heading" wire:model.defer="productList.s_2_heading" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.s_2_heading') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.s_2_heading_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.s_2_desc') ? 'invalid' : '' }}">
        <label class="form-label" for="s_2_desc">{{ trans('cruds.productList.fields.s_2_desc') }}</label>
        <textarea class="form-control" name="s_2_desc" id="s_2_desc" wire:model.defer="productList.s_2_desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.s_2_desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.s_2_desc_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.s_2_meta') ? 'invalid' : '' }}">
        <label class="form-label" for="s_2_meta">{{ trans('cruds.productList.fields.s_2_meta') }}</label>
        <textarea class="form-control" name="s_2_meta" id="s_2_meta" wire:model.defer="productList.s_2_meta" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('productList.s_2_meta') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.s_2_meta_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.product-lists.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>