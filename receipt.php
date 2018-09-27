<?php
	require 'includes/require.php';
	include 'admin/fpdf/fpdf.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id']; 
		ob_start();
	$i = 1;
	$total = 0;
	$sub_total = 0;
	$grand_total = 0;
	$itemQuantity = 0;
	$x = 1;
	$tax = 5;

	$get = $con->query("SELECT * FROM transactions WHERE `meter`= '$id' ");
	$rows = mysqli_num_rows($get);
	$cus = mysqli_fetch_assoc($get);
    if($rows <= 0) {
      header("Location: cart.php");
    }

	$date = date("d-m-Y");
	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();
	$pdf->SetFont("Arial","B","14");


			$cust_details = $con->query("SELECT * FROM member WHERE `meter` = {$id} LIMIT 1");
			$customer = mysqli_fetch_assoc($cust_details);
			//DUMMY CELLS TO CREATE A PADDING FROM THE TOP
			$pdf->Cell(189,10,'',0,1);
			$pdf->Cell(130,5,"Water Trust",0,0);
			$pdf->Cell(59,5,"Invoice",0,1);//End of line

			//SET FONT TO ARIAL, REGULAR, 12PT
			$pdf->SetFont("Arial",'',12);

			$pdf->Cell(130, 5, 'Ngombe zambezi Road, plot No 332/1',0,0);
			$pdf->Cell(59, 5, '',0,1);

			$pdf->Cell(130, 5, 'Lusaka, Zambia, 10101',0,0);
			$pdf->Cell(25, 5, 'Date',0,0);
			$pdf->Cell(34, 5, ': '.$date, 0,1);

			$pdf->Cell(130, 5, 'Phone: +260972024091',0,0);
			$pdf->Cell(25, 5, 'Invoice ID     :',0,0);
			$pdf->Cell(34, 5, '  '.$cus['transaction_id'],0,1);

			$pdf->Cell(130, 5, 'Email: waterbills@info.com',0,0);
			$pdf->Cell(25, 5, 'Customer ID : ',0,0);
			$pdf->Cell(34, 5, '  '.$customer['id'],0,1);

			//DUMMY VERTICAL CELL AS A VERTICAL SPACER
			$pdf->Cell(189, 10, '',0,1);
			//SHIPPING DETAILS
			$pdf->SetFont("Arial","B","12");
			$pdf->Cell(100, 10, "Customer Details:",0,1);

			$pdf->SetFont("Arial","","12");
			//Customer details
			$pdf->Cell(50,5,"Customer Name:",0,0);
			$pdf->Cell(89,5,$customer['first_name'].' '.$customer['last_name'],0,1);
			$pdf->Cell(50,5,"Contact Number:",0,0);
			$pdf->Cell(89,5,$customer['phone'],0,1);
			$pdf->Cell(50,5,"Email Address:",0,0);
			$pdf->Cell(89,5,$customer['email'],0,1);

			$pdf->Cell(50,5,"Street Address:",0,0);
			$pdf->Cell(89,5,$customer['display_name'],0,1);


			$pdf->Cell(189,5,'',0,1);

			$pdf->Cell(189,5,'',0,1);
			$pdf->SetFont("Arial","B","12");
			$pdf->Cell(5, 5, '#',1,0);
			$pdf->Cell(95, 5, 'Description',1,0);
			$pdf->Cell(30, 5, '       QTY',1,0);
			$pdf->Cell(59, 5, '               Price(K)',1,1);

			$pdf->SetFont("Arial",'',12);
		

	
					$grand_total = $tax + $sub_total;
					$pdf->Cell(5,5,$x,1,0);
					$pdf->Cell(95, 5, 'Water Subscrition',1,0,'C');
					$pdf->Cell(30, 5, '1 Month'.'',1,0,'C');
					$pdf->Cell(59, 5, $cus['paid_amount'].'',1,1,'C');
					$x++;
	
		//TAX CHARGE
		//$pdf->Cell(189, 10, '',0,1); //DUMMY CELL
		
		$pdf->Cell(189, 5, '',0,1);
		$pdf->SetFont("Arial","B",12);
		$pdf->Cell(100,5, '',0,0);
		$pdf->Cell(30, 5, 'VAT @ 5.0%',1,0);
		$pdf->Cell(59, 5, '              '.$tax.'',1,1);

		//TOTAL PRICE
		//$pdf->Cell(189, 10, '',0,1);
		$pdf->SetFont("Arial","B",12);
		$pdf->Cell(100, 5, '',0,0);
		$pdf->Cell(30, 5, 'Total Price',1,0);
		$pdf->Cell(59, 5, '             '.$grand_total.'',1,1);

	



//SHOW PDF FILE
$pdf->Output();
ob_end_flush();
	}
	

else {
	header("Location: index.php");
}
?>