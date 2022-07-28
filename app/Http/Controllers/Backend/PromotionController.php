<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{

    public function index()
    {
        return view('backend.promotion.index');
    }

    public function edit(Request $request, Promotion $promotion)
    {
        return view('backend.promotion.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'image' => 'required',
        ]);

        $promotion->update([
            'title' => $request->title,
            'exerpt' => $request->exerpt,
            'url' => $request->url,
            'button_label' => $request->button_label ?? 'Beli Sekarang',
            'image' => $request->image,
            'status' => $request->status ?? 0,
        ]);

        return redirect()->route('admin.promotion.index')->with('success', 'Promotion updated successfully');
    }
}
