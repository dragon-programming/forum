<?php
/**
 * The index section of our theme.
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 * 
 * @version	1.0
 */
// Include our header.
require 'header.php';
require 'libs/classes/Post.php';

// Include required classes.
// use libs\classes\{
//     Post
// };

// Instantiate Post Object.
$post = new Post;

// Get all posts.
$posts = $post->get_posts();
?>

<!-- .posts-section -->
<div class="posts-section col-md-8">
    <?php foreach($posts as $post): ?>
        <div class="post">
            <div class="post-header row">
                <div class="post-info">
                    <h2 style="color: #fff;">Topic</h2>
                    Posted by <a href="profile.php" class="user-name"><?= $post->posted_by ?></a> at 8 mins ago.
                </div>

                <div class="user-img">
                    <a href="profile.php" title="<?= $post->posted_by ?>" >
                        <?php if (!empty($post->profile_pic)): ?>
                            <div class="profile-pic">
                                <img src="<?= $post->profile_pic ?>" alt="" />
                            </div>

                        <?php else: ?>
                            <div class="profile-pc-alt"><?= $post->posted_by ?></div>

                        <?php endif ?>
                    </a>
                </div>
            </div>
            
            <div class="post-body">
                <?= substr($post->content, 0, 200) ?>
            </div>

            <div class="post-footer">
                <ul class="mb-4">
                    <li><a href=""><i class="fa fa-thumbs-up icon-x3"></i>13</a></li>
                    <li><a href="single.php?action=comment"><i class="fa fa-comment icon-x3"></i>1</a></li>
                    <li><i class="fa fa-share icon-x3"></i>6</li>
                    <li><i class="fa fa-pencil-square-o icon-x3 edit-post" title="Edit Post"></i></li>
                </ul> 
            </div>
        </div>

    <?php endforeach ?>
</div>

<?php
// Include our footer.
require 'footer.php';
