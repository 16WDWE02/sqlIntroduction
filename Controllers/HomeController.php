<?php

require "Views/View.php";
require "Views/HomeView.php";


class HomeController extends Controller
{
	public function show() {
		$movie = new Movie;
		$movies = $movie->SelectAll();
		// var_dump(count($movies));
		$view = new HomeView(compact('movies', 'tags'));
		$view->render();
	}
	
}