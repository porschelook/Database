<html>
 <?php require 'class/BillMgnt.php';
 require "class/RoomMgnt.php";
 $billid=$_GET['bnum'];
 $bill = BillMgnt::getBillByBillID($billid);
 $billno = BillMgnt::getBillByBillID2($billid);

 $mem = BillMgnt::getMemByBillID($billno -> getRName());?>
    <head>
    <title>Simple invoice in PHP</title>
        <style type="text/css">
        body {
            font-family: Verdana;
        }

        div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:740pt;
        width:570pt;
        }

        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }

        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }

        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
        }

        .text-left {
            text-align:left;
        }

        .text-center {
            text-align:center;
        }

        .text-right {
            text-align:right;
        }

        </style>
    </head>

    <body>
    <div class="invoice">
        <div class="company-address">
            Bill NO :: <?php echo $billid?>
            <br />
            Room ::	<?php echo $billno -> getRName()?>
            <br />

        </div>

        <div class="invoice-details">

            <br />
            Date: 24/01/2012
        </div>

        <div class="customer-address">
            To:
            <br />
            <?php echo $mem -> getFname();?>  <?php echo $mem->getLname();?>
            <br />
            <?php echo $mem -> getPhone();?>
            <br />
            <?php echo $mem -> getEmail();?>
            <br />
        </div>

        <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>
                <tr>
                    <th width=250>รายการ(items)</th>
                    <th width=80>จำนวน(Unit)</th>
                    <th width=100>ราคา/หน่วย(Price/Unit)</th>
                    <th width=100>จำนวนเงิน(Amount)</th>
                </tr>

            <?php


            //echo $billno -> getbillnum();

            $roomdetail = RoomMgnt::getRoombyRoomNumber($mem -> getrID());
            $total = 0;
            $vat = 1;
            $elec=$bill->getelec();
            $water=$bill->getwater();
            $personal=$bill->getpersonal();

            $articles = array(
            		array("ค่าไฟฟ้า","ค่าน้ำ","ค่าเช่าห้อง","ค่าบริการส่วนกลาง"),
            		array(5,5,1,1),
            		array($elec,$water,5900,$personal)
            );


                    $description = $articles[0][0];
                    $amount = $articles[1][0];
                    $unit_price = number_format( $articles[2][0], 2);
                    $total_price = number_format( $amount * $unit_price, 2);

                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>$unit_price</td>");
                    echo("<td class='text-right'>$total_price</td>");
                    echo("</tr>");

                    $description = $articles[0][1];
                    $amount = $articles[1][1];
                    $unit_price = number_format( $articles[2][1], 2);
                    $total_price = number_format( $amount * $unit_price, 2);
                    //$total += $total_price;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>$unit_price</td>");
                    echo("<td class='text-right'>$total_price</td>");
                    echo("</tr>");

                    $description = $articles[0][2];
                    $amount = $articles[1][2];
                    $unit_price = number_format( $articles[2][2], 2);
                    $total_price = number_format( $roomdetail -> getRoomPrice(), 2);
                    //$total += $total_price;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>$unit_price</td>");
                    echo("<td class='text-right'>$total_price</td>");
                    echo("</tr>");

                    $description = $articles[0][3];
                    $amount = $articles[1][3];
                    $unit_price = number_format( $articles[2][3], 2);
                    $total_price = number_format( $amount * $unit_price, 2);
                   // $total += $total_price;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>$unit_price</td>");
                    echo("<td class='text-right'>$total_price</td>");
                    echo("</tr>");
                    $res = ($elec*5)+($water*5)+$roomdetail -> getRoomPrice()+$personal;

            echo("<tr>");
            echo("<td colspan='3' class='text-right'>Sub total</td>");
            echo("<td class='text-right'>" . number_format($res,2) . "</td>");
            echo("</tr>");

            echo("<tr>");
            echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
            echo("<td class='text-right'><b>" . number_format($res,2) . "</b></td>");
            echo("</tr>");
            ?>
            </table>

        </div>

    </body>

</html>
