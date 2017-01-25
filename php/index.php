<!DOCTYPE html>
    {% load staticfiles %}
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coworking space in Pune : Canvas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


  </head>
  <body style=" background-image: url(img/background.jpg);">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-logo" href="#">MyCanvas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-right menu" style="">
            <a href=''> About </a>  <a href=''> Blog </a>  <a href=''> Contact </a>

          </div>





        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class='landing' >
    <div class='container'>
      <div class='row'>
         <div class='col-md-12 center'>

           <h1>Coworking space in Pune</h1>
           <p>For Entrepreneurs who care about working environment and  productivity.</p>
         </div>

         <div class='col-md-12 center'>

           <?php
           $action=$_REQUEST['action'];
           if ($action=="")    /* display the contact form */
               {
               ?>

               <form  class="form-inline cta" action="" method="POST" enctype="multipart/form-data" >

           <input type="hidden" name="action" value="Send">

           <input type="text" class="form-control" id="exampleInputEmail1" name='website' placeholder="Name" style="    display: inline;padding:20px;">
           <input type="text" class="form-control" id="exampleInputEmail1" name='email' placeholder="Mobile" style="    display: inline;width:199px;padding:20px;margin-right: 5px;">

                       <button type="submit" class="btn btn-success" style="padding:10px;"> <b>Get Quote</b> </button>



                       <?php
                       }
                       else                /* send the submitted data */
                       {
                       $website=$_REQUEST['website'];
                       $email=$_REQUEST['email'];

                         if (($website=="")||($email==""))
                           {
                           echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                           }
                          else{         $handle = fopen('leads.html','a');
                         fwrite($handle,  "<b>email:</b> ".$email." , "."<b>website:</b>".$website."  <br>");


                       fclose($handle);


                           echo "<br><br><br><p style='text-align:center;color:white;font-size:16px;'>Thanks, One of our team members will contact you shortly.</h2>";
                           }
                       }
                       ?>

</form>
         </div>
       </div>
     </div>
   </div>

   <div class='describe'>

     <div class='container'>
       <div class='row'>
        <div class='col-md-12'>

          <div class="col-md-6">

            <img src='img/descriptionimage.png'>
          </div>
          <div class="col-md-6">

            <p class='description'>We go beyond providing Desk and Wifi. Our goal is to boost the overall productivity of our coworkers by
            providing them with the right working environment. Along with a thriving community to share and grow. </p>
          </div>
        </div>
        </div>

      </div>
    </div>


     <div class="footer">

       <div class='container'>
         <div class='row'>
           <footer>
             <p>&copy; MyCanvas.co.in</p>
           </footer>
          </div>

        </div>

      </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
