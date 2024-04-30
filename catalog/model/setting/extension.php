<?php
namespace Opencart\Catalog\Model\Setting;
class Extension extends \Opencart\System\Engine\Model {
		// echo '<pre>';print_r($query);exit;
	
	public function getExtensions(): array {
		$query = $this->db->query("SELECT DISTINCT `extension` FROM `" . DB_PREFIX . "extension`");
		// echo '<pre>';print_r($query);exit;

		return $query->rows;
	}

	public function getExtensionsByType(string $type): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "'");
		// echo '<pre>';print_r($query);exit;

		return $query->rows;
	}

	public function getExtensionByCode(string $type, string $code): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "' AND `code` = '" . $this->db->escape($code) . "'");
		// echo '<pre>';print_r($query);exit;

		return $query->row;
	}
	public function getThemeOption() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeoption WHERE id = true");
		// echo '<pre>';print_r($query);exit;
		return $query->row;
	}
	public function changeDevMode() {
		$this->db->query("UPDATE " . DB_PREFIX . "themeoption SET `dev_mode` = 0 WHERE `id` = 1");
	}
}