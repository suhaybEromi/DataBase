<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sold extends Model
{
    use HasFactory;
    protected $table = "sold";
    protected $fillable = ['user_id', 'stock_id', 'clean','price_at' , 'piece'];

    public function chashier(){
        return $this->hasOne('App\Models\User' , 'id' , 'user_id');
    }
    public function one_stock(){
        return $this->hasOne('App\Models\stocks' , 'id' , 'stock_id');
    }
}
