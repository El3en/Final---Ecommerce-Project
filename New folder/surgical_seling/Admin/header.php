
<?php

$id=$_SESSION['id'];
$a="SELECT * From admin where a_id ='".$id."' ";
$ql=mysqli_query($connect,$a);
$f=mysqli_fetch_array($ql);
?>


<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="admin.php" class="logo">
       <h2> HOME</h2>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
               
			
            </a>
            		  <?php
	$ab = "SELECT * FROM message ";
	$ba = mysqli_query($connect,$ab);
	$ft = mysqli_fetch_array($ba);
	// Return the number of rows in result set
	$baa = mysqli_num_rows($ba);

			$user2 = "SELECT * FROM user where u_id = '".$ft['u_id']."' ";
	$user1 = mysqli_query($connect,$user2);
		$user = mysqli_fetch_array($user1);

?>	
			<ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have <?php echo($baa); ?> Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo("../images/".$user['image']); ?>"></span>
                                <span class="subject">
                                <span class="from"><?php echo($user['name']); ?></span>
                                <span class="time"><?php echo($ft['date']); ?></span>
                                </span>
                                <span class="message">
                                   <?php echo($ft['message']); ?>
                                </span>
                    </a>
                </li>
               
                <li>
                    <a href="r_m.php">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo("images/".$f['a_img']); ?>">
                <span class="username"><?php echo ($f['a_nme']); ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><?php echo("<a href='profile.php?id=".$f['a_id']."'>") ?><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>