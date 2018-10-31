<?php

namespace Climate\Controllers;

class Template {
	public function __construct($file) {
		echo '<p>' . $file . '</p>';
	}
}