<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'street_address',
        'city',
        'state',
        'zip',
        'country_id',
        'phone',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['inv_code'] ?? false,
            fn ($query, $inv_code) =>
            $query->where('inv_code', 'like', '%'.$inv_code.'%')
        );

        $query->when(
            $filters['reason'] ?? false,
            fn ($query, $reason) =>
            $query->where('reason', 'like', '%'.$reason.'%')
        );

        $query->where('active', 1);
    }
}
