@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.contact.title_singular') }}:
                    {{ trans('cruds.contact.fields.id') }}
                    {{ $contact->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.id') }}
                            </th>
                            <td>
                                {{ $contact->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.urutan') }}
                            </th>
                            <td>
                                {{ $contact->urutan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.image') }}
                            </th>
                            <td>
                                @foreach($contact->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.style') }}
                            </th>
                            <td>
                                @if($contact->style)
                                    <span class="badge badge-relationship">{{ $contact->style->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.heading') }}
                            </th>
                            <td>
                                {{ $contact->heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.subheading') }}
                            </th>
                            <td>
                                {{ $contact->subheading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.desc') }}
                            </th>
                            <td>
                                {{ $contact->desc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.contact.fields.color') }}
                            </th>
                            <td>
                                {{ $contact->color }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('contact_edit')
                    <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection