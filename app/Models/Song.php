<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

	public function author()
	{
		return $this->belongsTo(Author::class);
	}

	public function review()
	{
		return $this->hasMany(Review::class);
	}

	public function genre()
	{
		return $this->belongsToMany(Genre::class);
	}
}
