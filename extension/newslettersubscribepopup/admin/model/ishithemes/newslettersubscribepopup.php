<?php
namespace Opencart\Admin\Model\Extension\newslettersubscribepopup\ishithemes;
class NewslettersubscribePopup extends \Opencart\System\Engine\Model {
	public function checkmailid($data): array {
  	   
	   $query=$this->db->query("SELECT * FROM " . DB_PREFIX . "subscribe where email_id='".$data['subscribe_email']."'");
	   
	   return $query->num_rows;
	   
	}
	
	public function checkRegisteredUser($data): array {
  	   
	   $query=$this->db->query("SELECT * FROM " . DB_PREFIX . "customer where email='".$data['subscribe_email']."'");
	   
	   return $query->num_rows;
	   
	}
	
	public function UpdateRegisterUsers($data,$status): void {
  	   
	   $query=$this->db->query("UPDATE  " . DB_PREFIX . "customer SET newsletter ='".$status."' where email='".$data['subscribe_email']."'");

	}
	
	public function getList($data = array()): array {
	
		$sql = "SELECT * FROM " . DB_PREFIX . "subscribe";
		
		if (isset($data['start']) || isset($data['limit'])) {
			
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}				

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}	
		
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		$query = $this->db->query($sql);
	
		return $query->rows;
		
	}
	
	public function getTotalUsers(): int {
	
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "subscribe");
	    
		return $query->num_rows;
		
	}
	
	public function subscribe($data): void {
	  	   
		   $this->db->query(" INSERT INTO " . DB_PREFIX . "subscribe SET email_id='".$data['subscribe_email']."',name='".$data['subscribe_name']."' ,date= CURDATE() ");
	}
	
	public function unsubscribe($data): void {
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "subscribe WHERE email_id='".$data['subscribe_email']."'");
	}

	
	public function graphs(): array{
		
		$query = $this->db->query(" SELECT `date`, count( `id` )  AS `total` FROM " . DB_PREFIX . "subscribe GROUP BY `date` ");
		
		return $query->rows;
		
	}
	
	public function delete($data): void {
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "subscribe WHERE id='".$data."'");
	}
	
   	public function check_db(): void{
	   
	 $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "subscribe (
						  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
						  `email_id` varchar(225) NOT NULL,
						  `name` varchar(225) NOT NULL,
						  `date` varchar(150) NOT NULL,
						  PRIMARY KEY (`id`),
						  UNIQUE KEY `Index_2` (`email_id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;");

   }
}
?>
