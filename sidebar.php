<aside class="col-md-4">
    <?php if(empty($page_title)): ?>
        <div class="widget">
            <div class="widget-header">
                Login
            </div>

            <div class="widget-body login-form">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <fieldset>
                        <input type="text" placeholder="Username" name="username" />
                        <input type="password" placeholder="Password" name="password" class="mrg-top"/>

                        <input type="submit" class="btn-cus" value="Login" class="mrg-top" />

                        <span style="float: right;"><a href="signup.php">Don't have an account?</a></span>
                    </fieldset>
                </form>
            </div>

            <div class="widget-footer">

            </div>
        </div>
    <?php endif ?>

    <div class="widget">
        <div class="widget-header">
            Website Statistics
        </div>

        <div class="widget-body">
            <ul>
                <li><span class="widget-item">Number of post:</span> <?= $numOfPosts ?></li>
                <li><span class="widget-item">Admins and Moderators:</span> 1</li>
                <li><span class="widget-item">Members:</span> 2</li>
            </ul>
        </div>

        <div class="widget-footer">

        </div>
    </div>

    <div class="widget">
        <div class="widget-header">
            About
        </div>

        <div class="widget-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut placeat id culpa error laboriosam praesentium tempora molestias quidem, ullam natus dicta dolorum, corrupti voluptates. Fugiat earum cum corporis nam.
        </div>

        <div class="widget-footer">

        </div>
    </div>
</aside>