<html>
	<head>
		<title> create	</title>
		<style>
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
	</head>
	<body>
		<div class="main-frame">
			<div class="link">
				<a href="<?php echo e('create'); ?> ">ADD INFORMATION</a> | <a href=" <?php echo e('listing page'); ?> ">LISTING PAGE </a>
			</div>
			<div class="content-outer-frame">
			<form class = "input content-frame " action=" /show.blade.php" method="POST">
			
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">	
				<label for="name">NAME*</label></br>
				<input type="text" style="font-size:25px;width=55px;" name="name"><br>
				<label for="province" >PROVINCE*</label></br>
				<select style="font-size:15px;" class="" name="province">
					<option value=" "></option>
					<option value="Ontario">Ontario</option>
					<option value="Quebec">Quebec</option>
					<option value="Nova Scotia">Nova Scotia</option>
					<option value="New Brunswick">New Brunswick</option>
					<option value="Manitoba">Manitoba</option>
					<option value="British Columbia">British Columbia</option>
					<option value="Prince Edward Island">Prince Edward Island</option>
					<option value="Saskatchewan">Saskatchewan</option>
					<option value="Alberta">Alberta</option>
					<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
					<option value="Northwest Territories">Northwest Territories</option>
					<option value="Yukon">Yukon</option>
					<option value="Nunavut">Nunavut</option>
				</select></br>
				<div class="column">
					<label for="telephone">TELEPHONE*</label></br>
					<input type="number"  name="tele"></br>
					<label for="postal">POSTAL CODE*</label></br>
					<input type="text" name="postal"></br>
				</div></br>
				<label for="salary">SALARY*</label></br>
				<input type="number"  name="salary" ></br></br>
				<button class="button" name="save" >save</button>
				
			</form>
		</div>
		</div>
	</body>
</html>



