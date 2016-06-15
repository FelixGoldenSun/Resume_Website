<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title ?></title>
  <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
  <link rel="stylesheet" href="css/app.css" />
</head>
<body>
  <!-- Header -->
  <header>
    <h1><a href="/index.php">Ben Walls</a></h1>

    <nav>
      <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
        <button class="menu-icon " type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>

      <div class="row" id="main-menu" >
        <div class="small-12 column" >
          <ul class="vertical medium-horizontal menu align-center" data-responsive-menu="drilldown medium-dropdown" id="main-menu-ul">
            <li><a href="/index.php">About Me</a></li>
            <li><a href="/resume.php">My Resume</a></li>
            <li>
              <a href="#">Projects</a>
              <ul class="vertical menu">
                <li><a href="#">PHP</a>
                  <ul class="vertical menu">
                    <li><a href="/calendar.php">Calendar</a></li>
                  </ul>
                </li>
                <li><a href="#">Ruby / Rails</a></li>
                <li><a href="#">Azure Sites</a>
                  <ul class="vertical menu">
                    <li><a href="/cook_nook.php">Cook Nook</a></li>
                  </ul>
                </li>
                <li><a href="#">HTML 5 / CSS 3</a>
                  <ul class="vertical menu">
                    <li><a href="/retrofit.php">Responsive Retrofit</a></li>
                  </ul>
                </li>
                <li><a href="#">Android / IOS</a>
                <li><a href="#">JavaScript / JQuery</a>
                  <ul class="vertical menu" >
                    <li><a href="/future_value.php">Future Value Calculator</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="/contact.php">Contact Me</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

