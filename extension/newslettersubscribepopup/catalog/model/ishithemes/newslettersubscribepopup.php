<?php
namespace Opencart\Catalog\Model\Extension\newslettersubscribepopup\ishithemes;
class NewslettersubscribePopup extends \Opencart\System\Engine\Model { 
	
	public function checkmailid($data) {
  	   
	   $query=$this->db->query("SELECT * FROM " . DB_PREFIX . "subscribe where email_id='".$data['subscribepop_email']."'");
	   
	   return $query->num_rows;
	   
	}
	
	public function checkRegisteredUser($data) {
  	   
	   $query=$this->db->query("SELECT * FROM " . DB_PREFIX . "customer where email='".$data['subscribepop_email']."'");
	   
	   return $query->num_rows;
	   
	}
	
	public function UpdateRegisterUsers($data,$status) {
  	   
	   $query=$this->db->query("UPDATE  " . DB_PREFIX . "customer SET newsletter ='".$status."' where email='".$data['subscribepop_email']."'");

	}
	
	public function getList() {
	
		$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "subscribe where email_id='".$data['subscribepop_email']."'");
	    
		return $query->num_rows;
		
	}
	
	public function subscribe($data) {
	  	   if(!isset($data['subscribe_name'])) $data['subscribe_name'] = $data['subscribepop_email'];
		   $this->db->query(" INSERT INTO " . DB_PREFIX . "subscribe SET email_id='".$data['subscribepop_email']."',name='".$data['subscribe_name']."' ,date= CURDATE() ");
	}
	
	public function unsubscribe($data) {
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "subscribe WHERE email_id='".$data['subscribepop_email']."'");
	}
	
   	public function check_db(){
	   
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
