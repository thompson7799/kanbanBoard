<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\BoardColumnItem;

class BoardColumn extends Model
{
    use HasFactory;

    public function boardColumnItems(): HasMany
    {
        return $this->hasMany(BoardColumnItem::class, 'board_column_id', 'id')->orderBy('order');
    }
}
