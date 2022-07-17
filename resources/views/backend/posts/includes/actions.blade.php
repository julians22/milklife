{{-- <span class="d-flex"> --}}
    <x-utils.view-button text="" :href="route('admin.post.show', ['post' => $post])" />
    <x-utils.edit-button text="" :href="route('admin.post.edit', ['post' => $post])" />
    <x-utils.delete-button text="" :href="route('admin.post.destroy', ['post' => $post])" />
{{-- </span> --}}
