<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable=[
        'cate_id',
        'name',
        'slug',
        'small_deskripsi',
        'deskripsi',
        'harga_asli',
        'harga_jual',
        'image1',
        'image2',
        'qty',
        'status',
        'trending',
        

    ];
    public function category(){
        return $this->belongsTo(Category::class, 'cate_id','id');
    }
}
