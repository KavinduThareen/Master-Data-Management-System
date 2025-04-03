<?php


namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'status'];



    //    new addd

    public function items()
    {
        return $this->hasMany(Item::class);
    }

}



