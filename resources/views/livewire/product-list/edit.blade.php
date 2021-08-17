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
        <x-dropzone id="image" name="image" action="{{ route('admin.product-lists.storeMedia') }}"
            collection-name="product_list_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_list_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productList.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.productList.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']"
            wire:model="productList.style_id" />
        <div class="validation-message">
            {{ $errors->first('productList.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.style_helper') }}
        </div>
    </div>

    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="form-group {{ $errors->has('mediaCollections.product_list_imageproduct') ? 'invalid' : '' }}">
        <label class="form-label" for="imageproduct">{{ trans('cruds.productList.fields.imageproduct') }}</label>
        <x-dropzone id="imageproduct" name="imageproduct" action="{{ route('admin.product-lists.storeMedia') }}"
            collection-name="product_list_imageproduct" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_list_imageproduct') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.productList.fields.imageproduct_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.product-lists.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
