<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'supplier_id', 'category_id',
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }

    public function supplier() : BelongsTo
    {
        return $this->belongsTo('App\Suppliers', 'supplier_id', 'id');
    }
}
