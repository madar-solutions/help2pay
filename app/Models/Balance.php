<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total_earnings',
        'total_withdrawal',
        'total_orders',
        'total_balance_extra',
        'final_balance',
        'timeStamps',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'total_earnings' => 'decimal:2',
        'total_withdrawal' => 'decimal:2',
        'total_orders' => 'decimal:2',
        'total_balance_extra' => 'decimal:2',
        'final_balance' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
