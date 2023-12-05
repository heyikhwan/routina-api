<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionTracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_transaction_id',
        'amount',
        'description',
        'date',
        'type',
        'file',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function categoryTransaction(): BelongsTo
    {
        return $this->belongsTo(CategoryTransaction::class);
    }
}
