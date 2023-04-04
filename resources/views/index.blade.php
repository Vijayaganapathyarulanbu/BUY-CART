<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{url('public/images/shopping_cart.jpg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous' rel="stylesheet"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <title>Home Page</title>
    <style>
      body{
        font-family:Arial, Helvetica, sans-serif;
      }
      h1{
        font-size: medium;
        font-weight: bold;
        color:grey;
      }
      ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      }
      nav{
        background-attachment: fixed;
        background-color: orangered;
      }
      header{

        height: 120px;
        border: 1px solid;
        padding: 10px;
        box-shadow: 20px 20px 50px #f44336;
      }
      img{
        background-size:20px;
      }
     ul li a{
        float: left;
      }
      a{
        margin-left: 10px;
        margin-top: 20px;
        width: 20%;
      }

     li  a{
        display: block;
        color: black;
        justify-content:center;
      }
      .navbar-brand{
        margin-bottom: 10px;
        margin: 0;
      }
      .container{
        margin-top:5px;
      }
      #icon{
        display: flex;
        height: 120px;
      }
      .button{
        background-color: black;
        color: white;
        border-radius: 5px;
        padding: 5px;
      }
      

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



        li a {
            display: block;
            color: black;
            justify-content: center;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        } 
    </style>
</head>
<body>
    <header style="height:80px;">
        <nav class="fixed-top nav-pills">
            <img src="{{ asset('images/logo.png') }}" class="logo" style="box-shadow: 20px 20px 20px 10px rgba(128, 128, 128, 0.493);">

            <div>
                <div class="container-fluid">
                    <ul  class="nav fixed-top" style="padding-left: 77%; padding-top: 10px;">
        <li class="nav-item">
            <a class="nav-link mr-5 button" href="{{ url('/login') }}" style="color:white">LOGIN</a>
        </li>
      <li class="nav-item">
        <a class="nav-link mr-5 button" href="{{ url('/dash') }}" style="color:white">ADMIN</a>
      </li>
       </ul>
                </div>
            </div>
        </nav>



        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- carousel code goes here -->

            <div id="demo" class="carousel slide container-fluid" data-ride="carousel" style="width:100%;">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" style="background-color:black;" data-slide-to="0" class="active"></li>
                    <li data-target="#demo"="background-color:black;" data-slide-to="1"></li>
                    <li data-target="#demo" style="background-color:black;" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="container-fluid">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.cavinkart.com/media/banneruploader/tmp/banner_image_path/CavinKart_Sale_1.jpg" alt="Los Angeles" style="background-size: cover; margin:0; margin-top: 8%; width:100%; height: 600px; margin-left: 4px;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.cavinkart.com/media/banneruploader/tmp/banner_image_path/Meera_Hair_Mask_for_Intense_hair_conditioning_2.jpg" alt="Chicago" style="background-size: cover; margin-top: 8%; width:100%; height: 600px; margin-left: 10px;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.cavinkart.com/media/catalog/tmp/category/ABC_Products_1920_400_2.jpg" alt="New York" style="background-size: cover;  margin-top: 8%; width:100%; height: 600px; margin-left: 10px;">
                        </div>

                    </div>
                </div>
                <!-- Left and right controls -->

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color:black;"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon" style="background-color:black;"></span>
                </a>
            </div>
    </header>


    <div class="container">
        <div class="row" style="margin-top:70%">
            @foreach ($product as $item)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/assets/images/' . $item['image']) }}" alt="{{ $item['name'] }}" style="width:100%; height:220px;">
                    <div class="card-body">
                        <h1 class="card-title">{{ $item['name'] }}</h1>
                        <h3>Price : {{ $item['price'] }}</h3>
                        <h4>Details: {{ $item['description'] }}</h4>
                        <h4>category: {{ $item['category'] }}</h4>
                        <a href="{{ 'orderform/' . $item['id'] }}"><button class="btn btn-dark product">Buy
                                Now</a></button>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  

    <footer style="background-color:rgb(190, 222, 252); color:white; height:30px;  text-align:center; ">
        CopyRights @ 2023 Buy cart
    </footer>


</body>

</html>
