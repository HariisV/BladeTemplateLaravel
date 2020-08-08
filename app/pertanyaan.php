<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use App\pertanyaan;

class pertanyaan extends Model
{
    protected $fillable =[
        'user_id' ,'judul','isi'
    ];

    protected $table = 'pertanyaan';

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
