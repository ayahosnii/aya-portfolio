<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes  = ['title', 'description'];

    use HasFactory;
    protected $fillable = ['slug', 'description', 'image'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
