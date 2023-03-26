<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/html.css">
	<link rel="shortcut icon" type="x-icon" href="Pic/logo.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<title>HTML Basic</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.html" class="brand">
			<img src="Pic/logo2.png" alt="">
		</a>
		<ul class="side-menu top" onClick="openTab(event, 'dasbord-12')">
			<li class="active">
				<a href="#">
					<i class="bx bxs-dashboard" ></i>
					<span class="text">Introduction</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bxs-shopping-bag-alt" ></i>
					<span class="text">General Tags</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Element Component</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
			</ul>
			<!-- setting -->
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class="bx bxs-log-out-circle" ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
			
	</section>
	<!-- SIDEBAR -->

55

	<!-- nav -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="index.html" class="nav-link">ទំព័រដើម</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="Pic/1673258353260.jpg">
			</a>
		</nav>
		<div class="admin-right">
			<div id="dasbord-12" class="tabcontent">
				<h1>hi woeld</h1>
			</div>
			<div id="techer" class="tabcontent">
				<h1>hello woeld</h1>
			</div>
		</div>
	</section>

	
		
		
		
	<script src="scipt/script.js"></script>
</body>
</html>