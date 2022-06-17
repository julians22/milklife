<form method="post" {{ $attributes->merge(['action' => '#', 'class' => 'form-horizontal', 'enctype' => '']) }}>
    @csrf
    @method('patch')

    {{ $slot }}
</form>
