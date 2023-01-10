<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'education_package_id',
        'package_name',
        'total',
        'user_id',
        'valid_until',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'education_package_id' => 'integer',
        'user_id' => 'integer',
        'valid_until' => 'datetime',
    ];

    public function educationPackage()
    {
        return $this->belongsTo(EducationPackage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
