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
$page_title = 'Profile';

// Include our header.
require 'header.php';

?>

<!-- .profile -->
<div class="profile col-md-8">
    <!-- .profile-pic -->
    <div class="profile-pic mb-4">
        <img src="../dgn-contants\dgn-uploads\image\mark 1.png" alt="" />

        <i class="fa fa-pencil-square-o icon-x3 edit-post" title="Edit Post"></i>
    </div>
    <!-- .profile-pic /-->
    
    <!-- .responsive-table -->
    <div class="responsive-table">
        <!-- .table -->
        <table class="table table-striped table-hover ">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Name: </th>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><a href="mailto: johndoe@mail.com">johndoe@mail.com</a></td>
                </tr>
                <tr>
                    <th>Gender: </th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th>User Role: </th>
                    <td>Administrator</td>
                </tr>
                <tr>
                    <th>Account Status: </th>
                    <td class="text-success" style="font-weight: bold; cursor:pointer;">Active</td>
                    <!-- <td class="text-danger" style="font-weight: bold">Inactive</td> -->
                </tr>
                <tr>
                    <th>Joined:</th>
                    <td>September 9</td>
                </tr>
            </tbody>
        </table>
        <!-- .table /-->
    </div>
    <!-- .responsive-table /-->
</div>
<!-- .profile /-->

<?php
// Include our footer.
require 'footer.php';