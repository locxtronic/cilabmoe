<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->logged == false) {
			redirect("/");
		}
		$this->load->model("item_model");
	}

	public function index()
	{
		// $rawTable = $this->item_model->getAllItem(paginationLimit,$this->uri->segment(3));
		$this->load->library('table');
		$rawTable = $this->item_model->getAllItem();
		$tableArray;
		foreach ($rawTable as $row) {
			$row->action = "<a href='". base_url()."/Dashboard/deleteItem/" . $row->ID . "'>
												<i class='fa fa-trash fa-2x'></i>
											</a>" . "&nbsp" .
											"<a href='". base_url()."/Dashboard/update/"
												. $row->ID . "/"
												. $row->NAME . "/"
												. $row->QUANTITY . "'>" .
												"<i class='fa fa-pencil fa-2x'></i></a>";
			$tableArray[] = array($row->ID,$row->NAME,$row->QUANTITY,$row->action);
		}
		$template = array('table_open' => '<table class="table table-striped">');
		$this->table->set_heading('ID', 'Name', 'Quantity', 'Action');
		$this->table->set_template($template);
		$generatedTable = $this->table->generate($tableArray);
		$data =  [
			"htmlTable" => $generatedTable,
			"pagination" => ""
		];
		$this->load->view("header");
		$this->load->view("dashboard",$data);
	}

	public function deleteItem($id)
	{
		$this->item_model->delete($id);
		$this->index();
	}

	public function register()
	{
		$this->load->view("header");
		$this->load->view("insert");
	}

	public function insertItem()
	{
		// check value not null before insert to db using if statement
		$this->item_model->insert(
			$this->input->post("tbxItemName"),
			$this->input->post("tbxItemQuantity")
		);
		redirect("dashboard");
	}

	public function update($id)
	{
		$this->load->view("header");
		$this->load->view("updateItem",["id" => $id]);
	}

	public function updateItem($id)
	{
		$data = [
			"id" => $id,
			"name" => $this->input->post("tbxItemName"),
			"quantity" => $this->input->post("tbxItemQuantity")
		];
		$this->item_model->update($data);
		redirect("dashboard");
	}
}
