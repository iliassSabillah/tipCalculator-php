
  <?php
      
          $subtotal = $_POST['subtotal'];
          $tip = $_POST['tipPercentage'];
          $tipAmount = ($tip * $subtotal)/100;
          $total = $subtotal+ $tipAmount;

          if(isset($tip)){
            echo 
              "<p>
                <strong>Tip:&nbsp; 
                $<span id='tip'>".$tipAmount ."</span>
                </strong>
              </p>";  //  Displaying Selected Value
            
            
            echo 
            "<p>
              <strong>Total:&nbsp; 
                $<span id='total'>".$total ."</span>
              </strong>
            </p>";
            }
      
  ?>

<!-- <p><strong>Split Total:&nbsp; <span id="splitTotal"></span></strong></p> -->