<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - MY Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

use Coolpraz\PhpBlade\PhpBlade;
require_once APPPATH . 'third_party/community_auth/core/Auth_Controller.php';

class MY_Controller extends Auth_Controller
{
	protected $views = APPPATH . 'views';
	protected $cache = APPPATH . 'cache';
	protected $blade;
	
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->blade = new PhpBlade($this->views, $this->cache);
	}
}

/* End of file MY_Controller.php */
/* Location: /community_auth/core/MY_Controller.php */
