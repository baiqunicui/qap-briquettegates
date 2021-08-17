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
        <x-dropzone id="image" name="image" action="{{ route('admin.abouts.storeMedia') }}"
            collection-name="about_image" max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.about_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('about.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.about.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']"
            wire:model="about.style_id" />
        <div class="validation-message">
            {{ $errors->first('about.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.about.fields.style_helper') }}
        </div>
    </div>

    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
