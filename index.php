<!DOCTYPE html>
<html lang="en">
<head>
  <title>LTS Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
  <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
  <script type="text/javascript" src="assets/user_js/registration.js"></script>
</head>
<body>
  
<div class="container">
  <div class="row">
     <form id="myForm">
	    Name : <input type="text" name="name" id="name" >
		Email : <input type="email" name="email" id="email">
		Phone : <input type="number" name="phone" id="phone">
		Password : <input type="password" name="password" id="password">
		Gender : <select name="gender" id="gender">
		             <option value="">Choose</option>
		             <option value="Male">Male</option>
					 <option value="Female">Female</option>
					 <option value="Other">Other</option>
		         </select>
		<input type="submit" value="Save" id="submit-button">
	 </form>
  </div>
</div>

<div class="container">
  <div class="row">
     <table class="table table-bordered table-dark" id="myDatatable">
		  <thead>
			<tr>
			  <th scope="col">ID</th>
			  <th scope="col">Name</th>
			  <th scope="col">Email</th>
			  <th scope="col">Phone</th>
			  <th scope="col">Password</th>
			  <th scope="col">Gender</th>
			  <th scope="col">Status</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			 
		  </tbody>
		</table>
  </div>
</div>

</body>
</html>