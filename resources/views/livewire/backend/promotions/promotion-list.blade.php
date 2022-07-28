<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if (!empty($promotions) && count($promotions) > 0)
        <div class="list-group" wire:sortable="updatePromotionOrder">
            @foreach ($promotions as $promotion)
                <div class="list-group-item"  wire:sortable.item="{{ $promotion->id }}" wire:key="promotion-{{ $promotion->id }}">
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-sort" wire:sortable.handle></i>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>{!! nl2br($promotion->title) !!}</h5>
                                    <p>{!! nl2br($promotion->exerpt) !!}</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ $promotion->image }}" alt="" class="w-100 image-promotion" style="max-width: 100px" title="Click to preview">
                                </div>
                            </div>

                        </div>
                        <div class="col-2">
                            <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                <a class="btn btn-success btn-sm" href="{{ route('admin.promotion.edit', ['promotion'=> $promotion]) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            @lang('No promotions found.')
        </div>
    @endif
</div>
