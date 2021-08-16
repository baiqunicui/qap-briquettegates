@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.productList.title_singular') }}:
                    {{ trans('cruds.productList.fields.id') }}
                    {{ $productList->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.id') }}
                            </th>
                            <td>
                                {{ $productList->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.slug') }}
                            </th>
                            <td>
                                {{ $productList->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.image') }}
                            </th>
                            <td>
                                @foreach($productList->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.style') }}
                            </th>
                            <td>
                                @if($productList->style)
                                    <span class="badge badge-relationship">{{ $productList->style->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.heading') }}
                            </th>
                            <td>
                                {{ $productList->heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.subheading') }}
                            </th>
                            <td>
                                {{ $productList->subheading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.desc') }}
                            </th>
                            <td>
                                {{ $productList->desc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.color') }}
                            </th>
                            <td>
                                {{ $productList->color }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.imageproduct') }}
                            </th>
                            <td>
                                @foreach($productList->imageproduct as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.s_2_heading') }}
                            </th>
                            <td>
                                {{ $productList->s_2_heading }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productList.fields.s_2_desc') }}
                            </th>
                            <td>
                                {{ $productList->s_2_desc }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('product_list_edit')
                    <a href="{{ route('admin.product-lists.edit', $productList) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.product-lists.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection