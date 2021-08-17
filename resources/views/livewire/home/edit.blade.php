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
        <x-dropzone id="image" name="image" action="{{ route('admin.homes.storeMedia') }}" collection-name="home_image"
            max-file-size="2" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.home_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('home.style_id') ? 'invalid' : '' }}">
        <label class="form-label" for="style">{{ trans('cruds.home.fields.style') }}</label>
        <x-select-list class="form-control" id="style" name="style" :options="$this->listsForFields['style']"
            wire:model="home.style_id" />
        <div class="validation-message">
            {{ $errors->first('home.style_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.home.fields.style_helper') }}
        </div>
    </div>

    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
