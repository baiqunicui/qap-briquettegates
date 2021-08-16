@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.contactFormList.title_singular') }}:
                    {{ trans('cruds.contactFormList.fields.id') }}
                    {{ $contactFormList->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('contact-form-list.edit', [$contactFormList])
        </div>
    </div>
</div>
@endsection