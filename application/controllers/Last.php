<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Last extends Application {
	public function Index() {
		$this->data['pagebody'] = 'justone';

		$record = $this->quotes->get(6);

		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}
