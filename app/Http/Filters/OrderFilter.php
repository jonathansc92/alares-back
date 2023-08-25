<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class OrderFilter extends Filter
{
    public function sort(array $value = []): Builder
    {
        if (isset($value['by']) && ! Schema::hasColumn('orders', $value['by'])) {
            return $this->builder;
        }

        return $this->builder->orderBy(
            $value['by'] ?? 'created_at',
            $value['order'] ?? 'desc'
        );
    }

    public function limit(int $value = 50): Builder
    {
        $this->builder->getModel()->setPerPage($value);

        return $this->builder;
    }
}
