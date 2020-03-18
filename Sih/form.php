<?php
include ('ind.php');
//A4 writeable horizontal = 189 mm
require('fpdf/fpdf.php');
 $pdf =new FPDF('p','mm','A4');
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',14);
 //Cell(width.height,border,end line,[align])
 $name = $_POST['studentName'];//document.getElementById('studentName').value;
 $Father =$_POST['fatherName'];
 $Mother=$_POST['motherName'];
 $category=$_POST['category'];
 $contact=$_POST['contactNo'] ;
 $altcontact= $_POST['altContactNo'];
 $email= $_POST['emailId'];
 $addr= $_POST['address'];
 $aadhar=$_POST['aadhar'];
 $DOB=$_POST['dob'];
 $sem=$_POST['sem'];
 $branch=$_POST['branch'];
 $rank=$_POST['air'] ;
 $tenthpercent= $_POST['tenP'];
 $twelfthpercent=$_POST['twelveP'];
 $gen=$_POST['gender'] ;
 $JeeRollNo=$_POST['roll'];


/*if(isset($_POST['gap_y']))
{
    $gap="Yes";
}
else{
    $gap="No";
}*/
 $gap=$_POST['gap'];
 $width1=40;
 $ht1=9;
 $width2=80;
 $ht2=9;

 $pdf->Image('logo.jpeg',10,10,189,30);
 $allowed=array('jpg','jpeg','png');
 //echo("Hello");
 if(isset($_FILES['photo']))
 {
     //echo("Success");
     $file=$_FILES['photo'];
     //print_r($file);
    $filename=$_FILES['photo']['name'];
    $fileTmpName=$_FILES['photo']['tmp_name'];
    $fileSize=$_FILES['photo']['size'];
    $fileError=$_FILES['photo']['error'];
    $fileType=$_FILES['photo']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/pictures/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,150,50,37.5,52.5);
            }
        }
    }
 }

 //Image('filename',x-pos,y-pos,width,ht)
 
 if(isset($_FILES['sign']))
 {
    $file=$_FILES['sign'];
    $filename=$_FILES['sign']['name'];
    $fileTmpName=$_FILES['sign']['tmp_name'];
    $fileSize=$_FILES['sign']['size'];
    $fileError=$_FILES['sign']['error'];
    $fileType=$_FILES['sign']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/signatures/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,140,110,60,20);
            }
        }
    }
 }

 $pdf->SetFont('Arial','B',12);
 $pdf->SetY(50);
 $pdf->Cell($width1,$ht1,'Enrolment No: ',0,0);
 $pdf->Cell($width2,$ht2,$roll,0,1);

 $pdf->Cell($width1,$ht1,'Name: ',0,0);
 $pdf->Cell($width2,$ht2,$name,0,1);

 $pdf->Cell($width1,$ht1,'Father\'s Name: ',0,0);
 $pdf->Cell($width2,$ht2,$Father,0,1);

 $pdf->Cell($width1,$ht1,'Mother\'s Name: ',0,0);
 $pdf->Cell($width2,$ht2,$Mother,0,1);

 $pdf->Cell($width1,$ht1,'Gender: ',0,0);
 $pdf->Cell($width2,$ht2,$gen,0,1); 

 $pdf->Cell($width1,$ht1,'Category: ',0,0);
 $pdf->Cell($width2,$ht2,$category,0,1);

 $pdf->Cell($width1,$ht1,'Contact: ',0,0);
 $pdf->Cell($width2,$ht2,$contact,0,1);

 $pdf->Cell($width1,$ht1,'Alternate contact: ',0,0);
 $pdf->Cell($width2,$ht2,$altcontact,0,1);

 $pdf->Cell($width1,$ht1,'Email: ',0,0);
 $pdf->Cell($width2,$ht2,$email,0,1);

 $pdf->Cell($width1,$ht1,'Address: ',0,0);
 $pdf->MultiCell($width2,$ht2,$addr,0,1);

 $pdf->Cell($width1,$ht1,'Aadhar: ',0,0);
 $pdf->Cell($width2,$ht2,$aadhar,0,1);

 $pdf->Cell($width1,$ht1,'Date of Birth: ',0,0);
 $pdf->Cell($width2,$ht2,$DOB,0,1);

 $pdf->Cell($width1,$ht1,'Sem: ',0,0);
 $pdf->Cell($width2,$ht2,$sem,0,1);

 $pdf->Cell($width1,$ht1,'Branch: ',0,0);
 $pdf->Cell($width2,$ht2,$branch,0,1);

 $pdf->Cell($width1,$ht1,'Jee Roll No: ',0,0);
 $pdf->Cell($width2,$ht2,$JeeRollNo,0,1);

 $pdf->Cell($width1,$ht1,'Jee Rank: ',0,0);
 $pdf->Cell($width2,$ht2,$rank,0,1);

 $pdf->Cell($width1,$ht1,'10th Percentage: ',0,0);
 $pdf->Cell($width2,$ht2,$tenthpercent.'%',0,1);

 $pdf->Cell($width1,$ht1,'12th Percentage: ',0,0);
 $pdf->Cell($width2,$ht2,$twelfthpercent.'%',0,1);

 $pdf->Cell($width1,$ht1,'Gap: ',0,0);
 $pdf->Cell($width2,$ht2,$gap,0,1); 

 $pdf->Cell($width1,$ht1,'',0,0);       //Dummy cells to help with alignment
 $pdf->Cell($width2,$ht2,'',0,1);
 $pdf->Cell($width1,$ht1,'',0,0);
 $pdf->Cell($width2,$ht2,'',0,1);
 $pdf->Cell($width1,$ht1,'',0,0);
 $pdf->Cell($width2,$ht2,'',0,1);
 $pdf->Cell($width1,$ht1,'',0,0);
 $pdf->Cell($width2,$ht2,'',0,1);

 $pdf->Cell(90,15,'Student\'s Sign',0,0);
 $pdf->Cell(90,15,'Director\'s Sign',0,1,'R');


 
 if(isset($_FILES['tenth_cerf']))
 {
    $file=$_FILES['tenth_cerf'];
    $filename=$_FILES['tenth_cerf']['name'];
    $fileTmpName=$_FILES['tenth_cerf']['tmp_name'];
    $fileSize=$_FILES['tenth_cerf']['size'];
    $fileError=$_FILES['tenth_cerf']['error'];
    $fileType=$_FILES['tenth_cerf']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'10th Certificate',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/tenthcertificates/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['twelth_cerf']))
 {  
    $file=$_FILES['twelth_cerf'];
    $filename=$_FILES['twelth_cerf']['name'];
    $fileTmpName=$_FILES['twelth_cerf']['tmp_name'];
    $fileSize=$_FILES['twelth_cerf']['size'];
    $fileError=$_FILES['twelth_cerf']['error'];
    $fileType=$_FILES['twelth_cerf']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'12th Certificate',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/twelfthcertificates/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['jee_marksheet']))
 {
    $file=$_FILES['jee_marksheet'];
    $filename=$_FILES['jee_marksheet']['name'];
    $fileTmpName=$_FILES['jee_marksheet']['tmp_name'];
    $fileSize=$_FILES['jee_marksheet']['size'];
    $fileError=$_FILES['jee_marksheet']['error'];
    $fileType=$_FILES['jee_marksheet']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'Jee marksheet',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/jee_marksheets/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['tc']))
 {
    $file=$_FILES['tc'];
    $filename=$_FILES['tc']['name'];
    $fileTmpName=$_FILES['tc']['tmp_name'];
    $fileSize=$_FILES['tc']['size'];
    $fileError=$_FILES['tc']['error'];
    $fileType=$_FILES['tc']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'TC',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/tcs/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['receipt']))
 {
    $file=$_FILES['receipt'];
    $filename=$_FILES['receipt']['name'];
    $fileTmpName=$_FILES['receipt']['tmp_name'];
    $fileSize=$_FILES['receipt']['size'];
    $fileError=$_FILES['receipt']['error'];
    $fileType=$_FILES['receipt']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'Receipt',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/receipts/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['pwd_cerf']))
 {
    $file=$_FILES['pwd_cerf'];
    $filename=$_FILES['pwd_cerf']['name'];
    $fileTmpName=$_FILES['pwd_cerf']['tmp_name'];
    $fileSize=$_FILES['pwd_cerf']['size'];
    $fileError=$_FILES['pwd_cerf']['error'];
    $fileType=$_FILES['pwd_cerf']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'PWD Certificate',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/pwd_certificates/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 if(isset($_FILES['gap_cerf']))
 {
    $file=$_FILES['gap_cerf'];
    $filename=$_FILES['gap_cerf']['name'];
    $fileTmpName=$_FILES['gap_cerf']['tmp_name'];
    $fileSize=$_FILES['gap_cerf']['size'];
    $fileError=$_FILES['gap_cerf']['error'];
    $fileType=$_FILES['gap_cerf']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'Gap Certificate',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/gap_certificates/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 
 if(isset($_FILES['anti_ragging']))
 {
    $file=$_FILES['anti_ragging'];
    $filename=$_FILES['anti_ragging']['name'];
    $fileTmpName=$_FILES['anti_ragging']['tmp_name'];
    $fileSize=$_FILES['anti_ragging']['size'];
    $fileError=$_FILES['anti_ragging']['error'];
    $fileType=$_FILES['anti_ragging']['type'];
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2097152)
            {
                $pdf->AddPage('p');
                $pdf->SetY(10);
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(190,$ht1,'Anti Ragging Form',0,1,'C');
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDesination='uploads/anti_raggings/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDesination);
                $pdf->Image($fileDesination,10,20,190,270);
            }
        }
    }
 }
 

 //Generating downloadable output 
 ob_end_clean();
 $pdf->Output();
?>

