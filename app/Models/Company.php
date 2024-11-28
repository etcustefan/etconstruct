<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $fillable = [
        'business_name',
        'construction_name',
        'construction_description',
        'construction_short_description',
        'phone',
        'additional_phone',
        'email',
        'address'
    ];

    public function apartments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Apartment::class, 'company_id', 'id');
    }
}
