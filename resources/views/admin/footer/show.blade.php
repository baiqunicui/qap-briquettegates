@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.footer.title_singular') }}:
                    {{ trans('cruds.footer.fields.id') }}
                    {{ $footer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.id') }}
                            </th>
                            <td>
                                {{ $footer->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.urutan') }}
                            </th>
                            <td>
                                {{ $footer->urutan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.image') }}
                            </th>
                            <td>
                                @foreach($footer->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.style') }}
                            </th>
                            <td>
                                @if($footer->style)
                                    <span class="badge badge-relationship">{{ $footer->style->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.heading') }}
                            </th>
                            <td>
                                {{ $footer->heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.subheading') }}
                            </th>
                            <td>
                                {{ $footer->subheading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.desc') }}
                            </th>
                            <td>
                                {{ $footer->desc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.footer.fields.color') }}
                            </th>
                            <td>
                                {{ $footer->color }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('footer_edit')
                    <a href="{{ route('admin.footers.edit', $footer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection