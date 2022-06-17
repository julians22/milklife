@extends('backend.layouts.app')

@section('title', __('All Products'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('All Products')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.product.create')"
                :text="__('Create Product')"
            />
        </x-slot>

        <x-slot name="body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="20%">Name</th>
                        <th>Size</th>
                        <th>Variant</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->productVariant->name }}</td>
                            <td>{{ $product->updated_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}

        </x-slot>
    </x-backend.card>
@endsection
