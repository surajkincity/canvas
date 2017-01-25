<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coworking space in Pune</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

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
          <a class="navbar-brand text-logo" href="#">MyCanvas</a>
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
                 else{         $handle = fopen('leads.html','a');
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
    <div class="jumbotron subheader overlay">
      <div class="container">
        <div class='col-md bloglanding'>
        <h1>MyCanvas Blog!</h1>
        <p>We are commited towards finding new ways to boost your productivity at workspace.</p>
      </div>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/blog1.png" alt="...">
      <div class="caption">
        <h3>Title of the blog will be here, this is a sample.</h3>
        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
      </div>
    </div>
  </div>
      </div>

      <hr>

      <footer>
        <p>&copy; MyCanvas.co.in</p>
      </footer>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
