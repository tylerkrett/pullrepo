<?php
namespace Opencart\Catalog\Model\Extension\ishispecialproductblock\Module;
class IshiSpecialBlock extends \Opencart\System\Engine\Model {
	
	public function getSpecials(array $data = []): array {
		$sql = "SELECT DISTINCT ps.`product_id`, (SELECT AVG(`rating`) FROM `" . DB_PREFIX . "review` r1 WHERE r1.`product_id` = ps.`product_id` AND r1.`status` = '1' GROUP BY r1.`product_id`) AS rating FROM `" . DB_PREFIX . "product_special` ps LEFT JOIN `" . DB_PREFIX . "product` p ON (ps.`product_id` = p.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (p.`product_id` = p2s.`product_id`) WHERE p.`status` = '1' AND p.`date_available` <= NOW() AND p2s.`store_id` = '" . (int)$this->config->get('config_store_id') . "' AND ps.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.`date_start` = '0000-00-00' OR ps.`date_start` < NOW()) AND (ps.`date_end` = '0000-00-00' OR ps.`date_end` > NOW())) GROUP BY ps.`product_id`";

		$sort_data = [
			'pd.name',
			'p.model',
			'ps.price',
			'rating',
			'p.sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY p.`sort_order`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.`name`) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.`name`) ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$product_data = [];

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getImages(int $product_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_image` WHERE `product_id` = '" . (int)$product_id . "' ORDER BY `sort_order` ASC");

		return $query->rows;
	}
	
	public function getProductSpecialsDate($product_id) {
		$query = "SELECT date_start,date_end FROM " . DB_PREFIX . "product_special ps WHERE product_id = '" . (int)$product_id . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1";

		$query = $this->db->query($query);

		if ($query->num_rows) {
			return array(
				'date_start'  => $query->row['date_start'],
				'date_end'  => $query->row['date_end'],
			);
		} else {
			return false;
		}
	}


}
