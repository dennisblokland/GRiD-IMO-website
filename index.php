<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GRiD IMO</title>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'header.php';?>
    <div class="container">
      <div class="row">
  <div class="col-sm-8 welkom">  <h1>Welkom </h1>
    <img src="images/GRID_logo.gif"  style="float: left; padding-right: 10px;">
  <p> Lorem test ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales, leo sed mattis eleifend, nisl magna pretium est, sit amet scelerisque nunc ex eu dolor. Aenean bibendum ante id ipsum pellentesque fringilla at ac ligula. Nunc posuere sodales ipsum vitae blandit. Aliquam erat volutpat. Phasellus tempus rhoncus accumsan. In nulla lacus, lacinia in rutrum sed, consectetur sed metus. Fusce dictum tristique ligula nec hendrerit. Vestibulum lobortis fermentum volutpat. Aliquam massa lacus, rhoncus nec scelerisque vel, fermentum eu nunc. Vivamus eget condimentum dolor.

Donec sollicitudin felis massa, a tempor lacus eleifend in. Curabitur suscipit non erat et laoreet. Maecenas ut neque quis urna tincidunt tristique a ut mauris. Nulla fringilla semper cursus. Duis dignissim maximus elit et semper. Donec blandit sem a nisl dignissim sodales. Aenean ultricies tempus metus, et sagittis diam congue non.

Nulla condimentum magna odio, vitae porttitor erat laoreet eu. Sed tincidunt dui tortor, eu interdum dolor ullamcorper vitae. Phasellus non lacus sit amet dui semper elementum. Sed viverra nisl sapien, vitae volutpat nulla iaculis vitae. Vivamus malesuada varius consectetur. Aenean in odio velit. Phasellus velit leo, ullamcorper vitae arcu non, iaculis blandit dui. Donec lacus nisl, sodales vel porta non, pretium et leo. Phasellus eu blandit sapien. Duis rhoncus hendrerit nisl et varius. Nulla facilisi. Donec sit amet augue in justo dictum efficitur id non leo. Aliquam in sagittis risus. Donec vel erat malesuada, tincidunt dolor ut, aliquam eros. Pellentesque at sagittis augue, sed tristique urna. Proin condimentum eleifend mauris, in maximus odio convallis vel.

Quisque semper, ex sit amet venenatis lacinia, nunc felis cursus tellus, non porta sapien sapien ac purus. Donec tristique leo eu mattis dictum. Fusce porta nisi diam, eu condimentum ante dictum ut. Nunc rhoncus egestas ex ac feugiat. Pellentesque sit amet erat est. Maecenas eget nunc malesuada, vehicula sem sit amet, egestas ligula. Quisque nec nunc odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam tempus quam eget felis pharetra, eget mollis enim rutrum. Vestibulum quis consectetur magna. In consectetur, metus non finibus tempor, elit eros elementum massa, vehicula cursus enim velit eu erat. Suspendisse dictum auctor magna, nec mollis eros tristique nec. Cras eu arcu non nulla vehicula imperdiet ut ut tortor.

Donec mollis risus ac lectus porttitor, non mollis dolor volutpat. Quisque aliquam diam elit, sit amet tempor diam aliquet vel. Mauris sed egestas erat. Donec venenatis dapibus leo, sed consequat quam viverra in. Curabitur pellentesque in neque id fermentum. Ut egestas lectus suscipit dapibus porttitor. Ut commodo nibh sed sollicitudin faucibus. Nunc lobortis pharetra ultricies. Vestibulum porta ut nibh nec ultricies.</p>
  </div>
  <div class="col-sm-4 news_container">  <h1>News</h1>
  <div  class='pre-scrollable'>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "grid_imo";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM news";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $news_content = $row["text"];
          echo "
<div class='news_object'>
    <h3>$title</h3>
    <p>$news_content</p>
    </div>
          ";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
  ?>
  </div>
</div>
  </div>
  </body>
</html>
