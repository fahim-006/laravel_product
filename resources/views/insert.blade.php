<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Let's code</title>
  </head>
  <body>
   

   <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
        <form action="{{route('InsertProduct')}}" method="get">
              @csrf <!-- {{ csrf_field() }} -->
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Product Code</label>
              <input type="text" class="form-control" placeholder="Product Code" name="Product_Code" id="Product_Code">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Product Name</label>
              <input type="text" class="form-control" placeholder="Product Name" name="Product_Name" id="Product_Name">
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Unit</label>
              <input type="text" class="form-control" placeholder="Unit" name="Unit" id="Unit" >
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Quantity</label>
              <input type="number" class="form-control" placeholder="Quantity" name="Quantity" 
              id="Quantity" >
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Price</label>
              <input type="number" class="form-control" placeholder="Price" name="Price" 
              id="Price" >
            </div>
          </div>

         
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton" name="submit">Send</button>
        </form>
      </div>
    </div>
  </div>

  <hr>


  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>