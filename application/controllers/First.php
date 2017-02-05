<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->data['pagebody'] = 'justone';

		$record = $this->quotes->get(1);

		$this->data = array_merge($this->data, $record);
		$this->render();
	}

	function zzz() {
		$this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);

        $this->data = array_merge($this->data, $record);
        $this->render();
	}

	function gimme($id) {
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get($id);

        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
