<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $table="roles";
    protected $fillable=['TipoRol'];

    public function users(){
        return $this->hasMany(User::class, 'id','idRol');
    }
}
