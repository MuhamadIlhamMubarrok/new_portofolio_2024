<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class SubGambarProject extends Model
{
  use HasFactory, HasUuids;

    protected $fillable = ['gambar', 'projek_id'];

    public function projek()
    {
        return $this->belongsTo(Projek::class, 'projek_id');
    }
}
