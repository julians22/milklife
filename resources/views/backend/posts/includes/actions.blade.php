<x-utils.view-button :href="route('admin.post.show', ['post' => $post])" />
<x-utils.edit-button :href="route('admin.post.edit', ['post' => $post])" />
<x-utils.delete-button :href="route('admin.post.destroy', ['post' => $post])" />
