<?php
/**
 * Our Create Post Page.
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 * 
 * @version	1.0
 */
// Set page title.
$page_title = 'Signup';

// Include our header.
require 'header.php';
?>

<div class="signup-form" style="margin: 0 auto">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <fieldset>
            <input type="text" name="username" placeholder="Username" />
            <input type="email" name="email" placeholder="Email" class="mrg-top" />
            <select name="user-role" id="" class="mrg-top">
                <option>-- Select a User Role --</option>
                <option>Administrator</option>
                <option>Moderator</option>
                <option>Member</option>
            </select>
            <input type="password" name="password" placeholder="Password" class="mrg-top" />
            <input type="password" name="password" placeholder="Confirm Password" class="mrg-top" />


            <input type="submit" class="btn-cus" />
        </fieldset>
    </form>
</div>

<?php
// Include our footer.
require 'footer.php';