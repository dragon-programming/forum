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




$posts = [
    [
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
        'author' => 'Jane Doe',
        'profile-pic' => '../dgn-contants\dgn-uploads\image\mark 1.png'
    ],
    [
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
        'author' => 'Sammy',
    ],
    [
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
        'author' => 'Mack',
    ],
    [
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
        'author' => 'James',
    ],
    [
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cumque alias, laborum, ex facere accusantium distinctio minima provident praesentium molestias suscipit quasi numquam architecto molestiae nisi! Suscipit officia a ipsam.',
        'author' => 'Bobby'
    ],
];

$numOfPosts = count($posts);
?>

<!-- .posts-section -->
<div class="posts-section col-md-8">
    <?php foreach ($posts as $post):
        $short_content = substr($post['content'], 0, 490) .' <a href="single.php">Read More...</a>';
        
        ?>

        <!-- .post -->
        <div class="post">
            <div class="post-header row">
                <div class="post-info">
                    <h2>Post Title</h2>

                    By <a href="profile.php" class="user-name"><?= $post['author'] ?></a> at 8 mins ago.
                </div>
                
                <?php $username = 'Emmanuel' ?>
                <div class="user-img">
                    <a href="profile.php" title="<?= $post['author'] ?>" >
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
                <?= $short_content ?>
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
        <!-- .post /-->
    <?php endforeach ?>
</div>
<!-- .posts-section /-->

<?php
// Include our footer.
require 'footer.php';
