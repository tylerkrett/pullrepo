<?php
namespace Opencart\Admin\Model\Setting;
class Setting extends \Opencart\System\Engine\Model {
	public function getSettings(int $store_id = 0): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' OR `store_id` = '0' ORDER BY `store_id` ASC");

		return $query->rows;
	}

	public function getSetting(string $code, int $store_id = 0): array {
		$setting_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

		foreach ($query->rows as $result) {
			if (!$result['serialized']) {
				$setting_data[$result['key']] = $result['value'];
			} else {
				$setting_data[$result['key']] = json_decode($result['value'], true);
			}
		}

		return $setting_data;
	}

	public function editSetting(string $code, array $data, int $store_id = 0): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

		foreach ($data as $key => $value) {
			if (substr($key, 0, strlen($code)) == $code) {
				if (!is_array($value)) {
					$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
				} else {
					$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value)) . "', `serialized` = '1'");
				}
			}
		}
	}

	public function deleteSetting(string $code, int $store_id = 0): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");
	}

	public function getValue(string $key, int $store_id = 0): string {
		$query = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `key` = '" . $this->db->escape($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return '';
		}
	}

	public function editValue(string $code = '', string $key = '', string|array $value = '', int $store_id = 0): void {
		if (!is_array($value)) {
			$this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape($value) . "', `serialized` = '0'  WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND `store_id` = '" . (int)$store_id . "'");
		} else {
			$this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape(json_encode($value)) . "', `serialized` = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND `store_id` = '" . (int)$store_id . "'");
		}
	}

	public function createThemeOptionTable() {
		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."ishi_sliderimage'")->num_rows == 0) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "ishi_sliderimage` (
			  `ishi_sliderimage_id` int(11) NOT NULL,
			  `module_id` int(11) NOT NULL,
			  `language_id` int(11) NOT NULL,
			  `title` varchar(64) NOT NULL,
			  `link` varchar(255) NOT NULL,
			  `image` varchar(255) NOT NULL,
			  `sort_order` int(3) NOT NULL DEFAULT '0',
			  PRIMARY KEY (`ishi_sliderimage_id`)
			) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
			$this->db->query($sql);
		}
		
		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."themeoption'")->num_rows == 0) {
			
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "themeoption` (
                     `id` int(11) NOT NULL AUTO_INCREMENT,
					 `themecolor` varchar(20) DEFAULT NULL,
					 `breadcrumb_image` varchar(500) DEFAULT NULL,
					 `breadcrumb_color` varchar(20) DEFAULT NULL,
					 `subcategory_type` varchar(20) DEFAULT NULL,
					 `category_counter` tinyint(1) NOT NULL DEFAULT '1',
					 `product_counter` tinyint(1) NOT NULL DEFAULT '1',
					 `headernav_bgcolor` varchar(20) DEFAULT NULL,
					 `headernav_textcolor` varchar(20) DEFAULT NULL,
					 `header_bgcolor` varchar(20) DEFAULT NULL,
					 `header_textcolor` varchar(20) DEFAULT NULL,
					 `header_text_hovercolor` varchar(20) DEFAULT NULL,
					 `btn_bgcolor` varchar(20) DEFAULT NULL,
					 `btnhover_bgcolor` varchar(20) DEFAULT NULL,
					 `btn_textcolor` varchar(20) DEFAULT NULL,
					 `btnhover_textcolor` varchar(20) DEFAULT NULL,
					 `footer_bgimage` varchar(500) DEFAULT NULL,
					 `footer_bgcolor` varchar(20) DEFAULT NULL,
					 `footer_titlecolor` varchar(20) DEFAULT NULL,
					 `footer_textcolor` varchar(20) DEFAULT NULL,
					 `footer_text_hovercolor` varchar(20) DEFAULT NULL,
					 `footerafter_bgcolor` varchar(20) DEFAULT NULL,
					 `footerafter_textcolor` varchar(20) DEFAULT NULL,

					 PRIMARY KEY (`id`)
					) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
					
           $this->db->query($sql);
		   
		   $themeoptions = $this->db->query("INSERT INTO ". DB_PREFIX ."themeoption (themecolor,breadcrumb_image,breadcrumb_color,subcategory_type,category_counter,product_counter,headernav_bgcolor,headernav_textcolor,header_bgcolor,header_textcolor,header_text_hovercolor,btn_bgcolor,btnhover_bgcolor,btn_textcolor,btnhover_textcolor,footer_bgimage,footer_bgcolor,footer_sepretor,footer_titlecolor,footer_textcolor,footer_text_hovercolor,footerafter_bgcolor,footerafter_textcolor) VALUES ('#000','#fff','','grid','1','1','#232323','#fff','#fff','#000','#fff','#23232','#e9a0b4,'#fff','#fff','','#000','#fff','#232323','#000','#000','#fff')");
       }
	}

	public function editThemeOption($data) {	

			$this->db->query("UPDATE " . DB_PREFIX . "themeoption SET `themecolor` = '" . $this->db->escape($data['themecolor'])."',`breadcrumb_image` = '" . $this->db->escape($data['breadcrumb_image']) . "',`breadcrumb_color` = '" . $this->db->escape($data['breadcrumb_color'])."',`subcategory_type` = '" . $this->db->escape($data['subcategory_type'])."',`category_counter` = '" . (isset($data['category_counter']) ? (int)$data['category_counter'] : 0) . "',`product_counter` = '" . (isset($data['product_counter']) ? (int)$data['product_counter'] : 0) . "',`headernav_bgcolor` = '" . $this->db->escape($data['headernav_bgcolor'])."',`headernav_textcolor` = '" . $this->db->escape($data['headernav_textcolor'])."',`header_bgcolor` = '" . $this->db->escape($data['header_bgcolor'])."',`header_textcolor` = '" . $this->db->escape($data['header_textcolor'])."',`header_text_hovercolor` = '" . $this->db->escape($data['header_text_hovercolor'])."',`btn_bgcolor` = '" . $this->db->escape($data['btn_bgcolor'])."',`btnhover_bgcolor` = '" . $this->db->escape($data['btnhover_bgcolor'])."',`btn_textcolor` = '" . $this->db->escape($data['btn_textcolor'])."',`btnhover_textcolor` = '" . $this->db->escape($data['btnhover_textcolor'])."',`footer_bgimage` = '" . $this->db->escape($data['footer_bgimage']) . "',`footer_bgcolor` = '" . $this->db->escape($data['footer_bgcolor'])."',`footer_titlecolor` = '" . $this->db->escape($data['footer_titlecolor'])."',`footer_textcolor` = '" . $this->db->escape($data['footer_textcolor'])."',`footer_text_hovercolor` = '" . $this->db->escape($data['footer_text_hovercolor'])."',`footerafter_bgcolor` = '" . $this->db->escape($data['footerafter_bgcolor'])."',`footerafter_textcolor` = '" . $this->db->escape($data['footerafter_textcolor'])."' WHERE `id` = 1");
	}

	public function getThemeOption() {
		// print_r($this->db->query("SELECT * FROM " . DB_PREFIX . "themeoption WHERE id = 1")); exit;
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeoption WHERE id = 1");
		// print_r($query->row);
		return $query->row;
	}
}