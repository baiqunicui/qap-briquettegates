<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('home_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Home" format="csv" />
                <livewire:excel-export model="Home" format="xlsx" />
                <livewire:excel-export model="Home" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.home.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.home.fields.urutan') }}
                            @include('components.table.sort', ['field' => 'urutan'])
                        </th>
                        <th>
                            {{ trans('cruds.home.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.home.fields.style') }}
                            @include('components.table.sort', ['field' => 'style.title'])
                        </th>
                        <th>
                            {{ trans('cruds.home.fields.heading') }}
                            @include('components.table.sort', ['field' => 'heading'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($homes as $home)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $home->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $home->id }}
                            </td>
                            <td>
                                {{ $home->urutan }}
                            </td>
                            <td>
                                @foreach($home->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                @if($home->style)
                                    <span class="badge badge-relationship">{{ $home->style->title ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $home->heading }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('home_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.homes.show', $home) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('home_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.homes.edit', $home) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('home_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $home->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $homes->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush