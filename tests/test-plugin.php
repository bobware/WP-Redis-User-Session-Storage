<?php
/**
 * Plugin tests
 *
 * @package WP_Redis_User_Session_Storage
 */

/**
 * Class Test_Plugin.
 */
class Test_Plugin extends WP_UnitTestCase {
	/**
	 * Check that Redis backend is available.
	 */
	public function test_connection() {
		$this->assertTrue(
			WP_Session_Tokens::get_instance( 0 )->redis_connected(),
			'Failed to assert that Redis is available.'
		);
	}
}
