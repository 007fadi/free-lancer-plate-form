<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = 'messages';

    protected $fillable=['message', 'user_id', 'receiver', 'is_seen', 'file'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
