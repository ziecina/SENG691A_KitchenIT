<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
	  <div class="navbar-header">
		<a class="navbar-brand" href="#">KitchenIT</a>
	  </div>
	  <div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
		  <li <?php if($_GET['page']=="ShoppingList") 	echo "class=active";?>><a href="index.php?page=ShoppingList">Shopping List</a></li>
		  <li <?php if($_GET['page']=="RecentScans") 	echo "class=active";?>><a href="index.php?page=RecentScans">Recent Scans</a></li>
		  <li <?php if($_GET['page']=="Inventory") 		echo "class=active";?>><a href="index.php?page=Inventory">Inventory</a></li>
		  <li <?php if($_GET['page']=="Devices") 		echo "class=active";?>><a href="index.php?page=Devices">Devices</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li <?php if($_GET['page']=="Profile") 	echo "class=active";?>><a href="index.php?page=Profile">Profile</a></li>
		  <li <?php if($_GET['page']=="LogOut") 	echo "class=active";?>><a href="index.php?page=LogOut">Log Out</a></li>
		</ul>
	  </div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>