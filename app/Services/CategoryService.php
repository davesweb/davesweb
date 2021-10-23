<?php

namespace App\Services;

use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryService
{
    public function allWithCount(): LengthAwarePaginator
    {
        return $this->baseQuery()->withCount(['posts'])->paginate();
    }

    private function baseQuery(): Builder
    {
        return Category::query()
            ->whereHas('translations', function (Builder $query) {
                $query->where('locale', '=', app()->getLocale());
            })
            ->with(['translations'])
        ;
    }
}
