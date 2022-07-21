<?php

namespace App\Http\Livewire\Backend;

use App\Models\Post;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PostTable extends DataTableComponent
{

    protected int $editOnId = 0;

    /**
     * Mount the component.
     *
     * @param int $id
     * @return void
     */
    public function mount($editOnId = 0)
    {
        $this->editOnId = $editOnId;
    }

    public function columns(): array
    {
        return [
            Column::make('Title')
                ->sortable()
                ->searchable(),
            Column::make('Post Type', 'post_type')->sortable(),
            Column::make('Post Date', 'post_date')
                ->sortable(),
            Column::make('Last Update', 'updated_at')
                ->sortable(),
            Column::make('Actions'),
        ];
    }

    public function query(): Builder
    {
        if ($this->editOnId > 0) {
            return Post::with('user')->orderBy('id', 'desc')->where('id', '!=', $this->editOnId);
        }
        return Post::with('user');
    }

    // table class
    public function setTableClass(): string
    {
        return 'table table-sm table-bordered';
    }

    // row view
    public function rowView(): string
    {
        return 'backend.posts.includes.row';
    }


}
