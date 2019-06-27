<?php
/**
 * This script is responsible for
 * establishing a connection to the
 * database.
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 * 
 * @version	1.0
 */

// Database credentials.
$server = 'localhost';
$db_user = 'root';
$db_password = '555';
$db = 'weber';

// Establish the connection.
$conn = new mysqli($server, $db_user, $db_password, $db);

// Check if there was an error when trying to establish the connection.
if ($conn->connect_error)
    trigger_error($conn->connect_error, E_USER_WARNING);
