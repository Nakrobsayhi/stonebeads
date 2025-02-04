<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    use HasFactory;

    protected $primaryKey = 'product_id';

    public function cat()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


        public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
