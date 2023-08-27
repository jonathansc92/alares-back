<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'orders';

    protected $fillable = [
        'plan_id',
        'name',
        'email',
        'phone',
        'status',
    ];

    protected $casts = [
        'status' => OrderStatusEnum::class,
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }
}
