<?php
    session_start();
    $contact = array(
        "Yogesh" => "9717797354",
    );
    
    // Load the predifined list if not already loaded
    if (!isset($_SESSION["contact"])) {
        $_SESSION["contact"] = $contact;
    }

    // if new contact added
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"]) && isset($_POST["mobile"])) {
            if (isset($_POST["name"]) && isset($_POST["mobile"])) {
                $name = $_POST["name"];
                $number = $_POST["mobile"];
                $appendArray = array(
                    $name => $number
                );

                // create new array by merging the existing one and the new data.
                $newList = array_merge($_SESSION["contact"], $appendArray);
                $_SESSION["contact"] = $newList;
            }
        }
    }
?>
<form method="post" action="">
<label for="">Name</label>
<input type="text" name="name"/>
<label for="">Mobile</label>
<input type="text" name="mobile"/>
<input type="submit" name="submit"/>
</form>
<table>
  <tr>
    <th>S.NO</th>
    <th>NAME</th>   
    <th>MOBILE</th>
    <th>Action</th>
  </tr>
  <?php
    $cl = $_SESSION["contact"];
    $size = 0;
    foreach ($cl as $name => $number) {
  ?>
    <tr>
      <td><?php echo ++$size; ?></td>
      <td><?php echo $name; ?></td>
      <td><?php echo $number; ?></td>
    </tr>
  <?php } ?>
</table>

