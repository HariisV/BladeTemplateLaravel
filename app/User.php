<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use App\pertanyaan;

class user extends Model
{
    protected $fillable = [
        'nama','email','foto'
    ];

    protected $table = 'user';
    
    
    public function pertanyaan()
    {
        return $this->HasMany(pertanyaan::class,'user_id', 'id');
    }
}
