<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product extends Controller {
	public function index() {
		$this->call->view('insert');
	}

    public function add_product() {
		$product_name = $this->io->post('product_name');
        $product_quantity = $this->io->post('product_quantity');

        echo $product_name;
	}
}
?>