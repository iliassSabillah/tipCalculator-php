<!DOCTYPE html>
<html>
  <head>
    <title>Tip Calculator</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                function get_val($input) {
                  //default input value
                  $val = 100;
                  // but if the same value has already been posted - replace the default one
                  if (isset($_POST[$input])) {
                    $val = $_POST[$input];
                  }
                  return $val;
                }
                  function get_Custom_val($input) {
                  //default input value
                  $val = '';
                  // but if the same value has already been posted - replace the default one
                  if (isset($_POST[$input])) {
                    $val = $_POST[$input];
                  }
                  return $val;
                }
                function check_radio($input) {
                    if(isset($_POST['submit'])){
                        if(isset( $_POST[$input])){     
                           return 'checked';
                        }
                        else return false;
                    }
                }
                echo "<span>Bill subtotal: $</span><input class='form-control' type='text' pattern='[1-9]\d*' placeholder='Total Bill' name='subtotal' value='".get_val('subtotal')."'>";
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
              <label class='radio-inline'>
                <?php echo "<input type='radio' checked='" . check_radio('tipPercentage'). "' name='tipPercentage' value='" . get_Custom_val('customInput') . "'> Custom
                <input type='text' name='customInput' width='5px' id='customTip' value='". get_Custom_val('customInput'). "'>% "?>
              </label>
              
              <br>
              <br>
              <button type ='submit' name='submit' class='btn btn-success btn-lg nohover'>Submit
              </button>
            </form>
            <br>
            <br>
            <div class="results">
              <?php 
               if ( isset( $_POST['submit'] ) ) {
                  include 'result.php';
                  }
               ?>
            </div>
          </div>
        </div>
  </div>
</body>
</html>