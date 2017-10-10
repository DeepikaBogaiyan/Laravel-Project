<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>
		<style type="text/css">
			.main-frame{
					background-color:white;
					width:800px;
					margin-left: 200px;
					align: center;
					height: 100px;
			}
		
			.link{
					background-color:white;
					width:928px;
					height:40px;
					text-align:center;
			}
		
			.content-outer-frame{
					background-color: #e0e0e0;
					width:800px;
					padding-top: 30px;
					padding-left: 130px;
					padding-bottom: 50px;
					align: center;
			}
			
			.index-heading-frame{
				background-color :black;
				color: white;
			}
				.index-content-frame{
					background-color:white;
					color:black;
					 border-bottom: 6px solid #e5e5e5;
				}
			.content-frame{
					background-color:white;
					width:550px;
					height:250px;
					padding: 25px;
			}
			label{
					float: left;
					color: black;
					font-size: 12px;
					font-style: small;
					font-family: verdana;
			}
			
			input{
				line-height:100%;
			}
			
			.dropbtn {
				background-color: #4CAF50;
				color: white;
				padding: 16px;
				font-size: 16px;
				border: none;
				cursor: pointer;
			}

			.dropdown {
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}

			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}
			
			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
				display: block;
			}

			.dropdown:hover .dropbtn {
				background-color: #3e8e41;
			}
			
			.column{
				-webkit-column-count: 2; /* Chrome, Safari, Opera */
				-moz-column-count: 2; /* Firefox */
				column-count: 2;
			}
			
			
			
			.button {
				background-color: #7B68EE; /* Blue */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				float: right;
				cursor: pointer;
			}
	
		</style>
	</body>
</html>