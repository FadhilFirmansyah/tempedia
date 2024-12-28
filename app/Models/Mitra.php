<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitra';
    protected $fillable = ["mitra", "nama", "alamat", "slug", "image", "deskripsi"];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "mitra"
            ]
        ];
    }
}
