@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.productList.title_singular') }}:
                    {{ trans('cruds.productList.fields.id') }}
                    {{ $productList->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('product-list.edit', [$productList])
        </div>
    </div>
</div>
@endsection