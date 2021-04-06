<?php
include 'php.php';
if (isset($_POST['signbtn'])) {

  $name = $_POST['usersign'];
  $email = $_POST['emailsign'];
  $password = $_POST['passsign'];
  $sql = "Insert into signup (Username,Email,Password ) values('$name','$email','$password')";
  if (mysqli_query($conn, $sql)) {
?>
    <script>
      alert('Register Your Account Done Successfully !!!');
    </script>

  <?php

  }


  ?>

  <script>
    alert('User Name Is Defined By Another User,Please Enter Another UserName To Complete Register Your Account ...');
  </script>


<?php




}





?>























<?php
include 'includefile.php';


?>
<title>Home Page</title>
  <style>
    a {
      text-decoration: none;
      font-size: 22px;
      color: black;

    }

    a:hover {
      color: black;


    }
  </style>

</head>

<body>

  <div style="font-weight: bold;" class="container-fluid just  bg-light text-center border display-2"><span class="text-success">C</span><span class="text-success">on</span><span class="text-secondary">fes</span><span class="text-primary">sio</span><span class="text-danger">ns</span>

    <span class="text-dark">S</span><span class="text-danger">i</span><span class="text-warning">te</span>

    <img src="images/email (2).png" style="width: 100px;height:100px" class="img-fluid">
  </div>
  <br><br><br>
  <div style="margin-left: 12%;" class="spinner  spinner-grow spinner-grow-sm text-muted"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-primary"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-danger"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-warning"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-dark"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-success"></div>

  <br><br>
  <div style="text-align: center;" id="demo" class="carousel border bg-light slide" data-ride="carousel">
    <br><br><br><br>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="images/dating.png" alt="Los Angeles" class="img-fluid" style="width: 20%;" height="400px">


        <div class="carousel-caption">

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/laptop.png" alt="Chicago" class="img-fluid" style="width: 20%;" height="400px">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/chat.png" alt="New York" class="img-fluid" style="width: 20%;" height="400px">

        <div class="carousel-caption">

        </div>
      </div>

    </div>

    <br><br><br>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="bg-dark carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="bg-dark carousel-control-next-icon"></span>
    </a>
  </div>

  </div>
  <br><br><br>

  <div style="margin-left: 12%;" class="spinner  spinner-grow spinner-grow-sm text-muted"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-primary"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-danger"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-warning"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-dark"></div>
  <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-success"></div>


  <br><br><br>
  <div class="container-fluid border bg-dark display-4 text-light">
    <br>
    <div style="font-weight: bold;" class="container-fluid just    display-2"><span class="text-success">C</span><span class="text-success">on</span><span class="text-secondary">fes</span><span class="text-primary">sio</span><span class="text-danger">ns</span>

      <span class="text-light">S</span><span class="text-danger">i</span><span class="text-warning">te</span>

      <img src="images/email (2).png" style="width: 100px;height:100px" class="img-fluid">
    </div>

    <hr>
    <div class="display-4">Confessions Site Is Simple Site to recognize to friend or other people in all world.</div>

    <br><br>

  </div>

  <br><br>



  <div class="card">

    <br><br>
    <center> <img class="card-img-top  img-fluid" style="width: 30%;" src="images/sign up.png" alt="Card image cap"></center>

    <br><br>

    <div class="card-body bg-dark border text-white">
      <br>
      <br>
      <div style="font-weight:700;" class="card-title display-5 text-center text-primary">Sign Up Your Account</div>
      <div class="card-text  text-muted display-9 text-center">Sign Up Your Account And Recognize your Messeges To Your Friend...</div><br><br>
      <button style="width: 100%;" style="font-weight: bold;font-size: large;" type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sign Up</button>
      <br> <br>
    </div>

  </div>
  <br><br><br><br>
    
  <div class="card">
    <br><br>
    <center> <img class="card-img-top  img-fluid" style="width: 30%;" src="images/log-in.png" alt="Card image cap"></center>
    <br><br>
    <div class="card-body bg-dark text-white">
      <br><br>
      <div style="font-weight:500;" class="card-title display-5 text-success text-center">Log In To Your Account</div>
      <div class="card-text dispaly-3 text-muted text-center">Log In To Your Account If You Have Account ,And Share Your Openion Of The Site ...</div><br><br>
      <button style="width: 100%;font-size: large;" type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Log In</button>
      <br><br>
    </div>

  </div>
    
    
  <br><br><br><br>
  <div class="card">
    <br><br>
    <center> <img class="card-img-top img-fluid" style="width: 30%;" src="images/contact-us.png" alt="Card image cap"></center>
    <br><br>
    <div class="card-body bg-dark border text-white">
      <br><br>
      <h1 style="font-weight:700;" class="card-title  display-5 text-center text-danger">Contact Us</h1>
      <div class="card-text text-muted text-center"> Contact Me If You Have Any Question Or Any Proplem ...</div><br>
      <button style="width: 100%;font-size: large;" type="button" class="btn btn-lg  btn-danger " data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Contact Me</button>
      <br><br>
    </div>
  </div>





  <br><br><br><br><br>












  <div class="container-fluid bg-dark  text-white">
    <br><br>


    <div class="display-4">Liked our site for the last 3 years...</div>
    <div style="font-size: x-large;">These percentages are approximate, not absolute values...</div>
    <div class="display-4 text-white">2018</div>
    <div style="height: 25px;" class="progress">
      <div style="width: 59%;" class="progress-bar progress-bar-striped progress-bar-animated bg-success">59%</div>

    </div><br><br>
    <div class="display-4 text-white">2019</div>
    <div style="height: 25px;" class="progress">
      <div class="progress-bar progress-bar-striped bg-warning" style="width:76%;font-size: 13px;">76%</div>
    </div>
    <br><br>
    <div class="display-4 text-white">2020</div>
    <div style="height: 25px" class="progress">
      <div class="progress-bar progress-bar-striped bg-primary " style="width:94%">94%</div>
    </div>
    <br><br><br><br><br>
  </div>



 





  <div class="container-fluid text-white">


  </div>

  <br><br><br><br><br>

  <div class="modal  fade border" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content bg-light">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title" id="exampleModalLabel">Register Your Account</h5>
          <button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center> <img src="images/img_avatar3.png" style="height: 400px;width:90%;" class="img-fluid img-thumbnail"></center><br>

          <center><small class="text-muted text-center">Sign Up Your Account If You Haven't Any Account</small></center><br>
          <div style="margin-left: 12%;" class="spinner  spinner-grow spinner-grow-sm text-muted"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-primary"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-danger"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-warning"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-dark"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-success"></div>
          <br>
          <form method="POST" class="was-validated">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">User Name</label>
              <input type="text" class="form-control" name="usersign" placeholder="Enter Username Here..." required>
              <div class="valid-feedback">Valid Username</div>
              <div class="invalid-feedback">Invalid Username</div>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Email</label>
              <input type="email" class="form-control" name="emailsign" placeholder="Enter Email Here..." required>
              <div class="valid-feedback">Valid Email</div>
              <div class="invalid-feedback">Invalid Email</div>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Password</label>
              <input type="password" class="form-control" name="passsign" placeholder="Enter Password Here..." required>
              <div class="valid-feedback">Valid Password</div>
              <div class="invalid-feedback">Invalid Password</div>
            </div>
            <span class="text-dark">Remember Me</span>
            <input type="checkbox" checked>
            <br><br>
            <button type="submit" style="width: 100%;" class="btn btn-primary" name="signbtn">Sign Up</button><br><br>
            <button type="reset" style="width: 100%;" class="btn btn-success">Clear</button><br>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <div class="modal  fade border" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content bg-light">
        <div class="modal-header bg-dark text-center text-white">
          <h5 class="modal-title " id="exampleModalLabel">Log In To Your Account</h5>
          <button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center> <img src="images/img_avatar1.png" style="height: 400px;width:90%;" class="img-fluid img-thumbnail"></center><br>
          <center><small class="text-muted text-center">Log In To Your Account If You Have Any Account</small></center><br>
          <div style="margin-left: 12%;" class="spinner  spinner-grow spinner-grow-sm text-muted"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-primary"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-danger"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-warning"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-dark"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-success"></div><br>
          <form action="login.php" method="POST" class="was-validated">

            <div class="form-group">
              <label for="message-text" class="col-form-label">UserName</label>
              <input type="text" class="form-control" name="userlog" placeholder="Enter UserName Here..." required>
              <div class="valid-feedback">Valid UserName</div>
              <div class="invalid-feedback">Invalid UserName</div>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Password</label>
              <input type="password" class="form-control" name="passlog" placeholder="Enter Password Here..." required>
              <div class="valid-feedback">Valid Password</div>
              <div class="invalid-feedback">Invalid Password</div>
            </div>
            <span class="text-dark">Remember Me</span>
            <input type="checkbox" checked>
            <br><br>
            <button type="submit" style="width: 100%;" class="btn btn-primary" name="loginbtn">Log In</button><br><br>
            <button type="reset" style="width: 100%;" class="btn btn-success">Clear</button><br><br>
            <a style="font-size: medium;" class="text-primary" href="forgetpass.html">Forget Password ?</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <div class="modal  fade border" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content bg-light">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title" id="exampleModalLabel">Contact Me</h5>
          <button type="button" class="close  text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center> <img src="images/messenger.png" style="width:50%;" class="img-fluid "></center><br>
          <center><small class="text-muted text-center">Contact Me By Social Media Or By Sending Messege Here ...</small></center><br>
          <div style="margin-left: 12%;" class="spinner  spinner-grow spinner-grow-sm text-muted"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-primary"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-danger"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-warning"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-dark"></div>
          <div style="margin-left: 10%;" class="spinner spinner-grow spinner-grow-sm text-success"></div><br>
          <form method="POST" class="was-validated">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">User Name</label>
              <input type="text" class="form-control" name="namecon" placeholder="Enter Username Here..." required>
              <div class="valid-feedback">Valid Username</div>
              <div class="invalid-feedback">Invalid Username</div>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="email" class="form-control" name="emailcon" placeholder="Enter Username Here..." required>
              <div class="valid-feedback">Valid Email</div>
              <div class="invalid-feedback">Invalid Email</div>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Messesge</label>
              <textarea rows="10" class="form-control" name="msgcon" placeholder="Write Your Messege Here ..."></textarea>
              <div class="valid-feedback">Valid Messege</div>
              <div class="invalid-feedback">Invalid Messege</div>
            </div>
            <button type="submit" style="width: 100%;" class="btn btn-primary" name="messegebtn">Send Messege</button><br><br>
            <button type="reset" style="width: 100%;" class="btn btn-success">Clear</button><br><br><br>
            <?php
            include 'php.php';
            if (isset($_POST['messegebtn'])) {
              $name = $_POST['namecon'];
              $messege = $_POST['msgcon'];
              $email=$_POST['emailcon'];

              $insert = "Insert into messege (Username,email,msg) values('$name','$email','$messege')";
              if (mysqli_query($conn, $insert)) {
            ?>

                <script>
                  alert('Your Messege Send Successfully...Thank You !!');
                </script>
              <?php


              } else {
              ?>
                <script>
                  alert('Failed');
                </script>
            <?php





              }
            }





            ?>



            <div style="width: 100%;" class="card1 text-center text-dark">
              <img src="images/mypicture.jpg" class="img-fluid img-thumbnail" alt="John" style="width:100%;height: 900px;">
              <h1>Bahaa Hayajneh</h1>

              <p>Jordan University Science and Technology </p>
              <p>Computer Engineering</p>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/abu_wesam212/"><i class="fa fa-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=+962778343994"><i class="fa fa-whatsapp"></i></a>
              <a href="https://web.facebook.com/Bahaa.haya99"><i class="fa fa-facebook"></i></a>
              <p><button style="width: 100%;" onclick="location.href='mailto:bahaahayajneh3@gmail.com'" class="btn text-white bg-dark">Contact</button></p>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-light border text-dark ">
    <br><br>

    <h1 class="text-center">Contact Me</h1>
    <hr>
    <h4 class="text-dark text-center">Contact me by social media or Contact page</h4><br><br>
    <a style="margin-left: 47%;" href="https://twitter.com/BahaaHayajneh2"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/abu_wesam212/"><i class="fa fa-instagram"></i></a>
    <a href="https://api.whatsapp.com/send?phone=0778343994"><i class="fa fa-whatsapp"></i></a>
    <a href="https://web.facebook.com/Bahaa.haya99"><i class="fa fa-facebook"></i></a>
    <br><br><br>
    <div style="font-weight: bold;" class="text-center text-dark">Copy Right &copy;2020 By Bahaa Hayajneh </div>
    <br><br><br>
  </div>












</body>





</html>