<?php
namespace App\Models;

class Movie extends Database {

	protected static $tablename = "movies";
	protected static $columns = ['id', 'title', 'description', 'rating', 'duration', 'release_date'];
}