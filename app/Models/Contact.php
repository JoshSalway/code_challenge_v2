<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Contact extends Model
{
    use HasFactory;

    protected $casts = [
        'date_of_birth ' => 'datetime:d-m-Y',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'company_name',
        'position',
        'email',
    ];

    public function phones(): MorphToMany
    {
        return $this->morphToMany(Phone::class, 'phoneable');
    }
}
