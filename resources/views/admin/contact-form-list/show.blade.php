@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.contactFormList.title_singular') }}:
                    {{ trans('cruds.contactFormList.fields.id') }}
                    {{ $contactFormList->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.id') }}
                            </th>
                            <td>
                                {{ $contactFormList->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.name') }}
                            </th>
                            <td>
                                {{ $contactFormList->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $contactFormList->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $contactFormList->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.phone') }}
                            </th>
                            <td>
                                {{ $contactFormList->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.subject') }}
                            </th>
                            <td>
                                {{ $contactFormList->subject }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contactFormList.fields.message') }}
                            </th>
                            <td>
                                {{ $contactFormList->message }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('contact_form_list_edit')
                    <a href="{{ route('admin.contact-form-lists.edit', $contactFormList) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.contact-form-lists.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection