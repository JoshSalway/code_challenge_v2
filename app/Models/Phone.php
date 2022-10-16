<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    protected $fillable = [
        'number',
        'type',
    ];

    public function contacts(): MorphToMany
    {
        return $this->morphedByMany(Contact::class, 'phoneable');
    }
}
