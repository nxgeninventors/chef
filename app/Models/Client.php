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
        'name',
        'email',
        'mobile',
        'address_1',
        'address_2',
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
}
