@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.upload.title_singular') }}:
                    {{ trans('cruds.upload.fields.id') }}
                    {{ $upload->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.upload.fields.id') }}
                            </th>
                            <td>
                                {{ $upload->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.upload.fields.type') }}
                            </th>
                            <td>
                                {{ $upload->type_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.upload.fields.title') }}
                            </th>
                            <td>
                                {{ $upload->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.upload.fields.image') }}
                            </th>
                            <td>
                                @foreach($upload->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.upload.fields.file') }}
                            </th>
                            <td>
                                @foreach($upload->file as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('upload_edit')
                    <a href="{{ route('admin.uploads.edit', $upload) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.uploads.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection