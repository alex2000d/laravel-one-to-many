<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_project',
        'slug',
        'description',
        'name',
        'surname',
        'github',
        'image',
    ];

   public static function generateSlug($name_project){
    return Str::slug($name_project, '-');
   }
}
