<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  </head>
  <body>
    <div class="container">
          @extends('search')
          
      <br/>
     <a href="{{url('insert')}}"><button style="float: right; margin: 20px" type="button" class="btn btn-success">Insert Data</button></a>  
      <div class="panel panel-default">
         <?php
        $sub_total=0;
      ?>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Product Code</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Item Total</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($lines as $row)
          <tr>
            <td>{{$row->Product_Code}}</td>
            <td>{{$row->Product_Name}}</td>
            <td>{{$row->Product_Unit}}</td>
            <td>{{$row->Product_Quantity}}</td>
            <td>{{$row->Price}}</td>
             @php
                $Total = $row->Product_Quantity*$row->Price;
                $sub_total+=$Total;
            @endphp
            <td>{{$Total}} BDT</td>
        </tr>
        @endforeach

        <!--Sub Total-->
         <tr>
            <td colspan="4"></td>
            <td >Sub Total</td>
            <td>{{$sub_total}} BDT</td>
        </tr>
        <!--Tax(15%)-->
        @php
            $tax = ceil(($sub_total*15)/100);
        @endphp
         <tr>
            <td colspan="4"></td>
            <td>Tax(15%)</td>
            <td>{{$tax}} BDT</td>
    
        </tr>

        <!--Discount-->
         <tr>
            <td colspan="4"></td>
            <td>Discount</td>
            <td>100 BDT</td>
          
        </tr>

        <!--Total-->
        @php
            $Total = $sub_total+$tax-100;
        @endphp
         <tr>
            <td colspan="4"></td>
            <td>Total</td>
            <td>{{$Total}}</td>
        </tr>
        </table>

          </div>
        </div>
       
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'{{ route("tabledit.action") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'Product_Code'],
      editable:[[3, 'Product_Quantity'], [4, 'Price']]
    },

    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.Product_Code).remove();
        location.reload();
      }
       if(data.action == 'edit'){
        location.reload();
       }

    }
  });

});  
</script>