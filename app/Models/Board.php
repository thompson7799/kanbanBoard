<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\BoardColumn;
use App\Http\Resources\BoardResource;

class Board extends Model
{
    use HasFactory;

    public function boardColumns(): HasMany
    {
        return $this->hasMany(BoardColumn::class, 'board_id', 'id');
    }

    public static function getBoard() {
        return new BoardResource(self::with(['boardColumns.boardColumnItems'])->first());
    }
}
