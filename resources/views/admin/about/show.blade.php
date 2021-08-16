@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.about.title_singular') }}:
                    {{ trans('cruds.about.fields.id') }}
                    {{ $about->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.id') }}
                            </th>
                            <td>
                                {{ $about->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.urutan') }}
                            </th>
                            <td>
                                {{ $about->urutan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.image') }}
                            </th>
                            <td>
                                @foreach($about->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.style') }}
                            </th>
                            <td>
                                @if($about->style)
                                    <span class="badge badge-relationship">{{ $about->style->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.heading') }}
                            </th>
                            <td>
                                {{ $about->heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.subheading') }}
                            </th>
                            <td>
                                {{ $about->subheading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.desc') }}
                            </th>
                            <td>
                                {{ $about->desc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.about.fields.color') }}
                            </th>
                            <td>
                                {{ $about->color }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('about_edit')
                    <a href="{{ route('admin.abouts.edit', $about) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection