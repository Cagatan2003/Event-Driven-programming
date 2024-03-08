<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <Script src="./assets/js/search.js"></Script>
</head>

<?php

?>
<body>
  <strong>Search : </strong>
  <input onkeyup="Search(this.value)" type="text" placeholder="Search Anything Here....">
  <hr>
<table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th width="300">Pet ID</th>
        <th style="text-align: center; padding-left:10px">Pet Name</th>
        <th width="300">owner</th>
        <th width="300">contact No.</th>
      </tr>
    </thead>
<tbody id="results">

</tbody>
</body>

</html>