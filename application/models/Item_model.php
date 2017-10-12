<?php
class Item_model extends CI_Model {
  public function getAllItem()
  {
    $query = $this->db->get("ITEM");
    return $query->result();
  }

  public function delete($id)
  {
    $this->db->where(["ID" => $id]);
    $this->db->delete("ITEM");
  }

  public function insert($name, $quantity)
  {
    $this->db->set([
      "NAME" => $name,
      "QUANTITY" => $quantity
    ]);
    $this->db->insert("ITEM");
  }

  public function update($data)
  {
    $this->db->where(["ID" => $data["id"]]);
    $this->db->set(["NAME" => $data["name"], "QUANTITY" => $data["quantity"]]);
    $this->db->update("ITEM");
  }
}
