<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class Projek extends Model
{
   use HasFactory, HasUuids;

    protected $fillable = ['gambar', 'video', 'nama', 'deskripsi'];

    public function subGambarProjects()
    {
        return $this->hasMany(SubGambarProject::class, 'projek_id');
    }
}

