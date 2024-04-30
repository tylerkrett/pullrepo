<?php
namespace Opencart\Catalog\Model\Extension\ishiproductsblock\Module;
class IshiProductsBlock extends \Opencart\System\Engine\Model {

	public function getProduct(int $product_id): array {
		$query = $this->db->query("SELECT DISTINCT *, pd.`name` AS name, p.`image`, m.`name` AS manufacturer, (SELECT `price` FROM `" . DB_PREFIX . "product_discount` pd2 WHERE pd2.`product_id` = p.`product_id` AND pd2.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.`quantity` = '1' AND ((pd2.`date_start` = '0000-00-00' OR pd2.`date_start` < NOW()) AND (pd2.`date_end` = '0000-00-00' OR pd2.`date_end` > NOW())) ORDER BY pd2.`priority` ASC, pd2.`price` ASC LIMIT 1) AS `discount`, (SELECT `price` FROM `" . DB_PREFIX . "product_special` ps WHERE ps.`product_id` = p.`product_id` AND ps.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.`date_start` = '0000-00-00' OR ps.`date_start` < NOW()) AND (ps.`date_end` = '0000-00-00' OR ps.`date_end` > NOW())) ORDER BY ps.`priority` ASC, ps.`price` ASC LIMIT 1) AS `special`, (SELECT `points` FROM `" . DB_PREFIX . "product_reward` pr WHERE pr.`product_id` = p.`product_id` AND pr.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "') AS `reward`, (SELECT ss.`name` FROM `" . DB_PREFIX . "stock_status` ss WHERE ss.`stock_status_id` = p.`stock_status_id` AND ss.`language_id` = '" . (int)$this->config->get('config_language_id') . "') AS `stock_status`, (SELECT wcd.`unit` FROM `" . DB_PREFIX . "weight_class_description` wcd WHERE p.`weight_class_id` = wcd.`weight_class_id` AND wcd.`language_id` = '" . (int)$this->config->get('config_language_id') . "') AS `weight_class`, (SELECT lcd.`unit` FROM `" . DB_PREFIX . "length_class_description` lcd WHERE p.`length_class_id` = lcd.`length_class_id` AND lcd.`language_id` = '" . (int)$this->config->get('config_language_id') . "') AS length_class, (SELECT AVG(`rating`) AS `total` FROM `" . DB_PREFIX . "review` r1 WHERE r1.`product_id` = p.`product_id` AND r1.`status` = '1' GROUP BY r1.`product_id`) AS `rating`, (SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "review` r2 WHERE r2.`product_id` = p.`product_id` AND r2.`status` = '1' GROUP BY r2.`product_id`) AS `reviews`, p.`sort_order` FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (p.`product_id` = p2s.`product_id`) LEFT JOIN `" . DB_PREFIX . "manufacturer` m ON (p.`manufacturer_id` = m.`manufacturer_id`) WHERE p.`product_id` = '" . (int)$product_id . "' AND pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND p.`status` = '1' AND p.`date_available` <= NOW() AND p2s.`store_id` = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			$product_data = $query->row;

			$product_data['variant'] = (array)json_decode($query->row['variant'], true);
			$product_data['override'] = (array)json_decode($query->row['override'], true);
			$product_data['price'] = ($query->row['discount'] ? $query->row['discount'] : $query->row['price']);
			$product_data['rating'] = (int)$query->row['rating'];
			$product_data['reviews'] = $query->row['reviews'] ? $query->row['reviews'] : 0;

			return $product_data;
		} else {
			return [];
		}
	}

	// public function resize(string $filename, int $width, int $height): string {
	// 	if (!is_file(DIR_IMAGE . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $filename)), 0, strlen(DIR_IMAGE)) != DIR_IMAGE) {
	// 		return '';
	// 	}

	// 	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	// 	$image_old = $filename;
	// 	$image_new = 'cache/' . Helper\Utf8\substr($filename, 0, Helper\Utf8\strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;

	// 	if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
	// 		list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
				 
	// 		if (!in_array($image_type, [IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF, IMAGETYPE_WEBP])) {
	// 			return $this->config->get('config_url') . 'image/' . $image_old;
	// 		}
						
	// 		$path = '';

	// 		$directories = explode('/', dirname($image_new));

	// 		foreach ($directories as $directory) {
	// 			if (!$path) {
	// 				$path = $directory;
	// 			} else {
	// 				$path = $path . '/' . $directory;
	// 			}

	// 			if (!is_dir(DIR_IMAGE . $path)) {
	// 				@mkdir(DIR_IMAGE . $path, 0777);
	// 			}
	// 		}

	// 		if ($width_orig != $width || $height_orig != $height) {
	// 			$image = new \Opencart\System\Library\Image(DIR_IMAGE . $image_old);
	// 			$image->resize($width, $height);
	// 			$image->save(DIR_IMAGE . $image_new);
	// 		} else {
	// 			copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
	// 		}
	// 	}
		
	// 	$image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatically changing space from " " to +
		
	// 	return $this->config->get('config_url') . 'image/' . $image_new;
	// }

	public function getImages(int $product_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_image` WHERE `product_id` = '" . (int)$product_id . "' ORDER BY `sort_order` ASC");

		return $query->rows;
	}

	public function getBestSeller(int $limit): array {
		$product_data = (array)$this->cache->get('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$query = $this->db->query("SELECT op.`product_id`, SUM(op.`quantity`) AS `total` FROM `" . DB_PREFIX . "order_product` op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.`order_id` = o.`order_id`) LEFT JOIN `" . DB_PREFIX . "product` p ON (op.`product_id` = p.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (p.`product_id` = p2s.`product_id`) WHERE o.`order_status_id` > '0' AND p.`status` = '1' AND p.`date_available` <= NOW() AND p2s.`store_id` = '" . (int)$this->config->get('config_store_id') . "' GROUP BY op.`product_id` ORDER BY `total` DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getProducts(array $data = []): array {
		$sql = "SELECT p.`product_id`, (SELECT AVG(`rating`) AS `total` FROM `" . DB_PREFIX . "review` r1 WHERE r1.`product_id` = p.`product_id` AND r1.`status` = '1' GROUP BY r1.`product_id`) AS `rating`, (SELECT `price` FROM `" . DB_PREFIX . "product_discount` pd2 WHERE pd2.`product_id` = p.`product_id` AND pd2.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.`quantity` = '1' AND ((pd2.`date_start` = '0000-00-00' OR pd2.`date_start` < NOW()) AND (pd2.`date_end` = '0000-00-00' OR pd2.`date_end` > NOW())) ORDER BY pd2.`priority` ASC, pd2.`price` ASC LIMIT 1) AS `discount`, (SELECT `price` FROM `" . DB_PREFIX . "product_special` ps WHERE ps.`product_id` = p.`product_id` AND ps.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.`date_start` = '0000-00-00' OR ps.`date_start` < NOW()) AND (ps.`date_end` = '0000-00-00' OR ps.`date_end` > NOW())) ORDER BY ps.`priority` ASC, ps.`price` ASC LIMIT 1) AS `special`";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM `" . DB_PREFIX . "category_path` cp LEFT JOIN `" . DB_PREFIX . "product_to_category` p2c ON (cp.`category_id` = p2c.`category_id`)";
			} else {
				$sql .= " FROM `" . DB_PREFIX . "product_to_category` p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN `" . DB_PREFIX . "product_filter` pf ON (p2c.`product_id` = pf.`product_id`) LEFT JOIN `" . DB_PREFIX . "product` p ON (pf.`product_id` = p.`product_id`)";
			} else {
				$sql .= " LEFT JOIN `" . DB_PREFIX . "product` p ON (p2c.`product_id` = p.`product_id`)";
			}
		} else {
			$sql .= " FROM `" . DB_PREFIX . "product` p";
		}

		$sql .= " LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (p.`product_id` = p2s.`product_id`) WHERE pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND p.`status` = '1' AND p.`date_available` <= NOW() AND p2s.`store_id` = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.`path_id` = '" . (int)$data['filter_category_id'] . "'";
			} else {
				$sql .= " AND p2c.`category_id` = '" . (int)$data['filter_category_id'] . "'";
			}

			if (!empty($data['filter_filter'])) {
				$implode = [];

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.`filter_id` IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.`name` LIKE '" . $this->db->escape('%' . $word . '%') . "'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.`description` LIKE '" . $this->db->escape('%' . (string)$data['filter_name'] . '%') . "'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.`tag` LIKE '" . $this->db->escape('%' . $word . '%') . "'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.`model`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`sku`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`upc`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`ean`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`jan`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`isbn`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.`mpn`) = '" . $this->db->escape(Helper\Utf8\strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.`manufacturer_id` = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = [
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'p.sort_order',
			'p.date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.`price` END)";
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
			// for never get one more time with same product id
			if (!isset($product_data[$result['product_id']])) {
				$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id']);
			}
		}

		return $product_data;
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

	public function getCategory(int $category_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "category` c LEFT JOIN `" . DB_PREFIX . "category_description` cd ON (c.`category_id` = cd.`category_id`) LEFT JOIN `" . DB_PREFIX . "category_to_store` c2s ON (c.`category_id` = c2s.`category_id`) WHERE c.`category_id` = '" . (int)$category_id . "' AND cd.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND c2s.`store_id` = '" . (int)$this->config->get('config_store_id') . "' AND c.`status` = '1'");

		return $query->row;
	}

	public function getCategorySubcategoryProducts($data = array()) {
		$sql = "SELECT p.product_id, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";
		
		
		if (!empty($data['filter_category_id'])) {
			$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
			
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}

		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'p.sort_order',
			'p.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY p.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
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

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}
}
