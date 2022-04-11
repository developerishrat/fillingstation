
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <title> Invoice </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

     <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
 <!-- <img src="images/logo.png" width="50px" height="50px"> -->
 <div class="container">
     <center><h2>Online Filling Station Management System</h2></center>


 <!-- Simple Invoice - START -->
 <div class="container">
     <div class="row">
         <div class="col-xs-12">
             <div class="text-center">
                 <h3>Invoice for Order</h3>
             </div>
             <hr>
             <div class="row">
                 <div class="col-xs-12 col-md-9 col-lg-9 pull-left">
                     <div class="panel panel-default height">
                         <div class="panel-heading">Billing Details</div>
                         <div class="panel-body">
                            @foreach(App\Models\Order_billing_details::where('order_id',$orders->id)->get() as $billingdata)

                            <label>Customer Name :  {{ $billingdata->name }}</label>
                            <strong></strong><br>
                            <label>Customer Address :  {{ $billingdata->address }}</label>
                            <strong></strong><br>
                            <label>Customer Mobile : {{ $billingdata->phone }}</label>
                            <strong></strong><br>
                            <label>Customer Email :  {{ $billingdata->email }}</label>
                            <strong></strong><br>

                            @endforeach
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h3 class="text-center"><strong>Order summary</strong></h3>
                 </div>
                 <div class="panel-body">
                     <div class="table-responsive">
                         <table class="table table-condensed" border=".5">
                             <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>

                                </tr>


                             </thead>
                             <tbody>
                                @foreach(App\Models\Order_fuel_details::where('order_id',$orders->id)->get() as $data)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->quantity }}</td>
                                </tr>
                                @endforeach



                             </tbody>
                         </table>


                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <style>
 .height {
     min-height: 200px;
 }

 .icon {
     font-size: 47px;
     color: #5CB85C;
 }

 .iconbig {
     font-size: 77px;
     color: #5CB85C;
 }

 .table > tbody > tr > .emptyrow {
     border-top: none;
 }

 .table > thead > tr > .emptyrow {
     border-bottom: none;
 }

 .table > tbody > tr > .highrow {
     border-top: 3px solid;
 }
 </style>

 <!-- Simple Invoice - END -->

 </div>

 </body>
 </html>























