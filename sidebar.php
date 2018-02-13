<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Laboy Baboy Tours</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
</head>
<body>

	<div id="wrapper">
		<!--Sidebar-->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li><a href="#">Content 1</li>
				<li><a href="#">Content 2</li>
				<li><a href="#">Content 3</li>
				<li><a href="#">Content 4</li>
			</ul>
		</div>

		<!--Page content-->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<a href="#" class="btn btn-success" id="menu-toggle">Menu</a>
						<h1>Dashboard</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>


	<script type="text/javascript">
			$("#menu-toggle").click( function(e){
			e.preventDefault();
			$("#wrapper").toggleClass("menuDisplayed");
			});
	</script>
</body>
</html>