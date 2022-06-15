<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kindAnimal extends Model
{
    use HasFactory;
    public function kindServices(){
        return $this->hasMany(ServicesCat::class,'lang_id');
    }
}
