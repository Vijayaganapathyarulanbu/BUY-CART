<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<style>
* {
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Poppins', sans-serif;
}

body {
  background-size: cover;
}

.menu {
	height: 100vh;
  background-color: #121227;
}

#logo {
  color: #fff;
  font-size: 30px;
  letter-spacing: 4px;
  background-color: #000;
  padding: 15px;
}

.menu a {
  text-decoration: none;
  color: #fff;
  font-size: 10px;
  letter-spacing: 2px;
  display: list-item;
  padding: 20px;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  text-transform: uppercase;
}

.menu a:hover {
  background-color: red;
  color: #fff;
  transition: 0.6s ease;
  letter-spacing: 4px;
  text-transform: uppercase;
}

.container {
  margin-top: 50px;
}
.card {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
  background-color: skyblue;
  text-align: center;
  margin-bottom: 20px;
}

.card h1 {
  font-size: 30px;
  margin-bottom: 20px;
}

.card p {
  font-size: 20px;
  font-weight: bold;
}

</style>
	<title>AdminDashboard</title>
</head>
<body>
	<div class="container-fluid">
     <div class="row">
       <div class="col-3 menu">
     	    <h2 id ="logo" style= "margin-top:6%" >Admin Panel</h2>
		        <a href="{{ url('dash') }}">Dashboard</a>
		        <a href="{{ url('orders.order') }}">User Orders</a>
		        <a href="{{ url('/product.product') }}">Product List</a>
		        <a href="{{ url('/product.proform') }}">add Product</a>
            <br><br><br>
            <img src="https://cavinkare.com/img/2017/03/logo.png" >
       </div>


       <div class="col-9" style = "margin-top:10%">
         <div class="row">
           <div class="col-lg-3 col-sm-6">
             <div class="card">
               <h1>Product</h1>
               <p>{{$product}}</p>
             </div>
           </div>
           <div class="col-lg-3 col-sm-6">
             <div class="card">
               <h1>Order</h1>
               <p>{{$order}}</p>
             </div>
           </div>
           <div class="col-lg-3 col-sm-6">
             <div class="card">
               <h1>User</h1>
               <p>{{$User}}</p>
             </div>
           </div>
           <div class="col-lg-3 col-sm-6">
             <div class="card">
               <h1>Admin</h1>
               <p>{{$admin}}</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</body>
</html>
