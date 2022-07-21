<x-livewire-tables::bs4.table.cell>
    <div style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width:400px"
        title="{{ $row->title }}">
        {{ $row->title }}
    </div>
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->post_type }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @if (isset($row->post_date))
        {{ $row->post_date->format('Y-m-d') }}
    @endif
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->updated_at->format('Y-m-d') }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @include('backend.posts.includes.actions', ['post' => $row])
</x-livewire-tables::bs4.table.cell>

