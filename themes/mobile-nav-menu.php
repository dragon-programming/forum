<script>
    $(document).ready(function() {
        $('#mobile-menu-bar').click(function(event) {
            // Toggle the mobile nav menu.
            $('#mobile-nav-menu').toggle('slow');
        });
    });
</script>

<!-- .mobile-nav-menu-bar -->
<div class="mobile-nav-menu-bar" id="mobile-menu-bar">
    <i class="fa fa-bars"></i>
</div>
<!-- .mobile-nav-menu-bar /-->

<!-- .mobile-nav-menu -->
<nav class="mobile-nav-menu" id="mobile-nav-menu">
    <!-- .mobile-nav-menu-items -->
    <ul class="mobile-nav-menu-items">
        <!-- .header-search-bar -->
        <li class="header-search-bar">
            <form action="" method="POST">
                <input type="search" name="keyword" placeholder="Search" />
            </form>
        </li>
        <!-- .header-search-bar /-->

        <!-- .mobile-nav-menu-item -->
        <a href="index.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-home"></i> Home</li>
        </a>
        <a href="new-post.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-pencil"></i> Create New Post</li>
        </a>
        <a href="message.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-comment"></i> Message</li>
        </a>
        <a href="" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-bell"></i> Notification</li>
        </a>
        <a href="profile.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-user"></i> Profile</li>
        </a>
        <a href="settings.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-cog"></i> Settings</li>
        </a>
        <a href="logout.php" class="mobile-nav-menu-link">
            <li class="mobile-nav-menu-item col-md-12"><i class="fa fa-sign-out"> Logout</i></li>
        </a>
        <!-- .mobile-nav-menu-item /-->

    </ul>
    <!-- .mobile-nav-menu-items /-->
    </nav>
<!-- .mobile-nav-menu /-->