<!DOCTYPE html>
<html>
  <head>
    <title>Order Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
      body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
      }

      .form-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 50px;
      }

      .form-group label {
        font-weight: bold;
      }

      .form-control:focus {
        border-color: #ffb400;
        box-shadow: 0 0 0 0.2rem rgba(255, 180, 0, 0.5);
      }

      .btn-primary {
        background-color: #ffb400;
        border-color: #ffb400;
      }

      .btn-primary:hover, .btn-primary:focus {
        background-color: #ffa000;
        border-color: #ffa000;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form-container">
            <h2 class="text-center mb-4">Order Form</h2>
            <form action="{{ route('order') }}" method="POST">
                @csrf
                <div class="item">
                    <img src="https://cavinkare.com/img/bfi_thumb/ebd5e4dc-b4d0-4852-9253-180e873b147e-large-w2z8x4m2864rtu0yzmmadc.jpg" width="90%">
<h2>{{ $product->name }}</h2>

                    <h3>Price : {{ $product->name }}</h3>
                    <h4>Details: {{ $product->name }}</h4>
                    <h4>category: {{ $product->price }}</h4>

                    <div class="form-group">
                        <label for="name">Customer Name:</label>
                        <input type="text" class="form-control" id="customer_name" name="cust_name" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="customer_Addr" name="cust_addr" rows="3" placeholder="Enter your address" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="cust_phone" name="cust_phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="cust_email" name="cust_email" placeholder="Enter your email" required>
                      </div>
                      <input type="hidden" name="product_name" value="{{ $product->name }}">
                      <input type="hidden" name="product_price" value="{{ $product->price }}">
                      <button type="submit"  class="btn btn-primary btn-block">Place Order</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script>
        function showOrderConfirmation() {
  const confirmationMessage = "Thank you for shopping with BuyCart! Your order has been confirmed. Have a nice day!";
  alert(confirmationMessage);
}

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
