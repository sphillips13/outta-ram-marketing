<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Outta Ram Marketing</title>

<style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover, .supplements:hover .dropbtn {
      background-color: red;
    }

    li.supplements {
      display: inline-block;
    }

    .supplements-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .supplements-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .supplements-content a:hover {background-color: #f1f1f1;}

    .supplements:hover .supplements-content {
      display: block;
    }
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li class="supplements">
    <a href="javascript:void(0)" class="dropbtn">Supplements</a>
    <div class="supplements-content">
      <a href="../Supplements/IkariaLeanBellyJuice.php">Ikaria Lean Belly Juice</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li style="float:right"><a href="#about">About</a></li>

</ul>

<h3>Currently in Development</h3>

   <?php
        echo 'Currently in Development';
    ?>

</body>
</html>


