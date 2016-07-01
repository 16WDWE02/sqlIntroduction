<?php

require "Views/MoviesView.php";
require "Views/MovieFormView.php";

class MoviesController extends Controller
{
	public function show() {

		$id = isset($_GET['id']) ? ($_GET['id']) : null;

		$singlemovie = new Movie($id);
		var_dump($singlemovie);

		$view = new MoviesView(compact('singlemovie'));
		$view->render();
	}
	public function add() {
		$view = new MovieFormView;
		$view->render();
	}
	public function edit() {
		$movie = new Movie;
		$singlemovie = $movie->find();
		var_dump($singlemovie);

		$view = new MovieFormView(compact('singlemovie'));
		$view->render();
	}
	public function delete() {

		User::deleteMovie();
		header("Location:./");
	}
}