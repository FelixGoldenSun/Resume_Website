<?php

$page_title = "Projects - Retrofit";

require "templates/header.php";


?>

<!-- Main -->
<main>
  <div class="row align-center">
    <div class="small-12 large-10 column" id="content_wrapper">
      <div class="row align-center">
        <div class="small-12 medium-6 column">
          <h3 id="page_title">Future Value Calculator</h3>

          <label for="investment">Investment Amount</label>
          <input type="text" id="investment"><br>

          <label for="rate">Annual Interest Rate</label>
          <input type="text" id="rate"><br>

          <label for="years">Number of Years</label>
          <input type="text" id="years"><br>

          <label for="future_value">Future Value</label>
          <input type="text" id="future_value" disabled="disabled">

          <input  type="button" id="calculate" value="Calculate"> <input type="button" id="clear" value="Clear"><br>
          <br>

        </div>
      </div>
      <div class="row">
        <div class="small-12 column">
          <br>
          <p>This project is just a simple calculator for future value, made in JavaScript. </p>
          <p>Not JQuery mind you, just JavaScript. Not much to it, but it does check the input to insure that the values are valid for the calculations.
            It uses alerts, so if you have those turned off you might not see anything if you enter a incorrect value. </p>
          <p>Check out the source code on <a href="https://github.com/FelixGoldenSun/Future_Value_Calculator">GitHub</a>. </p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
