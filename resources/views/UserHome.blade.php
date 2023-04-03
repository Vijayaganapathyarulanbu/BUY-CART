<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .item{
            margin-top:15%;
            border: 2px solid black;
            padding: 3%;
        }
    </style>
</head>
<body>
     
    <div class="container">
    <div class="row">
        <div class="col-4">  
        <div class="item">
        <h2>{{ $product->name }}</h2>
        <h3>Price : {{ $product->name }}</h3>
        <h4>Details: {{ $product->name }}</h4>
        <h4>category: {{ $product->price }}</h4>
        <br><br>
        
            <form action="{{ route('order') }}" method="POST">
            @csrf
                <label for="customer_name">Customer Name:</label>
                <input type="text" name="cust_name" id="customer_name"  >
                <label for="customer_addr">Address:</label>
                <input type="text" name="cust_addr" id="customer_Addr" required>
                <label for="cust_phone">PhoneNo:</label>
                <input type="number" name="cust_phone" id="cust_phone" required>
                <input type="hidden" name="product_name" value="{{ $product->name }}">
                <input type="hidden" name="product_price" value="{{ $product->price }}">
                <button type="submit">place order</button>
            </form>

       
        
        </div>  
        </div>
    </div>
    </div>
        
</table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
