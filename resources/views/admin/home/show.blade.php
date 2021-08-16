@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.home.title_singular') }}:
                    {{ trans('cruds.home.fields.id') }}
                    {{ $home->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.id') }}
                            </th>
                            <td>
                                {{ $home->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.urutan') }}
                            </th>
                            <td>
                                {{ $home->urutan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.image') }}
                            </th>
                            <td>
                                @foreach($home->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.style') }}
                            </th>
                            <td>
                                @if($home->style)
                                    <span class="badge badge-relationship">{{ $home->style->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.heading') }}
                            </th>
                            <td>
                                {{ $home->heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.subheading') }}
                            </th>
                            <td>
                                {{ $home->subheading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.desc') }}
                            </th>
                            <td>
                                {{ $home->desc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.color') }}
                            </th>
                            <td>
                                {{ $home->color }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.home.fields.meta') }}
                            </th>
                            <td>
                                {{ $home->meta }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('home_edit')
                    <a href="{{ route('admin.homes.edit', $home) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection