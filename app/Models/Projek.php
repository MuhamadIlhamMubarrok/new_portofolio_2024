<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Projek extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['banner', 'nama', 'deskripsi', 'memberId', 'skillId', 'category'];

    // Tambahkan casts untuk mengonversi JSON ke array
    protected $casts = [
        'memberId' => 'array',
        'skillId' => 'array',
    ];

    // Relasi dengan tabel SubGambarProject
    public function subGambarProjects()
    {
        return $this->hasMany(SubGambarProject::class, 'projek_id');
    }

    public function getMembers()
    {
        // Mendapatkan array memberId dari kolom
        $memberIds = $this->memberId;

        // Jika memberIds null atau bukan array, kembalikan koleksi kosong
        if (is_null($memberIds) || !is_array($memberIds)) {
            return collect(); // Mengembalikan koleksi kosong jika tidak ada member
        }

        // Mengembalikan koleksi Member berdasarkan array memberId
        return Member::whereIn('id', $memberIds)->get();
    }
    public function getSkills()
    {
        $skillIds = $this->skillId;
        if (is_null($skillIds) || !is_array($skillIds)) {
            return collect(); 
        }

        return Skill::whereIn('id', $skillIds)->get();
    }
}
