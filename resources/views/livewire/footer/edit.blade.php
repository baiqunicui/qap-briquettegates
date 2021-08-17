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
        <x-dropzone id="image" name="image" action="{{ route('admin.footers.storeMedia') }}"
            collection-name="footer_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.footer_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('footer.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.footer.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']"
            wire:model="footer.style_id" />
        <div class="validation-message">
            {{ $errors->first('footer.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.footer.fields.style_helper') }}
        </div>
    </div>

    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
