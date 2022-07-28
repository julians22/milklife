<?php

namespace App\Http\Livewire\Backend\Promotions;

use App\Models\Promotion;
use Livewire\Component;

class PromotionList extends Component
{

    public function render()
    {
        $promotions = Promotion::orderBy('order', 'asc')->get();
        return view('livewire.backend.promotions.promotion-list', compact('promotions'));
    }

    public function updatePromotionOrder($orders)
    {
        foreach ($orders as $key => $order) {
            $promotion = Promotion::find($order['value']);
            $promotion->order = $order['order'];
            $promotion->save();
        }
    }
}
