    <?php
    include 'dbconnection.php';
    $conn = OpenCon();
    #echo "Connected Successfully";

   /* $name = 'Pulkit Batra';
    $Father = 'Kamal Kishore Batra';
    $Mother = 'Vandana Batra';
    $category = 'General';
    $contact = '9873155586';
    $altcontact = '9810496493';
    $email = 'pulkitbatra34@gmail.com';
    $addr ='Mahagun Maple';
    $aadhar = '190001910921';
    $DOB ='02/12/2000';
    $sem = '1';
    $branch = 'ece';
    $rank = '40000';
    $tenthpercent ='95%';
    $twelfthpercent = '98%';
    $gen ='General';
    $JeeRollNo = '8977562525';
    $gap ='Yes';*/
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
 $gap=$_POST['gap'];

     if (strtolower($branch)=='cse')
    {

     $sql2="SELECT * FROM cseinfo ORDER BY Sr_No DESC LIMIT 1;" ;
     $sql3="ALTER TABLE cseinfo AUTO_INCREMENT=1";
    }
    else{
         $sql2="SELECT * FROM eceinfo ORDER BY Sr_No DESC LIMIT 1;" ;
         $sql3="ALTER TABLE eceinfo AUTO_INCREMENT=1";
       }

    if (mysqli_query($conn, $sql2)) {
        #echo "Got the roll number";
        $result = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_row($result);
        if ((isset($row[1]))){

        $r=$row[0]+1;
        }
       else {
        mysqli_query($conn, $sql3);
        #echo 'hello';       
        $r='1';
      }

    } else {
        #echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }   
    
   
    
    $temp='bt20';
    $r=(int)$r;
    #echo (gettype($r));
   
     $temp=$temp.$branch;
     if ($r>=100)           #changed from 10 to 100
    {
     $temp=$temp.$r;
     $temp=strtoupper($temp);
    }
     else if($r<100&&$r>=10)
     {
     $temp=$temp.'0';  #changed
     $r=(string)$r;
     $temp=$temp.$r;
     $temp=strtoupper($temp);
      }
      else if($r<10)
      {
        $temp=$temp.'00';  #changed
        $r=(string)$r;
        $temp=$temp.$r;
        $temp=strtoupper($temp);
      }
    
    
    $roll=$temp;


    if (strtolower($branch)=='cse')
    {
         $sql = "INSERT INTO cseinfo (Roll_No, Name, Father_Name,Mother_Name,Category,Contact_Number        ,Alternate_Number,Email_Id,Address,Aadhar_No,Dob,Semester,Branch,Rank,10thPercent,12thPercent,Gender,JeeRollNumber,Gap)
    VALUES ('$roll','$name','$Father','$Mother','$category','$contact','$altcontact','$email','$addr','$aadhar','$DOB','$sem','$branch','$rank','$tenthpercent','$twelfthpercent','$gen','$JeeRollNo','$gap')";
    }
    else
    {
         $sql = "INSERT INTO eceinfo (Roll_No, Name, Father_Name,Mother_Name,Category,Contact_Number        ,Alternate_Number,Email_Id,Address,Aadhar_No,Dob,Semester,Branch,Rank,10thPercent,12thPercent,Gender,JeeRollNumber,Gap)
    VALUES ('$roll','$name','$Father','$Mother','$category','$contact','$altcontact','$email','$addr','$aadhar','$DOB','$sem','$branch','$rank','$tenthpercent','$twelfthpercent','$gen','$JeeRollNo','$gap')";
    }

   
if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    #echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


 CloseCon($conn);

    ?>