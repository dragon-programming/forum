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
$page_title = 'Post Title';

// Include our header.
require 'header.php';

$post = [
    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
    'author' => 'Bobby'
];
?>

<div class="posts-section col-md-8">
    <!-- .post -->
    <div class="post">
        <div class="post-header row">
            <div class="post-info">
                <h2>Post Title</h2>

                By <a href="" class="user-name"><?= $post['author'] ?></a> at 8 mins ago.
            </div>
            
            <?php //$image = '../dgn-contants\uploads\image\mark 1.png' ?>
            <?php $username = 'Emmanuel' ?>
            <div class="user-img">
                <a href="" title="<?= $post['author'] ?>" >
                    <?php if(isset($post['profile-pic'])): ?>
                        <div class="profile-pic">
                            <img src="<?= $post['profile-pic'] ?>" alt="B" />
                        </div>

                    <?php else: ?>
                        <div class="profile-pc-alt"><?= $post['author'][0] ?></div>

                    <?php endif ?>
                </a>
            </div>
        </div>

        <div class="post-body">
            <?= $post['content'] ?>
        </div>

        <div class="post-footer">
            <ul class="mb-4">
                <li><i class="fa fa-thumbs-up icon-x3"></i>13</li>
                <li><i class="fa fa-comment icon-x3"></i>1</li>
                <li><i class="fa fa-share icon-x3"></i>6</li>
                <li><i class="fa fa-pencil-square-o icon-x3 edit-post" title="Edit Post"></i></li>
            </ul>


            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <fieldset>
                    <textarea name="content" id="text-editor" cols="30" rows="10"  ></textarea>

                    <input type="submit" value="Comment" id="submit" class="btn-cus mrg-top" />
                </fieldset>
            </form>  
        </div>
    </div>
    <!-- .post /-->
</div>

<?php
// Include our footer.
require 'footer.php';