<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
        protected $attributes = array
        (
                'publisher' => "unknown",
		'genre' => "unknown",
		'author' => "unknown",
		'title' => "unknown",
		'checked_out' => 0,
		'condition' => "New",
		$table->timestamps();
        );
        protected $dates = ['deleted_at'];
	
}
