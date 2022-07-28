<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div x-cloak>
        <ul class="list-group mb-3">
            @if ($productLinks->count() > 0)
                @foreach ($productLinks as $link)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-group row w-100">
                        <label for="" class="col-md-3 col-form-label">{{ $link['name'] }}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="links[{{ $link['name'] }}]" value="{{ $link['value'] }}">
                        </div>
                    </div>
                </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
