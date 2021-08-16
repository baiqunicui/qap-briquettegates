@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.style.title_singular') }}:
                    {{ trans('cruds.style.fields.id') }}
                    {{ $style->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.style.fields.id') }}
                            </th>
                            <td>
                                {{ $style->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.style.fields.title') }}
                            </th>
                            <td>
                                {{ $style->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.style.fields.meta') }}
                            </th>
                            <td>
                                {{ $style->meta }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.style.fields.image') }}
                            </th>
                            <td>
                                @foreach($style->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('style_edit')
                    <a href="{{ route('admin.styles.edit', $style) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.styles.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection