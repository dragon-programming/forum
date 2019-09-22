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
$page_title = 'Create Post';

// Include our header.
require 'header.php';

?>

<!-- .new-posts-section -->
<div class="new-posts-section col-md-8">
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <fieldset>
            <input type="text" name="title" placeholder="Title" class="mb-4"/>
            
            <textarea name="content" id="text-editor" cols="30" rows="10"  ></textarea>

            <input type="submit" value="Publish" id="submit" class="btn-cus mrg-top" />
        </fieldset>
    </form>
</div>
<!-- .new-posts-section /-->

<?php
// Include our footer.
require 'footer.php';