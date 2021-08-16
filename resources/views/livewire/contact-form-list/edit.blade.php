<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contactFormList.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.contactFormList.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="contactFormList.name">
        <div class="validation-message">
            {{ $errors->first('contactFormList.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactFormList.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactFormList.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.contactFormList.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" wire:model.defer="contactFormList.email">
        <div class="validation-message">
            {{ $errors->first('contactFormList.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactFormList.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactFormList.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.contactFormList.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="contactFormList.phone">
        <div class="validation-message">
            {{ $errors->first('contactFormList.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactFormList.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactFormList.subject') ? 'invalid' : '' }}">
        <label class="form-label" for="subject">{{ trans('cruds.contactFormList.fields.subject') }}</label>
        <input class="form-control" type="text" name="subject" id="subject" wire:model.defer="contactFormList.subject">
        <div class="validation-message">
            {{ $errors->first('contactFormList.subject') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactFormList.fields.subject_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactFormList.message') ? 'invalid' : '' }}">
        <label class="form-label" for="message">{{ trans('cruds.contactFormList.fields.message') }}</label>
        <textarea class="form-control" name="message" id="message" wire:model.defer="contactFormList.message" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('contactFormList.message') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactFormList.fields.message_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contact-form-lists.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>