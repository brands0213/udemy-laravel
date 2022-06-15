<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{  
   use HasFactory;
   protected $fillable =['name', 'address', 'email', 'website'];

   public function contacts()
   {
        return $this->hasMany(Contact::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
