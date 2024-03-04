<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    include('../../admin/db/connection.php');
    require('../../library/pdf/fpdf.php');
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';


    $id_user = $_SESSION['id'];
    $name = $_POST['name'];
    $post_code = $_POST['post_code'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $total = $_POST['total'];
    $no_invoice = mt_rand(100000000000, 999999999999);
    $tgl = date('Y-m-d H:i:s');

    $insert = "INSERT INTO `transaction` (`no_invoice`, `customer_id`, `name`, `address`, `post_code`, `phone`, `country`, `total`, `date_create`) VALUES ( '$no_invoice' ,'$id_user', '$name', '$address', '$post_code', '$phone', '$country',  '$total', '$tgl')";
    $resultinsert = mysqli_query($conn, $insert);


    $selectidtrans = "SELECT * FROM transaction WHERE no_invoice = '$no_invoice'";
    $resultidtrans = mysqli_query($conn, $selectidtrans);
    $datatrans = mysqli_fetch_assoc($resultidtrans);

    $transactionid = $datatrans['transaction_id'];


    $cart = "SELECT * FROM cart WHERE customer_id = '$id_user'";
    $result = mysqli_query($conn, $cart);
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $qty = $row['qty'];
        $price = $row['price'];
        $subtotal = $row['subtotal'];   

        $insertcart = "INSERT INTO transaction_detail (`transaction_id`, `product_id`, `price`, `qty`, `subtotal`) VALUES ('$transactionid', '$product_id',  '$price', '$qty', '$subtotal')";
        $resultinsertcart = mysqli_query($conn, $insertcart);

    }

    $delete = "DELETE FROM cart WHERE customer_id = '$id_user'";
    $resultdelete = mysqli_query($conn, $delete);

    if($resultinsert && $resultinsertcart && $resultdelete) {
       
 
        // intance object dan memberikan pengaturan halaman PDF
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(71 ,10,'',0,0);
        $pdf->Cell(40 ,5,'Invoice',0,0,'C');
        $pdf->Cell(59 ,10,'',0,1);

        $pdf->SetFont('Arial','B',13);
        $pdf->Cell(71 ,5,'Customer',0,0);
        $pdf->Cell(59 ,5,'',0,0);
        $pdf->Cell(59 ,5,'Details',0,1);

        $pdf->SetFont('Arial','',10);

        $pdf->Cell(130 ,5,$address,0,0);
        $pdf->Cell(25 ,5,'Name:',0,0);
        $pdf->Cell(34 ,5,$name,0,1);

        $pdf->Cell(130 ,5,$country.' '.$post_code,0,0);
        $pdf->Cell(25 ,5,'Invoice Date:',0,0);
        $pdf->Cell(34 ,5,date('d F Y', strtotime($tgl)),0,1);
        
        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,5,'Invoice No:',0,0);
        $pdf->Cell(34 ,5,$no_invoice,0,1);


        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(130 ,5,'Bill To',0,0);
        $pdf->Cell(59 ,5,'',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(189 ,10,'',0,1);



        $pdf->Cell(50 ,10,'',0,1);

        $pdf->SetFont('Arial','B',10);
        /*Heading Of the table*/
        $pdf->Cell(10 ,6,'Sl',1,0,'C');
        $pdf->Cell(80 ,6,'Product',1,0,'C');
        $pdf->Cell(23 ,6,'Qty',1,0,'C');
        $pdf->Cell(30 ,6,'Unit Price',1,0,'C');
        $pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/
        /*Heading Of the table end*/
        $pdf->SetFont('Arial','',10);
        $sqldetail = "SELECT * FROM transaction_detail inner join product on transaction_detail.product_id = product.id WHERE transaction_id = '$transactionid'";
        $resultdetail = mysqli_query($conn, $sqldetail);
        $i=1;
        $texthead = 'Product           Qty          Price          Subtotal%0a';
        $detailtext = '';
        while ($row = mysqli_fetch_assoc($resultdetail)) {
            $detailtext .= $row['title'].'           '.$row['qty'].'           '.$row['price'].'           '.$row['subtotal'].'%0a';
            $pdf->Cell(10 ,6,$i,1,0);
            $pdf->Cell(80 ,6,$row['title'],1,0);
            $pdf->Cell(23 ,6,$row['qty'],1,0,'R');
            $pdf->Cell(30 ,6,$row['price'],1,0,'R');
            $pdf->Cell(25 ,6,$row['subtotal'],1,1,'R');
            $i++;
        }
           
        $pdf->Cell(118 ,6,'',0,0);
        $pdf->Cell(45 ,6,$total,1,1,'R');


        $pdf->Output('F', '../../file/invoice-'.$no_invoice.'.pdf');

        $mail = new PHPMailer(true);

        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "inadarmayanti94@gmail.com";
        $mail->Password   = "easnisgrgdawunko";
        $mail->IsHTML(true);
        $mail->AddAddress("setioadinataarianto21@gmail.com", "recipient-name");
        $mail->SetFrom("inadarmayanti94@gmail.com", "from-name");
        // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = "No Invoice : ".$no_invoice;
        $mail->AddAttachment('../../file/invoice-'.$no_invoice.'.pdf', 'invoice-'.$no_invoice.'.pdf');
        $content = "<b>Transaction Success.</b>";
        $mail->MsgHTML($content); 

        $mail->Send();

        $sqlsetting = "select * from setting";
        $querysetting = mysqli_query($conn, $sqlsetting);
        $rowsetting = mysqli_fetch_assoc($querysetting);
        $phone = $rowsetting['phone'];
        
        header('location:https://api.whatsapp.com/send?phone='.$phone.'&text= Transaction Invoice '.$no_invoice.' Total : '.$total.'%0a Details : %0a'.$texthead.$detailtext);


        
    }else{
        header('location:../../?page=transaction&stt=error&msg=Transaction Error');
    }
    
?>