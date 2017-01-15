<?php
/**
 * Database migration class
 *
 * @author Lionel Laffineur <lionel@tigron.be>
 */
namespace Skeleton\Transaction;

use \Skeleton\Database\Database;

class Migration_20170113_074921_Parallel extends \Skeleton\Database\Migration {

	/**
	 * Migrate up
	 *
	 * @access public
	 */
	public function up() {
		$db = Database::get();
		/*$db->query("ALTER TABLE `transaction`
					ADD `parallel` tinyint(4) NOT NULL,
					ADD `retry_interval` int NOT NULL AFTER `parallel`;");*/
	}

	/**
	 * Migrate down
	 *
	 * @access public
	 */
	public function down() {

	}
}
