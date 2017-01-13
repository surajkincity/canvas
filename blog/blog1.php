<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coworking space in Pune</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-logo" href="../#">MyCanvas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">












          <form action="" method="POST"  class="navbar-form navbar-right">
<?php
            $action=$_REQUEST['action'];
            if ($action=="")    /* display the contact form */
                {
                ?>
            <input type="hidden" name="action" value="Send">
            <div class="form-group">
              <input type="text" placeholder="Email" name='email' class="form-control">
            </div>

            <button type="submit" class="btn btn-success"> Subscribe! </button>




<?php
              }
          else                /* send the submitted data */
              {
              $website=$_REQUEST['website'];
              $email=$_REQUEST['email'];

              if ($email=="")
                  {
                  echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                  }
                 else{         $handle = fopen('../leads.html','a');
                fwrite($handle,  "<b>email:</b> ".$email." , "."<b>website:</b>".$website."  <br>");


           fclose($handle);


                  echo "<b style='color:white;padding:10px;'>Subscribed!</b>";
                  }
              }
          ?>  </form>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron subheader overlay blog">
      <div class="container">
        <div class='col-md-2'></div>
        <div class='col-md-8  bloglanding'>
        <h1>Title of the blog will be here, this is a sample.</h1>

      </div>
  <div class='col-md-2'></div>

      </div>
    </div>

    <div class="container content">
      <!-- Example row of columns -->
      <div class="row">
        <div class='col-md-2'>
        </div>

         <div class='col-md-8'>
           <!--<span class='sub right'> 02 Jan 2016</span><br> -->

           <p>Disclaimer: I’m not an expert in neural networks or machine learning. Since originally writing this article, many people with far more expertise in these fields than myself have indicated that, while impressive, what Google have achieved is evolutionary, not revolutionary. In the very least, it’s fair to say that I’m guilty of anthropomorphising in parts of the text.
           </p>
           <h2>This is our he title,  expert in neural networks or machine learning.</h2>
           <p>Disclaimer: I’m not an expert in neural networks or machine learning. Since originally writing this article, many people with far more expertise in these fields than myself have indicated that, while impressive, what Google have achieved is evolutionary, not revolutionary. In the very least, it’s fair to say that I’m guilty of anthropomorphising in parts of the text.
           </p>
           <p>Disclaimer: I’m not an expert in neural networks or machine learning. Since originally writing this article, many people with far more expertise in these fields than myself have indicated that, while impressive, what Google have achieved is evolutionary, not revolutionary. In the very least, it’s fair to say that I’m guilty of anthropomorphising in parts of the text.
           </p>


           <hr><b>Comments</b><br><br>
  <?php include 'blog1.html';?><br>

         </div>
         <div class='col-md-2'>
         </div>

      </div>
      <div class="row">
      <div class='col-md-2'>
      </div>

       <div class='col-md-8'>

      <form action="" method="POST"  class="">
<?php
        $action=$_REQUEST['action1'];
        if ($action=="")    /* display the contact form */
            {
            ?>
        <input type="hidden" name="action1" value="Send">
        <div class="form-group">
          <input name='pot' style="display:none;"> </input>

          <textarea type="text" style="width:100%;height:100px;" placeholder="Write your connet here." name='email' class="form-control"></textarea>
        </div>
<input type="text" placeholder="Name" name='name' style="width:150px;" class="form-control left"> </input>
        <button type="submit" class="btn btn-success right" > Post! </button>




          <?php
          }
      else                /* send the submitted data */
          {
          $website=$_REQUEST['website'];
          $email=$_REQUEST['email'];
          $pot=$_REQUEST['pot'];
          $name=$_REQUEST['name'];
          $comment= str_replace("<a","<a rel='nofollow' ", $email);
          $name1= str_replace("<a","<a rel='nofollow' ", $name);

          if ($email=="" or $pot!="")
              {
              echo "All fields are required, please fill the form again.";
              }
          else{
            $handle = fopen('blog1.html','a');
            fwrite($handle, '<p><b> '    .$name1. ':</b>'  .$comment.  '</p><hr>' );


       fclose($handle);
       echo("<p>" .$comment. "</p>");



              }
          }
      ?>  </form>
    </div>
    <div class='col-md-2'>
    </div>
  </div>

      <hr>


    </div>



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class='col-md-2'>
        </div>

         <div class='col-md-8'>
    <footer>
      <p>&copy; MyCanvas.co.in</p>
    </footer>
</div>
<div class='col-md-2'>
</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
