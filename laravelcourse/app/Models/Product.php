<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['name', 'price'];

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
