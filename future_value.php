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

          <label for="investment">Investment Amount:</label>
          <input type="text" id="investment"><br>

          <label for="rate">Annual Interest Rate:</label>
          <input type="text" id="rate"><br>

          <label for="years">Number of Years:</label>
          <input type="text" id="years"><br>

          <label for="future_value">Future Value:</label>
          <input type="text" id="future_value" disabled="disabled">

          <input  type="button" id="calculate" value="Calculate"> <input type="button" id="clear" value="Clear"><br>
          <br>

        </div>
      </div>
      <div class="row">
        <div class="small-12 column">
          <p>This was a project to turn an existing site into a responsive one. It’s now readable on mobile and tablet screens. </p>
          <p>I definitely underestimated how hard it would be to use the existing styles. T
            he original site was written with a bunch of redundant styles, and used tables to create the layout (Never a good thing).
            Eventually, I had to start over from scratch. I did use code for the mobile menu, and a reset file to remove all of the default styles.
            Any styles that could be salvaged were kept in, but that was mostly just fonts and colors.
            One of the elements I’m proud of was a grid system I made that made it easy to create elements in rows and columns.
            It turned out pretty well, I think.</p>
          <p>Check out the source code on <a href="https://github.com/FelixGoldenSun/Future_Value_Calculator">GitHub</a>. </p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require "templates/footer.php";

?>
