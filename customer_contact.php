<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<style type="text/css">    
	    body {
	        color: #f04f01;
	        font-family: "Roboto", sans-serif;
	        background:  url(d4.png);
			opacity: 0.9;
			background-size: cover;
			background-position: center;
	    }
	    .contact-form {
	        padding: 50px;
	        margin: 30px auto;
	    }	
	    .contact-form h1 {
	        font-size: 42px;
	        font-family: 'Pacifico', sans-serif;
	        margin: 0 0 50px;
	        text-align: center;
	    }
	    .contact-form .form-group {
	        margin-bottom: 20px;
	    }
	    .contact-form .form-control, .contact-form .btn {
	        min-height: 38px;
	        border-radius: 2px;
	    }
		.contact-form .form-control {
			border-color: #f04f01;
		}
		.contact-form .form-control:focus {
			border-color: #f04f01;
			box-shadow: 0 0 8px #f04f01;
		}
	    .contact-form .btn-primary {
	        min-width: 250px;
	        color: white;
	        background: #f04f01;
	        margin-top: 20px;
	        border: none;
	    }
	    .contact-form .btn-primary:hover {
	        color: black; 
	    }
	    .contact-form .btn-primary i {
	        margin-right: 5px;
	    }
	    .contact-form label {
	        opacity: 0.9;
	    }
	    .contact-form textarea {
	        resize: vertical;
	    }
	    .bs-example {
	    	margin: 20px;
	    }



	    .form-inline {
	        display: inline-block;
	    }
		.navbar-header.col {
			padding: 0 !important;
		}	
		.navbar {
			font-size: 14px;
			background: #fff;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1px solid #d6d6d6;
			box-shadow: 0 0 4px rgba(0,0,0,.1);	
			font-family: 'Open Sans', sans-serif;	
		}
		.navbar .navbar-brand {
			color: #555;
			padding-left: 0;
			font-size: 20px;
			padding-right: 50px;
			font-family: 'Raleway', sans-serif;
			text-transform: uppercase;
		}
		.navbar .navbar-brand b {
			font-weight: bold;
			color: #f04f01;
		}
		.navbar ul.nav li {
			font-size: 96%;
			font-weight: bold;		
			text-transform: uppercase;
		}
		.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
			color: #f04f01 !important;
			background: transparent !important;
		}
		.search-box {
	        position: relative;
	    }
		.search-box input.form-control, .search-box .btn {
			font-size: 14px;
			border-radius: 2px !important;
		}
		.search-box .input-group-btn {
			padding-left: 4px;		
		}
		.search-box input.form-control:focus {
			border-color: #f04f01;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.search-box .btn-primary, .search-box .btn-primary:active {
			font-weight: bold;
			background: #f04f01;
			border-color: #f04f01;
			text-transform: uppercase;
			min-width: 90px;
		}
		.search-box .btn-primary:focus {
			outline: none;
			background: #eb4e01;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.search-box .btn span {
			transform: scale(0.9);
			display: inline-block;
		}
		.navbar .nav-item i {
			font-size: 18px;
		}
		.navbar .dropdown-item i {
			font-size: 16px;
			min-width: 22px;
		}
		.navbar .nav-item.open > a {
			background: none !important;
		}
		.navbar .dropdown-menu {
			border-radius: 1px;
			border-color: #e5e5e5;
			box-shadow: 0 2px 8px rgba(0,0,0,.05);
		}
		.navbar .dropdown-menu li a {
			color: #777;
			padding: 8px 20px;
			line-height: normal;
			font-size: 14px;
		}
		.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
			color: #333;
		}
		.navbar .navbar-form {
			border: none;
		}
		@media (min-width: 992px){
			.form-inline .input-group .form-control {
				width: 225px;			
			}
		}
		@media (max-width: 992px){
			.form-inline {
				display: block;
			}
		}
	</style>
</head>

<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">Keystone<b>Bank</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About</a></li>			
			<!-- <li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Web Design</a></li>
					<li><a href="#" class="dropdown-item">Web Development</a></li>
					<li><a href="#" class="dropdown-item">Graphic Design</a></li>
					<li><a href="#" class="dropdown-item">Digital Marketing</a></li>
				</ul>
			</li> -->
			<li class="nav-item"><a href="index.php" class="nav-link">Login</a></li>
			<li class="nav-item active"><a href="customer_contact.php" class="nav-link">Contact</a></li>
			<li class="nav-item"><a href="sIndex.php" class="nav-link">Staff Login</a></li>
		</ul>
		<form class="navbar-form form-inline navbar-right ml-auto">
			<div class="input-group search-box">
				<input type="text" class="form-control">
				<span class="input-group-btn">
					<button type="button" class="btn btn-primary"><span>Search</span></button>
				</span>
			</div>
		</form>		
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-auto">
			<div class="contact-form">
				<h1>Get in Touch</h1>
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" id="inputName" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Subject</label>
						<input type="text" class="form-control" id="inputSubject" required>
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea class="form-control" id="inputMessage" rows="5" required></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>                            