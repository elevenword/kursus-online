<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = "details";
    protected $fillable = [
        'alamat',
        'pendidikan',
        'tujuan',
    ];
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
