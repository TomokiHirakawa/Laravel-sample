<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    // indexに渡す値
    public function getData()
    {
        return $this->id . ':' . $this->content;
    }

    // バリデーション
    public static $rules = array(
        'content' => 'required'
    );
}
