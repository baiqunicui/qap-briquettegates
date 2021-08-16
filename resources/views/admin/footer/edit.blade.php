@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.footer.title_singular') }}:
                    {{ trans('cruds.footer.fields.id') }}
                    {{ $footer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('footer.edit', [$footer])
        </div>
    </div>
</div>
@endsection