<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('product_list_delete')
            <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button"
                wire:click="confirm('deleteSelected')" wire:loading.attr="disabled"
                {{ $this->selectedCount ? '' : 'disabled' }}>
                {{ __('Delete Selected') }}
            </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
            <livewire:excel-export model="ProductList" format="csv" />
            <livewire:excel-export model="ProductList" format="xlsx" />
            <livewire:excel-export model="ProductList" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="inline-block w-full sm:w-1/3" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table w-full table-index">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.productList.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.productList.fields.slug') }}
                            @include('components.table.sort', ['field' => 'slug'])
                        </th>
                        <th>
                            {{ trans('cruds.productList.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.productList.fields.style') }}
                            @include('components.table.sort', ['field' => 'style.title'])
                        </th>
                        <th>
                            {{ trans('cruds.productList.fields.heading') }}
                            @include('components.table.sort', ['field' => 'heading'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productLists as $productList)
                    <tr>
                        <td>
                            <input type="checkbox" value="{{ $productList->id }}" wire:model="selected">
                        </td>
                        <td>
                            {{ $productList->id }}
                        </td>
                        <td>
                            {{ $productList->slug }}
                        </td>
                        <td>
                            @foreach($productList->image as $key => $entry)
                            <a class="link-photo" href="{{ $entry['url'] }}">
                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}"
                                    title="{{ $entry['name'] }}">
                            </a>
                            @endforeach
                        </td>
                        <td>
                            @if($productList->style)
                            <span class="badge badge-relationship">{{ $productList->style->title ?? '' }}</span>
                            @endif
                        </td>
                        <td>
                            {{ $productList->heading[0]['en'] ?? '' }}
                        </td>
                        <td>
                            <div class="flex justify-end">
                                @can('product_list_show')
                                <a class="mr-2 btn btn-sm btn-info"
                                    href="{{ route('admin.product-lists.show', $productList) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('product_list_edit')
                                <a class="mr-2 btn btn-sm btn-success"
                                    href="{{ route('admin.product-lists.edit', $productList) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('product_list_delete')
                                <button class="mr-2 btn btn-sm btn-rose" type="button"
                                    wire:click="confirm('delete', {{ $productList->id }})" wire:loading.attr="disabled">
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
            {{ $productLists->links() }}
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
