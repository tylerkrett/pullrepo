<?php
class ModelDesignTopmenu extends Model {
	public function getMenu() {

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		$this->load->model('catalog/category');
		
		$top_cats = $this->model_catalog_category->getCategories(0);
		$category = "<ul class=\"list-unstyled\">\n";
		foreach ($top_cats as $top_cat)	{
			if ($top_cat['top']) {
				$name	= $top_cat['name'];
				$href	= $this->url->link('product/category', 'path=' . $top_cat['category_id']);
				$class	= in_array($top_cat['category_id'], $parts) ?  " class=\"active\"" : "";
				$category .= "<li>\n<a href=\"".$href."\"".$class.">".$name."</a>\n";
			}
		}

		return $category."\n</ul>\n";
	} 	

}

?>