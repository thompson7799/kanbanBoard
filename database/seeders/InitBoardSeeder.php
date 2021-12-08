<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;
use App\Models\BoardColumn;
use App\Models\BoardColumnItem;

class InitBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $board = new Board();
        $board->name = "Board 1";
        $board->save();

        $columnTodo = new BoardColumn();
        $columnTodo->board_id = 1;
        $columnTodo->title = "Todo";
        $columnTodo->save();

        $columnInProgress = new BoardColumn();
        $columnInProgress->board_id = 1;
        $columnInProgress->title = "In Progress";
        $columnInProgress->save();

        $columnDone = new BoardColumn();
        $columnDone->board_id = 1;
        $columnDone->title = "Done";
        $columnDone->save();

        $item1 = new BoardColumnItem();
        $item1->board_column_id = 1;
        $item1->content = "Make sure you do this task!";
        $item1->order = 1;
        $item1->save();

        $item2 = new BoardColumnItem();
        $item2->board_column_id = 1;
        $item2->content = "And this one!";
        $item2->order = 2;
        $item2->save();

    }
}
