<?
if(!defined('BASEPATH')) exit('No direct script access allowed');


 
/*
 * Metronic Top Menu Class
 * El Top menu es un array de MenuOptions
 */
 class MetronicTopMenu { 
	 
	 public $options = array();
	 
	 public function __construct($options = array()) {
		 $this->options = $options;
	 }
 } 
 
/*
 * Clase MenuOption
 * config_array es su aparicencia 
 * options es lo que va a mostrar en el sub menu
 */
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
 
 /* Clase base de una opcion del menu, contiene su apariencia y su action
  * text
  * href
  * icon
  * badge
  */
 class MetronicTopMenu_Option {
	 
	 public $text;
	 public $href = "javascript:;";
	 public $icon = null;
	 public $badge = null;
	 public $isSection = false;
	 
	 public function __construct($config_array){
		 $this->text = $config_array["text"];
		 
		 if(isset($config_array["href"]))
			$this->href = $config_array["href"];
		 
		 if(isset($config_array["icon"]))
			$this->icon = $config_array["icon"];
		 
		 if(isset($config_array["badge"]))
			$this->badge = $config_array["badge"];
		
		 if(isset($config_array["isSection"]))
			$this->isSection = $config_array["isSection"];
		   
	 }
	 
	 public function setIcon($icon){
		 $this->icon = $icon;
	 }
	 
	 public function setBadge($badge){
		 $this->badge = $badge;
	 }
	 
 }
 
?>
