<?php
require 'connect.php'; 
session_start();
if (isset($_SESSION['email'])) {
    header('location: dashboard.php');
      } 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- https://www.w3schools.com/bootstrap/bootstrap_get_started.asp -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="stylesheets\style.css">
   <style>body{background-color: #DCD9D4;
 background-image: linear-gradient(to bottom, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), radial-gradient(at 50% 0%, rgba(255,255,255,0.10) 0%, rgba(0,0,0,0.50) 50%);
 background-blend-mode: soft-light,screen;}</style>
   <title>ADMISSION FORM</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container" style="font-size: 2rem; font-weight:bold;">
      <div class ="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Nav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>  
        </button>
          <a href="#" class="navbar-brand">
            <img src="images\logo.jpg" class="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="Nav">
          <ul class="nav navbar-nav navbar-right" style="margin: 2rem;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"> HOME</a></li>
          </ul>
        </div>
    </div>
  </nav>

  <!-- Instructions -->
  <div class="container" style="min-height: 100%;" id="instruction">
    <div class="row">
      <div class="col-xs-12 col-md-offset-2 col-md-8" style="background-color: #ffffff;">
        <u><h1 class="text-center" style="color: #20b2aa; font-weight: bolder; margin-bottom: 6rem;">Instructions for filling the application form</h1></u>
        <ol style="padding: 3rem; text-align: justify;">
          <li>Select the appropriate Course for admission. Candidates having PCM and PCBM at 10+2/ equivalent level are eligible for all 
              the four trades of B.Tech. (I.T./C.S.E./B.I.), whereas candidates having PCB at 10+2/equivalent level are eligible for 
              B.Tech. in B.I. only.<br>
              PCM: Physics, Chemistry, Mathematics, PCB: Physics, Chemistry, Biology and PCBM: Physics, Chemistry, Biology, 
              Mathematics. I.T: Information Technology, CSE: Computer Science & Engineering, BI: Bioinformatics.</li>
          <li>Mention full name in capital letters as per 10th certificate.</li>
          <li>Mention date, month and year of birth as per 10th certificate.</li>
          <li>Mention easily distinguishable identification mark.</li>
          <li>Mention proper category as per proper certificate/ document from concerned authorities.</li>
          <li>Clearly mention the choice of test centre. Patna centre may be merged with Darbhanga in case of inadequate number of 
              choices for it.</li>
          <li>Unmarried daughter/ wife of regular employee are considered under this category. Photocopy of employer certificate 
              (issued by Registrar, LNMU).Provide information about Native/ Domicile of Bihar. Photocopy of supporting document should be attached.<br><b>Please make a pdf of all the required documents and submit the file.</b></li>
          <li>Provide complete permanent address.</li>
          <li>Provide operative email id(s). Communication may be made through mail.</li>
          <li><b>Please specify the precise information.</b></li>
        </ol>
        <button class="btn btn-lg btn-info" style="margin:1rem" onclick="application()">Application For B.Tech and BI</button><br>
        <button class="btn btn-lg btn-info" style="margin:1rem" onclick="applicationmca()">Application For MCA</button>
      </div>
    </div>
  </div><br>

  <!--application for b.tech and BI -->
  <div class="container" style="min-height: 100%;display: none;" id="apply">
    <div class="row">
      <div class="col-xs-12 col-md-12" style=" background-color: #ffffff;">
        <center>
          <p style=" margin-right: 2rem; font-weight: bolder;font-size: 3rem;" class="text-center">Dr. APJ Abdul Kalam Women’s Institute of Technology</p><h3 class="text-center" style="margin-bottom: 2rem;">(Formerly known as Women’s Institute of Technology)<br>L. N. Mithila University, Darbhanga - 846008<br><u>Application For B.Tech AND BI</u></h3>
          </center>
          <img src="images\logo.jpg" height="100px" width="100px" style="margin: 1rem; float: left;">
          <img src="images\lnmu.jpg" height="100px" width="100px" style="float: right;">
            <form method="post" action="btech.php" enctype="multipart/form-data">
               <table class="table table-responsive" style="border: none;">
                <tr>
                  <td><label>Submit your image(png/jpg)</label></td>
                  <td><input type="file" name="profile" required id="inpimg" onclick="load()">
                    <div id="preview" style="width: 200px;min-height: 200px;border: 1px dashed; display: flex;">
                      <img src="" alt="Image Preview" class="preimage" width="100%" >
                    </div></td>
                </tr>
                 <tr>
                   <td><label>Full Name</label></td>
                   <td> <input type="text" name="name" placeholder="full name"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Father's Name</label></td>
                   <td> <input type="text" name="fname" placeholder="Full name of your Father"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Mother's Name</label></td>
                   <td> <input type="text" name="mname" placeholder="Full name of your Mother"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Date of Birth</label></td>
                   <td> <input type="date" name="dob" required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Native/Domicile of Bihar</label></td>
                   <td> <input type="text" name="native" required="TRUE" class="form-control" placeholder="yes/no"></td>
                 </tr>
                 <tr>
                   <td><label>Address of Correspondence</label></td>
                   <td> <textarea name="address" required="TRUE" class="form-control" placeholder="Current Address" rows="5"></textarea></td>
                 </tr>
                 <tr>
                   <td><label>Permanent Address</label></td>
                   <td> <textarea name="permanent" required="TRUE" class="form-control" placeholder="Address" rows="5"></textarea></td>
                 </tr>
                 <tr>
                   <td><label>Contact Number</label></td>
                   <td> <input type="text" name="contact" placeholder="contact" required="TRUE" pattern="[0-9]{10}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Alternate Contact Number</label></td>
                   <td> <input type="text" name="acontact" placeholder="Alternate contact" required="TRUE" pattern="[0-9]{10}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Email</label></td>
                   <td> <input type="email" name="mail" placeholder="E-mail Id" required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Aadhar Number</label></td>
                   <td> <input type="text" name="aadhar" placeholder="Your Adhaar Number" required="TRUE" pattern="[0-9]{12}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Marks for identification</label></td>
                   <td> <input type="text" name="identify" placeholder="Provide precise identification mark"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Category</label></td>
                   <td><select name="category" style=" width: 27rem ;">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="gen">General</option>
                        <option value="ews">EWS</option>
                        <option value="bc" >BC</option>
                        <option value="ebc" >EBC</option>
                        <option value="sc">SC</option>
                        <option value="st" >ST</option>
                        </select></td>
                 </tr>
                 <tr>
                   <td><label>Specialization</label></td>
                   <td> <input type="checkbox" name="check" value="B.Tech(IT/CSE/BI)" onclick="return chek()">
                        <label >B.Tech(IT/CSE/BI)</label>&nbsp&nbsp
                        <input type="checkbox" name="check" value="BI" onclick="return chek()">
                        <label>B.Tech(BI)</label>&nbsp&nbsp
                        <input type="checkbox" name="check" value="B.Tech Lateral(CSE/IT)" onclick="return chek()">
                        <label >B.Tech Lateral(CSE/IT)</label>
                        <span id="notvalid" style="color:red"></span>
                    </td>
                 </tr>
                 <tr>
                   <td><label>Ward of L.N. Mithila University Employee</label></td>
                   <td> <input type="text" name="ward" required="TRUE" class="form-control" placeholder="Yes/No"></td>
                 </tr>
                 <tr>
                   <td><label>First Choice of Test Centre</label></td>
                   <td> <select name="centre" style=" width: 27rem ;">
                        <option value="dbg">Darbhanga</option>
                        <option value="pat">Patna</option></select></td>
                 </tr>
                 <tr>
                   <td><label>Today's Date</label></td>
                   <td> <input type="date" name="date" required="TRUE" class="form-control"></td>
                 </tr>

                 <!-- for B.tech program -->
                 <tr><td><h3 class="text-center" style="color: blue;"> For B.Tech Program</h3> </td></tr>
                 <tr>
                   <td><label>10+2/equivalent</label></td>
                   <td> <select name="twelve" style=" width: 27rem ;">
                        <option>NA </option>
                        <option value="pcm">PCM</option>
                        <option value="pcb">PCB</option>
                        <option value="pcbm">PCBM</option></select></td>
                 </tr>
                 <tr>
                   <td><label>Name of the School/College</label></td>
                   <td> <input type="text" name="clg" class="form-control" placeholder="School/College Name"></td>
                 </tr>
                 <tr>
                   <td><label>Board</label></td>
                   <td> <input type="text" name="board" class="form-control" placeholder="Board/University"></td>
                 </tr>
                 <tr>
                   <td><label>Year of Passing/Appearing</label></td>
                   <td> <input type="text" name="pass" class="form-control" placeholder="year of passing"></td>
                 </tr>
                 <tr>
                   <td><label>Percentage of Marks/Appearing</label></td>
                   <td> <input type="number" step="any" name="marks" class="form-control" placeholder="percentage/cgpa/marks"></td>
                 </tr>


<!-- For B.tech Lateral program-->
                 <tr><td><h3 class="text-center" style="color: blue;"> For B.Tech Lateral Program</h3> </td></tr>
                 <tr>
                   <td><label>Diploma</label></td>
                   <td> <select name="diploma" style=" width: 27rem ;">
                        <option>NA </option>
                        <option value="cse">CSE</option>
                        <option value="it">IT</option>
                        <option value="other">Other</option></select></td>
                 </tr>
                 <tr>
                   <td><label>Name of the School/College</label></td>
                   <td> <input type="text" name="dclg" class="form-control" placeholder="School/College Name"></td>
                 </tr>
                 <tr>
                   <td><label>Board</label></td>
                   <td> <input type="text" name="dboard" class="form-control" placeholder="Board/University"></td>
                 </tr>
                 <tr>
                   <td><label>Year of Passing/Appearing</label></td>
                   <td> <input type="text" name="dpass" class="form-control" placeholder="year of passing"></td>
                 </tr>
                 <tr>
                   <td><label>Percentage of Marks/Appearing</label></td>
                   <td> <input type="number" step="any" name="dmarks" class="form-control" placeholder="percentage/cgpa/marks"></td>
                 </tr>
                 <tr>
                  <td><label>Submit the pdf containing all the required documents</label></td>
                  <td><input type="file" name="pdf" required></td>
                </tr>
               </table>
             <center><button class="btn btn-lg btn-danger sub2" style="margin:4rem; display: none;">Proceed</button></center>
            </form>    
            <p class="form2" style="font-size: 3rem;">PRINT BEFORE PROCEEDING FURTHER!!</p>
            <center><button class="btn btn-lg btn-danger form2" style="margin:4rem;" onclick="print2()">PRINT</button></center>    
        
      </div>
    </div>
  </div>

  <!--application for MCA -->

  <div class="container" style="min-height: 100%;display: none;" id="applymca">
    <div class="row">
      <div class="col-xs-12 col-md-12" style=" background-color: #ffffff;">
        <center>
          <p style=" margin-right: 2rem; font-weight: bolder;font-size: 3rem;" class="text-center">Dr. APJ Abdul Kalam Women’s Institute of Technology</p><h3 class="text-center" style="margin-bottom: 2rem;">(Formerly known as Women’s Institute of Technology)<br>L. N. Mithila University, Darbhanga - 846008<br><u>Application For MCA</u></h3>
          </center>
          <img src="images\logo.jpg" height="100px" width="100px" style="margin: 1rem; float: left;">
          <img src="images\lnmu.jpg" height="100px" width="100px" style="float: right;">
            <form method="post" action="mca.php" enctype="multipart/form-data">
               <table class="table table-responsive" style="border: none;">
                <tr>
                  <td><label>Submit your image(png/jpg)</label></td>
                  <td><input type="file" name="profilem" required id="inpimgm" onclick="loadm()">
                    <div id="previewm" style="width: 200px;min-height: 200px;border: 1px dashed; display: flex;">
                      <img src="" alt="Image Preview" class="preimage" width="100%" >
                    </div></td>
                </tr>
                 <tr>
                   <td><label>Full Name</label></td>
                   <td> <input type="text" name="namem" placeholder="full name"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Father's Name</label></td>
                   <td> <input type="text" name="fnamem" placeholder="Full name of your Father"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Mother's Name</label></td>
                   <td> <input type="text" name="mnamem" placeholder="Full name of your Mother"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Date of Birth</label></td>
                   <td> <input type="date" name="dobm" required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Native/Domicile of Bihar</label></td>
                   <td> <input type="text" name="nativem" required="TRUE" class="form-control" placeholder="yes/no"></td>
                 </tr>
                 <tr>
                   <td><label>Address of Correspondence</label></td>
                   <td> <textarea name="addressm" required="TRUE" class="form-control" placeholder="Current Address" rows="5"></textarea></td>
                 </tr>
                 <tr>
                   <td><label>Permanent Address</label></td>
                   <td> <textarea name="permanentm" required="TRUE" class="form-control" placeholder="Address" rows="5"></textarea></td>
                 </tr>
                 <tr>
                   <td><label>Contact Number</label></td>
                   <td> <input type="text" name="contactm" placeholder="contact" required="TRUE" pattern="[0-9]{10}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Alternate Contact Number</label></td>
                   <td> <input type="text" name="acontactm" placeholder="Alternate contact" required="TRUE" pattern="[0-9]{10}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Email</label></td>
                   <td> <input type="email" name="mailm" placeholder="E-mail Id" required="TRUE" class="form-control" id="mail"></td>
                 </tr>
                 <tr>
                   <td><label>Aadhar Number</label></td>
                   <td> <input type="text" name="aadharm" placeholder="Your Adhaar Number" required="TRUE" pattern="[0-9]{12}" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Marks for identification</label></td>
                   <td> <input type="text" name="identifym" placeholder="Provide precise identification mark"  required="TRUE" class="form-control"></td>
                 </tr>
                 <tr>
                   <td><label>Category</label></td>
                   <td><select name="categorym" style=" width: 27rem ;">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="gen">General</option>
                        <option value="ews">EWS</option>
                        <option value="bc" >BC</option>
                        <option value="ebc" >EBC</option>
                        <option value="sc">SC</option>
                        <option value="st" >ST</option>
                        </select></td>
                 </tr>
                 <tr>
                   <td><label>Ward of L.N. Mithila University Employee</label></td>
                   <td> <input type="text" name="wardm" required="TRUE" class="form-control" placeholder="Yes/No"></td>
                 </tr>
                 <tr>
                   <td><label>First Choice of Test Centre</label></td>
                   <td> <select name="centrem" style=" width: 27rem ;">
                        <option value="dbg">Darbhanga</option>
                        <option value="pat">Patna</option></select></td>
                 </tr>
                 <tr>
                   <td><label>Today's Date</label></td>
                   <td> <input type="date" name="datem" required="TRUE" class="form-control"></td>
                 </tr>

                 <!-- for MCA program (10+2) -->
                 <tr><td><h3 class="text-center" style="color: blue;">10+2/Equivalent</h3> </td></tr>
                 <tr>
                   <td><label>10+2/equivalent</label></td>
                   <td> <select name="twelvem" style=" width: 27rem ;">
                        <option>NA </option>
                        <option value="pcm">PCM</option>
                        <option value="pcb">PCB</option>
                        <option value="pcbm">PCBM</option></select></td>
                 </tr>
                 <tr>
                   <td><label>Name of the School/College</label></td>
                   <td> <input type="text" name="clgm" class="form-control" placeholder="School/College Name" required></td>
                 </tr>
                 <tr>
                   <td><label>Board</label></td>
                   <td> <input type="text" name="boardm" class="form-control" placeholder="Board/University" required></td>
                 </tr>
                 <tr>
                   <td><label>Year of Passing/Appearing</label></td>
                   <td> <input type="text" name="passm" class="form-control" placeholder="year of passing" required></td>
                 </tr>
                 <tr>
                   <td><label>Percentage of Marks/Appearing</label></td>
                   <td> <input type="number" step="any" name="marksm" class="form-control" placeholder="percentage/cgpa/marks" required></td>
                 </tr>


<!-- For MCA program(graduation) -->
                 <tr><td><h3 class="text-center" style="color: blue;"> Graduation</h3> </td></tr>
                 <tr>
                   <td><label>Name of the School/College</label></td>
                   <td> <input type="text" name="dclgm" class="form-control" placeholder="School/College Name"required></td>
                 </tr>
                 <tr>
                   <td><label>University</label></td>
                   <td> <input type="text" name="dboardm" class="form-control" placeholder="Board/University" required></td>
                 </tr>
                 <tr>
                   <td><label>Year of Passing/Appearing</label></td>
                   <td> <input type="text" name="dpassm" class="form-control" placeholder="year of passing" required></td>
                 </tr>
                 <tr>
                   <td><label>Percentage of Marks/Appearing</label></td>
                   <td> <input type="number" step="any" name="dmarksm" class="form-control" placeholder="percentage/cgpa/marks" required></td>
                 </tr>
                 <tr>
                  <td><label>Submit the pdf containing all the required documents</label></td>
                  <td><input type="file" name="pdfm" required></td>
                </tr>
               </table>
             <center><button class="btn btn-lg btn-danger sub2" style="margin:4rem; display: none;">Proceed</button></center>
            </form>    
            <p class="form2" style="font-size: 3rem;">PRINT BEFORE PROCEEDING FURTHER!!</p>
            <center><button class="btn btn-lg btn-danger form2" style="margin:4rem;" onclick="print2()">PRINT</button></center>
        
      </div>
    </div>
  </div>

  <script src="scripts/admission_script.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    function print2(){
       window.print();
       jQuery('.form2').hide();
       jQuery('.sub2').show();

    }
  </script>
</body>
</html>