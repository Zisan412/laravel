<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;  // yeh upar add karo


class Task extends Model
{
    
    protected $fillable = ['title', 'description', 'status'];
    public function user()
{
    return $this->belongsTo(User::class);
}

}
