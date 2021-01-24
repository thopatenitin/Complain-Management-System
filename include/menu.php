<?php
if($_SESSION['user_type'] == 'Civilean'){
?>
<style>
#ddblueblockmenu {
	border: 1px solid;
	border-bottom-width: 0;
	width: 180px;
	
}

#ddblueblockmenu ul{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font: normal 90% 'Trebuchet MS', 'Lucida Grande', Arial, sans-serif;
	
}

#ddblueblockmenu li a{
	display: block;
	padding: 3px 0;
	padding-left: 9px;
	width: 172px; /*185px minus all left/right paddings and margins*/
	text-decoration: none;
	color: white;
	height: 30px;
	background-color: orange;
	border-bottom: 1px solid #90bade;
	border-left: 7px solid #1958b7;
}



#ddblueblockmenu li a:hover {
	background-color:#990033;
	border-left-color: #1c64d1;
	font-weight:bold;
}

#ddblueblockmenu div.menutitle{
	color: white;
	border-bottom: 1px solid black;
	padding: 1px 0;
	padding-left: 5px;
	background-color: black;
	font: bold 90% 'Trebuchet MS', 'Lucida Grande', Arial, sans-serif;
}

</style>
<div id="ddblueblockmenu">
	  <div class="menutitle">Civilean Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Civilean&view=main">Welcome&nbsp;<?php echo ucwords($_SESSION['user_name']); ?></a></li>
			
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Civilean&view=makeComplain">Make Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Civilean&view=compDetails">View Complain Details</a></li>
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'corporator'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Corporator Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome&nbsp;<?php  echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=corporator&view=viewComplain">View Assign Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=corporator&view=viewComplainClose">Close Complain</a></li>
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}else if($_SESSION['user_type'] == 'Administrator'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=main">Welcome&nbsp;<?php  echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=compDetails">Assign Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=vDetails">View Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=compCloseDetails">View Close Complain</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=enggDetails"> Corporator Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=custDetails">Civilean Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=Administrator&view=reports">Reports</a></li>
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>