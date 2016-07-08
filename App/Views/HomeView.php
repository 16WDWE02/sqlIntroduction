<?php
namespace App\Views;
class HomeView extends View
{
	public function render() {
		extract($this->data);
		include "templates/home.php";
	}
}