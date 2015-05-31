<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * welcome_Test
 *
 * tests the welcome class
 *
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 *
 * @file		welcome_Test.php
 * @version		1.1.2
 * @date		02/08/2012
 */

// --------------------------------------------------------------------------

/**
 * welcome_Test class.
 *
 * @extends CIUnit_TestCase
 */
class welcome_Test extends CIUnit_TestCase
{
	// --------------------------------------------------------------------------

	/**
	 * _ci
	 *
	 * the codeigniter super object
	 *
	 * @var mixed
	 * @access private
	 */
	private $_ci;

	// --------------------------------------------------------------------------

	/**
	 * setUp function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		// Set the tested controller
		$this->_ci =& set_controller('welcome');
		$this->_ci->router->class = 'welcome';
	}

	// --------------------------------------------------------------------------

	/**
	 * tearDown function.
	 *
	 * @access public
	 * @return void
	 */
	public function tearDown()
	{
		parent::tearDown();
	}

	// --------------------------------------------------------------------------

	/**
	 * test_index function.
	 *
	 * @access public
	 * @return void
	 */
	public function test_index()
	{
		// test
		$this->_ci->_remap('index');
		$out = output();

		// Check if the content is OK
		// $this->assertSame(0, preg_match('/(error|notice)(?:")/i', $out));
		$this->assertNotEquals('', $out);
	}

	// --------------------------------------------------------------------------
}
/* End of file welcome_Test.php */
/* Location: ./base_codeigniter_app/tests/controllers/welcome_Test.php */