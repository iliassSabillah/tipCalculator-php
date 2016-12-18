<!DOCTYPE html>
<html>
  <head>
    <title>Tip Calculator</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jquery-3.1.1.min.js" defer></script>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div>
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Tip Calculator</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href=" #about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
        </div> 
        <div class="container"> 
          <div class="row span12">
            <div>
              <h1 id="title" class="text-center">Tip Calculator</h1>
            </div>
            <form method='post'>
              <?php 
                function get_option($input) {
                  // get the value from the $defaults array
                  $val = 0;

                  // but if the same value has already been posted - replace the default one
                  if (isset($_POST[$input])) {
                    $val = $_POST[$input];
                  }
                  return $val;
                }

                echo "<span>Bill subtotal: $</span><input class='form-control' type='text' placeholder='Total Bill' name='subtotal' value='".get_option('subtotal')."'>";

              ?>
              <br>
              Tip percentage:
              <br>
              <div class='radio-inline'>
                <?php 
                   
                      include 'radio.php';
                    
                 ?> 
              </div>
              <br>
              <br>
              <button type ='submit' name='submit' class='btn btn-success btn-lg'>Submit
              </button>
            </form>
            <br>
            <br>
            <div class="results">
              <?php 
               if ( isset( $_POST['submit'] ) ) {
                  include 'calculator.php';
                  }
               ?>
            </div>
          </div>
        </div>
  </div>
</body>
</html>