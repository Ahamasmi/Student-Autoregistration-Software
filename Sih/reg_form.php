<html>
    <head>
        <title>
            Registration Form
        </title>
		<meta charset="utf-8">
        <!--<script src="reg_form.js"></script>-->
        <script src="reg_form1.js"></script>
        <link rel="stylesheet" href = "reg_form.css">
        <body>
            <div class="logo">
                <img src="logo.jpeg" width=100% height=150px>
            </div>
            
     
            <div class="reg_form">
                <form method="POST" action="form.php" target="blank" enctype="multipart/form-data">
                    <fieldset class="personalField">
                        <legend>Personal Information</legend>
                        Student's Name:     
                        <input type="text" placeholder="Enter Student's Name" id="studentName" name="studentName" required ><br>
                        <script> checkEmpty(document.getElementById('studentName')); </script>
                        Father's Name:
                        <input type="text" placeholder="Enter Father's Name" id="fatherName" name="fatherName" required><br>       
                        Mother's Name:
                        <input type="text" placeholder="Enter Mother's Name" id="motherName" name="motherName" required><br>                
                        Date of Birth:
                        <input type="text" placeholder="Enter DOB" id="dob" name="dob" required ><br>
                        <script> checkEmpty(document.getElementById('dob')); </script>
                        Gender:
                        <input type="text" placeholder="Gender" id="gender" name="gender" required ><br>
                        <script> checkEmpty(document.getElementById('gender')); </script>
                        Category:
                        <input type="text" placeholder="Enter Student's Category" id="category" name="category" required >
                        <input type="file" placeholder="Upload" id="cerf"><br>
                        <script>document.getElementById("cerf").style.visibility = "hidden";</script>
                        <script> checkEmpty(document.getElementById('category')); </script>
                        Contact Number:
                        <input type="text" placeholder="Contact Number" id="contactNo" name="contactNo" required><br>
                        Alternate Contact Number:
                        <input type="text" placeholder="Alternate Contact Number" id="altContactNo" name="altContactNo"><br>
                        Email-id:
                        <input type="email" placeholder="Enter email-id" id="emailId" name="emailId" required><br>
                        Aadhar Number:
                        <input type="text" placeholder="Enter student's aadhar number" id="aadhar" name="aadhar" required ><br>
                        <script> checkEmpty(document.getElementById('aadhar')); </script>    
                        Address:<br>
                        <textarea name="address" id="addr"  cols="30" rows="10"></textarea>
                    </fieldset>
                    <br><br>
                    <fieldset class="academicInfo">
                        <legend>Academic Information</legend><br>
                        JEE Roll Number:
                        <input type="text" placeholder="Enter JEE roll no." id="roll" name="roll" ><br>
                        <script> checkEmpty(document.getElementById('roll')); </script>
                        JEE Mains AIR:
                        <input type="text" placeholder="Enter AIR" id="air" name="air" ><br>
                        <script> checkEmpty(document.getElementById('air')); </script>
                        10th Percentage:
                        <input type="text" placeholder="Enter 10th percentage" id="tenP" name="tenP" ><br>
                        <script> checkEmpty(document.getElementById('tenP')); </script>
                        12th Percentage:
                        <input type="text" placeholder="Enter 12th percentage" id="twelveP" name="twelveP" ><br>
                        <script> checkEmpty(document.getElementById('twelveP')); </script>
                        Branch:
                        <input type="text" placeholder="Enter branch" id="branch" name="branch" ><br>
                        <script> checkEmpty(document.getElementById('branch')); </script>
                        Semester:
                        <input type="text" placeholder="Enter semester" id="sem" name="sem" ><br>
                        <script> checkEmpty(document.getElementById('sem')); </script>
                        Gap:
                      <input type="radio" id="gap_y" name="gap" value="yes"> Yes
                        <input type="radio" id="gap_n" name="gap" value="no"> No
                       <!--   Gap:<input type="radio" id="gap_y" name="gap_y" > Yes
                        <input type="radio" id="gap_n" name="gap_n"> No
                        <script> if(document.getElementById('gap_y').checked == true) {
                                    document.getElementById('gap_cerf').style.visibility = "visible";
                                }
                                else {
                                    document.getElementById('gap_cerf').style.visibility = "hidden";
                                }
                        </script>-->

                    </fieldset><br><br>
                <fieldset class="docs">
                    <legend>Upload Documents</legend>
                    Photo:
                    <input type="file" id="photo" name="photo" src="" required><br>
                    Signature:
                    <input type="file" id="sign" name="sign" src="" required><br>
                    Xth Certificate:
                    <input type="file" id="tenth_cerf" name="tenth_cerf" src="" required><br>
                    XIIth Certificate:
                    <input type="file" id="twelth_cerf" name="twelth_cerf" src="" required><br>
                    JEE Marksheet:
                    <input type="file" id="jee_marksheet" name="jee_marksheet" src="" required><br>
                    Anti Ragging form:
                    <input type="file" id="anti_ragging" name="anti_ragging" required><br>
                    Payment Receipt:
                    <input type="file" id="receipt" name="receipt" src="" required><br>
                    Migration Certificate:
                    <input type="file" id="tc" name="tc" src=""><br>
                    PWD Certificate (If Applicable):
                    <input type="file" id="pwd_cerf" name="pwd_cerf"><br>
                   <label id="gap_label"> Gap Certificate :</label>
                    <input type="file" id="gap_cerf" name="gap_cerf"><br>
                    
                </fieldset>
                <center><input type="submit" value="Submit" id="submit" name="submit" onclick="formValidation()"></center>
				<input type="button" value="check" id="check" onclick="checkForm()"  >
                </form>
            </div>

            <script>
                function checkForm() {
                    checkEmpty(document.getElementById('sem'));
                    checkEmpty(document.getElementById('branch'));
                    checkEmpty(document.getElementById('twelveP'));
                    checkEmpty(document.getElementById('tenP'));
                    checkEmpty(document.getElementById('air'));
                    checkEmpty(document.getElementById('roll'));
                    checkEmpty(document.getElementById('studentName'));
                    checkEmpty(document.getElementById('aadhar'));
                    checkEmpty(document.getElementById('dob'));
                    checkEmpty(document.getElementById('gender'));
                    checkEmpty(document.getElementById('category'));
                    if(document.getElementsByName('gap').value == "yes"){
                        document.getElementById('gap_n').disabled= true;
                        var dis=document.getElementById('gap_n').disabled;
                        console.log("no"+dis);
                    }
                    else{
                        
                        document.getElementById('gap_y').disabled= true;
                        var dis=document.getElementById('gap_y').disabled;
                        console.log("yes"+dis);
                    }
                    document.getElementById('gap_n').readonly= true;
                    //document.getElementById('check').hidden=true;
                    if(document.getElementsByName('gap').value == "yes") {
                                    document.getElementById('gap_cerf').style.visibility = "visible";
                                    document.getElementById('gap_label').style.visibility = "visible";
                                }
                                else {
                                    document.getElementById('gap_cerf').style.visibility = "hidden";
                                    document.getElementById('gap_label').style.visibility = "hidden";
                                }
                }            
            </script>
            <!--This Script does not work and has been replaced in the the checkform function with a working script
            <script>
            if (document.getElementById('gap_y').checked == true || document.getElementById('gap_n').checked == true )
            {document.getElementById('gap_n').readOnly = true;
            document.getElementById('gap_n').readOnly = true;}
            </script>
            -->
        </body>    
    </head>
</html>
