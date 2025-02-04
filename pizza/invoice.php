<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaHub - Invoice</title>

    <link rel="icon" href="images/icon.png" />
    
    <style type="text/css">
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: Arial, sans-serif;
        }

        .invoice-box table{
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td{
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2)
        {
            text-align: right;
        }

        .invoice-box table tr.top table td
        {
            padding-bottom: 20px;
        }

        .invoice-box table tr.information table td
        {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td
        {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td
        {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td
        {
            border-bottom: 1px solid #eee;
        }

        @media only screen and (max-width: 600px)
        {
            .invoice-box table tr.top table td
            {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td
            {
                width: 100%;
                display: block;
                text-align: center;
            }
            
        }

    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            <img src="images/icon.png" style="width: 45px;">Pizza Hub</a>
                            </td>
                            <td>
                                Invoice : 01 <br>
                                Created: March 17, 2023 <br>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                PizzaHub, Kottawa <br>
                                Phone: +94-70-453-6997
                            </td>
                            <td>
                            Opening Hours: 10.00 AM to 10.00 PM <br>
                                Email: Pizzahub@gmail.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                <td>
                    Check #
                </td>
            </tr>
            <tr class="details">
                <td>Cash on Delivery</td>
                <td>Rs.1900.00</td>
            </tr>

            <tr class="heading">
                <td>Item</td>
                <td>Price</td>
            </tr>

            <tr class="item">
                <td>Devilled Mackere</td>
                <td>Rs.900.00</td>
            </tr>

            <tr class="item">
                <td>Sausage Delight</td>
                <td>Rs.900.00</td>
            </tr>

            <tr class="item">
                <td>Super Supreme</td>
                <td>Rs.900.00</td>
            </tr>
        </table>
    </div>
</body>

</html>

?>