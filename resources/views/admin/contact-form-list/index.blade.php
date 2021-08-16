@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.contactFormList.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('contact_form_list_create')
                    <a class="btn btn-indigo" href="{{ route('admin.contact-form-lists.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.contactFormList.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('contact-form-list.index')

    </div>
</div>
@endsection