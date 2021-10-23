<?php

namespace App\Services;

use App\Models\Blog\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class CategoryService
{
    private function baseQuery(): Builder
    {
        return Category::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations']);
    }

    public function allWithCount(): LengthAwarePaginator
    {
        return $this->baseQuery() ->withCount(['posts'])->paginate();
    }
}
