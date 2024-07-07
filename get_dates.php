<?php

include("admin/connect.php");
$course = $_POST['course'];

echo '<select name="date_selected" id="" class="formBox" style="width:150%; margin-left:-40px;"> 
              <option value="" selected disabled>Choose your preferred Date</option>';


$query = "select * from courses where courses = '$course'";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$dates = explode(',',$row['available_dates']);

for($i=0; $i<count($dates); $i++)
{
    echo '<option>'.$dates[$i].'</option>';
}

echo '</select>';


?>
