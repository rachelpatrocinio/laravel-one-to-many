<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongTo(Type::class);
    }

    protected $fillable = [
        'project_title','type_id', 'slug', 'project_description', 'github_url'
    ];
}
