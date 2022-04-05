<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "todo";
    protected $guarded = array("id");

    public static $rules = array(
        "title" => "required",
        "comment" => "required",
    );

    public function user()
    {
        return $this->belongsTo("App\Models\user");
    }
}
