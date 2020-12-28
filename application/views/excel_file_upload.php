<?php
$connect = mysqli_connect("localhost", "root", "", "errand_db");
$output = '';
if(isset($_POST["import"]))
{
 $tmp = explode(".", $_FILES["excel"]["name"]);
 $extension=end($tmp); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $query = "INSERT INTO register(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title>Excel File Uploader</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 

<style >
  .buttoncenter{
    text-align: center;
  }

</style>

</head>
 <body>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-6 ">
   <h3 align="center">Import Excel to Mysql</h3><br />
   <form>
   <div class="form-group">
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input class="form-control" type="file" name="excel" />
    <br />
    <div class="buttoncenter">
    <input style="" type="submit" name="import" class="btn btn-success" value="Import" />
    </div>
   </form>
   <br />
   <br />
   </div>
</div>
   </div>
   </div>
   <div class="row justify-content-center">
    <div class="col-md-6 ">
  <h1>Staff Information</h1>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th>
      Name 
      </th>
      <th>
      Email 
      </th>
    </tr>
  </thead>
  <tbody>
    
          <?php foreach($alldata as $data): ?>

      <tr>
        <td>
          <?php echo $data->excel_name; ?>
        </td>
            <td>
              <?php echo $data->excel_email; ?>
              </td>
      <?php endforeach; ?>
      </tr>


  </tbody>


</table>
</div>
</div>
  </div>
 </body>
</html>