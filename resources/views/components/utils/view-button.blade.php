@props(['href' => '#', 'permission' => false, 'text' => __('View')])

<x-utils.link :href="$href" class="btn btn-info btn-sm" icon="fas fa-search" :text="$text" permission="{{ $permission }}" />
