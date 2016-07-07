<?php

// require "Views/MoviesView.php";
// require "Views/MovieFormView.php";

class MoviesController extends Controller
{
	public function show() {

		$singlemovie = new Movie($_GET['id']);

		$view = new MoviesView(compact('singlemovie'));
		$view->render();
	}
	public function add() {
		$singlemovie = new Movie;

		$view = new MovieFormView(compact('singlemovie'));
		$view->render();
	}
	public function insert() {
		$movie = new Movie($_POST);
		$movie->insert();

		header("Location: ./?page=movie&id=" . $movie->id);
	}
	public function edit() {

		$singlemovie = new Movie($_GET['id']);

		$view = new MovieFormView(compact('singlemovie'));
		$view->render();
	}
	public function update() {

		$movie = new Movie($_POST);
		$movie->update();

		header("Location: ./?page=movie&id=" . $movie->id);
	}
	public function delete() {

		Movie::delete($_GET['id']);
		header("Location:./");
	}
}