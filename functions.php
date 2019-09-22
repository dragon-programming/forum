<?php
/**
 * The file contains all functions.
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 * 
 * @version	1.0
 */

/**
 * Class Autoloader
 */
// function autoload_classes($class): void
// {
//     $dir = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . PROJECT_DIR;
    
//     $class_dir = $dir . $class . '.php';
    
//     // Get the correct directory separator.
//      $class_dir = str_replace('/', DIRECTORY_SEPARATOR, $class_dir);


//     if ($class !== 'mysqli') {
//         if (!file_exists($class_dir)) {
//             throw new Exception('Class "'. $class .'" does not exist.', 1);
//         } else {
//             require $class_dir;
//         }
//     }
    
// }

// Register the autoloader
// spl_autoload_register('autoload_classes');

/**
 * Sanitize data.
 * 
 * @return string A clean data.
 */
function clean_data($data): string
{
    return (string) htmlspecialchars(trim(stripcslashes($data)));
}