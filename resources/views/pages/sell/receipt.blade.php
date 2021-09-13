<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        #invoice-POS {
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
            padding: 2mm;
            margin: 0 auto;
            width: 44mm;
            background: #FFF;
        }

        #invoice-POS ::selection {
            background: #f31544;
            color: #FFF;
        }

        #invoice-POS ::moz-selection {
            background: #f31544;
            color: #FFF;
        }

        #invoice-POS h1 {
            font-size: 1.5em;
            color: #222;
        }

        #invoice-POS h2 {
            font-size: 0.9em;
        }

        #invoice-POS h3 {
            font-size: 1.2em;
            font-weight: 300;
            line-height: 2em;
        }

        #invoice-POS p {
            font-size: 0.7em;
            color: #666;
            line-height: 1.2em;
        }

        #invoice-POS #top,
        #invoice-POS #mid,
        #invoice-POS #bot {
            /* Targets all id with 'col-' */
            border-bottom: 1px solid #EEE;
        }

        #invoice-POS #top {
            min-height: 100px;
        }

        #invoice-POS #mid {
            min-height: 80px;
        }

        #invoice-POS #bot {
            min-height: 50px;
        }

        #invoice-POS #top .logo {
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
            background-size: 60px 60px;
        }

        #invoice-POS .clientlogo {
            float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
            background-size: 60px 60px;
            border-radius: 50px;
        }

        #invoice-POS .info {
            display: block;
            margin-left: 0;
        }

        #invoice-POS .title {
            float: right;
        }

        #invoice-POS .title p {
            text-align: right;
        }

        #invoice-POS table {
            width: 100%;
            border-collapse: collapse;
        }

        #invoice-POS .tabletitle {
            font-size: 0.5em;
            background: #EEE;
        }

        #invoice-POS .service {
            border-bottom: 1px solid #EEE;
        }

        #invoice-POS .item {
            width: 24mm;
        }

        #invoice-POS .itemtext {
            font-size: 0.5em;
        }

        #invoice-POS #legalcopy {
            margin-top: 5mm;
        }

    </style>
</head>

<body>

    <div id="invoice-POS">

        <center id="top">
            <div class="logo"></div>
            <div class="info">
                <h2>SBISTechs Inc</h2>
            </div>
            <!--End Info-->
        </center>
        <!--End InvoiceTop-->

        <div id="mid">
            <div class="info">
                <h2>Contact Info</h2>
                <p>
                    Address : street city, state 0000</br>
                    Email : JohnDoe@gmail.com</br>
                    Phone : 555-555-5555</br>
                    Invoiced By : {{Auth::user()->name}}</br>
                </p>
            </div>
        </div>
        <!--End Invoice Mid-->

        <div id="bot">

            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item">
                            <h2>Item</h2>
                        </td>
                        <td class="Hours">
                            <h2>Price</h2>
                        </td>
                        <td class="Hours">
                            <h2>Qty</h2>
                        </td>
                        <td class="Hours">
                            <h2>Dis...</h2>
                        </td>
                        <td class="Rate">
                            <h2>Sub Total</h2>
                        </td>
                    </tr>

                    @if ($sell->sellDetails)

                    @foreach ($sell->sellDetails as $sellDetail)
                    <tr class="service">
                        <td class="tableitem">
                            <p class="itemtext">{{ $sellDetail->product->name}} {{ $sellDetail->productUnit->name}}</p>
                        </td>
                        <td class="tableitem">
                            <p class="itemtext">{{ $sellDetail->product_unit_max_retail_price}}</p>
                        </td>
                        <td class="tableitem">
                            <p class="itemtext">{{ $sellDetail->order_quantity}}</p>
                        </td>
                        <td class="tableitem">
                            <p class="itemtext">0%</p>
                        </td>
                        <td class="tableitem">
                            <p class="itemtext">{{$sellDetail->sub_total_product_unit_max_retail_price}}</p>
                        </td>
                    </tr>
                    @endforeach
                        
                    @endif

                   

                 


                

                    <tr class="tabletitle">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="Rate">
                            <h2>Total</h2>
                        </td>
                        <td class="payment">
                            <h2>{{$sell->total_order_cost}}</h2>
                        </td>
                    </tr>
                    <tr class="tabletitle">
                        
                        <td colspan="4" class="Rate">
                            <h2>Paid By</h2>
                        </td>
                        <td class="payment">
                            @if ($sell->payment_method == 1)
                                <i>Cash</i>
                            @else 
                            <i>Card/Mobile</i>

                            @endif
                        </td>
                    </tr>

                    @if ($sell->payment_method == 1)
                    <tr class="tabletitle">
                       
                        <td colspan="4" class="Rate">
                            <h2>Given Amount</h2>
                        </td>
                        <td class="payment">
                           
                            <i>{{$sell->given_amount}}</i>

                          
                        </td>
                    </tr>

                    <tr class="tabletitle">
                       
                        <td colspan="4" class="Rate">
                            <h2>Change Amount</h2>
                        </td>
                        <td class="payment">
                           
                            <i>{{$sell->change_amount}}</i>

                          
                        </td>
                    </tr>
                        
                    @endif

                </table>
            </div>
            <!--End Table-->
            <div id="mid">
                <div class="info">
                  <h2>Customer Info</h2>
                  @if ($sell->customer)
                    <p> 
                        Name   : Mr. Farid</br>
                        Address : street city, state 0000</br>
                        Email   : JohnDoe@gmail.com</br>
                        Phone   : 555-555-5555</br>
                        Earned Reward: 22
                        Total Reward: 520
                    </p>
                    @else
                <p>Not Registered</p>
                  @endif
               
                </div>
            </div><!--End Invoice Mid-->

            <div id="legalcopy">
                <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31
                    days; please process this invoice within that time. There will be a 5% interest charge per month on
                    late invoices.
                </p>
            </div>

        </div>
        <!--End InvoiceBot-->

       
    </div>
    <!--End Invoice-->

</body>

</html>
