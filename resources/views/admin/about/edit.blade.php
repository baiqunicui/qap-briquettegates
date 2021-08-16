@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.about.title_singular') }}:
                    {{ trans('cruds.about.fields.id') }}
                    {{ $about->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('about.edit', [$about])
        </div>
    </div>
</div>
@endsection