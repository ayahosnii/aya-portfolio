<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model
{
    use Translatable;


    protected $with = ['translations'];



    protected $fillable = ['title', 'slug', 'description', 'github_link', 'project_link', 'image'];

    public $translatedAttributes  = ['title', 'description'];
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
