<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FivePD Online</title> <!-- < set your community's name here -->
	<link rel="stylesheet" href="backend/css/main.css"> <!-- do not touch this, unless you know what u are doing.. -->
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="FivePD Online"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="https://fivepd.online/assets/img/promo.png"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content="http://fivepd.online"> <!-- meta if u send links on discord etc includes this -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
		}
	</script>
</head>
<body>
	<header>
		<div class="wrapper">
			<nav>
				<!-- <img src="logo" alt="header_logo"> --> <!-- set your community logo here make sure to hide the community name if you do change=! --> 
				<h2>FivePD <span>Online</span></h2> <!-- set your community name here --> 
				<div class="right">
					<a href="#">Forum</a>  <!-- change the discord link to your discord's server link -->
					<a href="https://www.discord.gg/">Discord</a>  <!-- change the discord link to your discord's server link -->
					<a href="#">Updates</a> <!-- to be added to next update -->
				</div>
			</nav>
		</div>
	</header>
	<main>
		<div class="wrapper">
			<div class="section-promo">
				<div class="promo-background">
					<h1>Serve & Protect the Citizens of The State of San Andreas.</h1> <!-- set here title of the promo header -->
				</div>
			</div>
			<div class="section-tutorial">
				<h2>Let's get started with the basics.</h2> 
				<div class="wrapper-tutorial">
					<div class="section-tutorial-container">
						<div class="rtr">
							<h3><i class="fas fa-book"></i>Read the Rules</h3>
							<p>Aliquid, dolores natus exercitationem dolorem vitae consequuntur eligendi veritatis nam, ab nesciunt, cumque, reiciendis aspernatur! Dolorem placeat deleniti doloremque animi quisquam repellendus.</p> <!-- set here requested stuff you can do alot of things here visit w3schools -->
						</div>
						<div class="jts">
							<h3><i class="fas fa-sign-in-alt"></i>Join the Server</h3>
							<h4><span class="lnumbers1">1.</span> Open FiveM</h4>
							<h4><span class="lnumbers">2.</span> Click & Paste <button id="serverip" onclick="copyToClipboard('#serverip')">example.com:port</button></h4> <!-- set server ip here -->
							<h4><span class="lnumbers">3.</span> Connect to the Server</h4>
						</div>
						<div class="dsc">
							<h3><i class="fab fa-discord"></i>Join our Discord</h3>
							<p>Chat with fellow members and be part of the community, and receive the latest information & updates by joining our discord server!</p>
							<a href="https://www.discord.gg/"><i class="fab fa-discord"></i>Community Name</a>
						</div>
						<div class="pab">
							<h3><i class="fas fa-helicopter"></i>Patrol a beat</h3>
							<p>Aliquid, dolores natus exercitationem dolorem vitae consequuntur eligendi veritatis nam, ab nesciunt, cumque, reiciendis aspernatur! Dolorem placeat deleniti doloremque animi quisquam repellendus.</p> <!-- add some info about patrolling on your server -->
						</div>
					</div>
				</div>
			</div>
            <div class="wrapper-global-stats">
				<h2>Statistics</h2>
                <div class="section-global-stats">
					<?php require_once 'backend/conn.php'; ?>
					<div>
						<?php
							$query = "SELECT * FROM users";
							$statement = $conn->prepare($query);
							$statement->execute();
							$query = $statement->fetchAll(PDO::FETCH_ASSOC);
						?>
						<i class="fas fa-pen"></i>
                        <h1><?php echo count($query); ?></h1>
                        <h3>Registered Players</h3>
                    </div>
                    <div>
						<?php
							$query = "SELECT * FROM arrestreports";
							$statement = $conn->prepare($query);
							$statement->execute();
							$query = $statement->fetchAll(PDO::FETCH_ASSOC);
						?>
                        <i class="fas fa-balance-scale"></i>
                        <h1><?php echo count($query); ?></h1>
                        <h3>Arrested Suspects</h3>
                    </div>
                    <div>
						<?php
							$query = "SELECT * FROM defaultreports";
							$statement = $conn->prepare($query);
							$statement->execute();
							$query = $statement->fetchAll(PDO::FETCH_ASSOC);
						?>
                        <i class="fas fa-laptop"></i>
                        <h1><?php echo count($query); ?></h1>
                        <h3>Callouts Completed</h3>
                    </div>
                    <div>
						<?php
							$query = "SELECT * FROM vehiclecitations";
							$statement = $conn->prepare($query);
							$statement->execute();
							$query = $statement->fetchAll(PDO::FETCH_ASSOC);
						?>
						<i class="fas fa-id-card-alt"></i>
                        <h1><?php echo count($query); ?></h1>
                        <h3>Vehicle Citations</h3>
                    </div>
					<div>
						<?php
							$query = "SELECT * FROM pedcitations";
							$statement = $conn->prepare($query);
							$statement->execute();
							$query = $statement->fetchAll(PDO::FETCH_ASSOC);
						?>
						<i class="fas fa-address-card"></i>
                        <h1><?php echo count($query); ?></h1>
                        <h3>Person Citations</h3>
                    </div>
                </div>
            </div>
			<div class="section-extra">
				<h2>Read the latest news.</h2>
				<div class="section-extra-flex">
					<div class="img1"> <!-- community image 1 change image check css -->
						<h3>Title</h3>
						<p>So here is an text-place-holder.. please make sure to provide content here? Lorem ipsum amet consectetur adipisicing elit. Incidunt, tempore accusamus, culpa corporis repudiandae quae laborum repellat.<p>
						<a href="#">Link</a> <!-- forum post link or discord whatever -->
					</div>
					<div class="img2"> <!-- community image 2 change image check css -->
						<h3>Title</h3>
						<p>So here is an text-place-holder.. please make sure to provide content here? Lorem ipsum dolor sit amet  tempore accusamus, culpa corporis repudiandae quae laborum repellat.<p>
						<a href="#">Link</a> <!-- forum post link or discord whatever -->
					</div>
					<div class="img3"> <!-- community image 3 change image check css -->
						<h3>Title</h3>
						<p>So here is an text-place-holder.. please make sure to provide content here? Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, tempore accusamus, culpa corporis repudiandae quae laborum repellat.<p>
						<a href="#">Link</a> <!-- forum post link or discord whatever -->
					</div>
					<div class="img4"> <!-- community image 4 change image check css -->
						<h3>Title</h3>
						<p>So here is an text-place-holder.. please make sure to provide content here? Lorem ipsum dolor sit culpa corporis repudiandae quae laborum repellat.<p>
						<a href="#">Link</a> <!-- forum post link or discord whatever -->
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="wrapper"> <!-- change below requested text </code> -->
			<p>FivePD Online 2021</p>
		</div>
	</footer>
</body>
</html>