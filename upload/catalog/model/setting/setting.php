<?php
class ModelSettingSetting extends Model {
	public function getSetting($code, $store_id = 0) {
		$data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

		foreach ($query->rows as $result) {
			if (!$result['serialized']) {
				$data[$result['key']] = $result['value'];
			} else {
				$data[$result['key']] = json_decode($result['value'], true);
			}
		}

		return $data;
	}
	
	public function getSettingValue($key, $store_id = 0) {
		$query = $this->db->query("SELECT value FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `key` = '" . $this->db->escape($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return null;	
		}
	}	

	public function updateFlatShippingCost($price) {
		
		$this->db->query("UPDATE " .DB_PREFIX . "setting  SET value='" .$price . "' WHERE `key` = 'shipping_flat_cost';");

	}

	public function prviousFlatShippingCost() {

		$query=$this->db->query("SELECT * FROM  " . DB_PREFIX . "setting WHERE code = 'shipping_flat_previous'");

			return $query->row['value'];
	}

	public function getBillingCountry()
	{

		$query=$this->db->query("SELECT * FROM  " . DB_PREFIX . "address WHERE customer_id = '".(int)$this->customer->getId()."'  ORDER BY address_id DESC LIMIT 1  ");

		return $query->row['country_id'];

	}
}