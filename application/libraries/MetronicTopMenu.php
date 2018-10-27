<?
if(!defined('BASEPATH')) exit('No direct script access allowed');


 
/*
 * Metronic Top Menu Class
 */

 class MetronicTopMenu { 
	 
	 public $options = array();
	 
	 public function __construct($options = array()) {
		 $this->options = $options;
	 }
 } 
 
 
 class MetronicTopMenu_MenuOption extends MetronicTopMenu_Option {	 
	 public $options = array();
	 public $optionsFormat = "normal";
	 
	 public function __construct($config_array,$options){
		 parent::__construct($config_array);
		 $this->options = $options;
	 }
	 
	 public function createSubMenu($text,$options){
		 
	 }
 }
 
 class MetronicTopMenu_Option {
	 
	 public $text;
	 public $href = "javascript:;";
	 public $icon = null;
	 public $badge = null;
	 
	 public function __construct($config_array){
		 $this->text = $config_array["text"];
		 
		 if(isset($config_array["href"]))
			$this->href = $config_array["href"];
		 
		 if(isset($config_array["icon"]))
		 $this->icon = $config_array["icon"];
		 
		 if(isset($config_array["badge"]))
		 $this->badge = $config_array["badge"];
	 }
	 
	 public function setIcon($icon){
		 $this->icon = $icon;
	 }
	 
	 public function setBadge($badge){
		 $this->badge = $badge;
	 }
	 
 }
 
?>
