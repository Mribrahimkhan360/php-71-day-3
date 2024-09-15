<?php

require_once('connected.php');
require_once('header.php');
if (isset($_REQUEST['id'])) {
    $getId = $_REQUEST['id'];

    $selectInfo = "SELECT * FROM admin_users WHERE id=$getId";
    $runInfo = mysqli_query($con, $selectInfo);
    while ($getData = mysqli_fetch_array($runInfo)) {
        ?>
        <div class="container">
        <form action="editData_core.php" method="POST" class="prettyprint linenums">
            <div class="clearfix">
                <label>First name</label>
                <div class="input">
                    <input type="text" name="fname" value="<?php echo $getData['fname'] ?>">
                </div>
            </div>

            <div class="clearfix">
                <label>Last name</label>
                <div class="input">
                    <input type="text" name="lname" value="<?php echo $getData['lname'] ?>">
                </div>
            </div>
            <div class="clearfix">
                <label>Email</label>
                <div class="input">
                    <input type="text" name="email" value="<?php echo $getData['email'] ?>">
                </div>
            </div>
            <div class="clearfix">
                <label>username</label>
                <div class="input">
                    <input type="text" name="username" value="<?php echo $getData['username'] ?>">
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $getId; ?>">
            <div class="clearfix">
                <label>password</label>
                <div class="input">
                    <input type="text" name="password" value="<?php echo $getData['password'] ?>">
                </div>
            </div>
            <div class="action well ">
                <input type="submit" class="btn primary" name="editButton" value="update data">
            </div>
        </form>
        </div>
    <?php }
} ?>

