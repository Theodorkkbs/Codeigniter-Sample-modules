
<!DOCTYPE html>
<html>
   <head>
     <title>Excel to My SQL import</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
   <body>
     <div class="container">
      <br />
      <h3 align="center">Staff Information Excel Upload</h3>
      <br />
        <div class="panel panel-default">
          <div class="panel-body">
          <div class="table-responsive">
           <span id="message"></span>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/excel_importer/import">
                <table class="table">
                  <tr>
                    <td width="25%" align="right">Select Excel File</td>
        			<input type="file" name="file" class="form-control" id="exampleInputFile">
                    <td width="25%"><button type="submit" class="btn btn-primary">Submit</button></td>
                  </tr>
                </table>
              </form>
           <br />
              
          </div>
          </div>
        </div>
     </div>

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>
<script>
$(document).ready(function(){
  $('#import_excel_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"import.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('#import').attr('disabled', 'disabled');
        $('#import').val('Importing...');
      },
      success:function(data)
      {
        $('#message').html(data);
        $('#import_excel_form')[0].reset();
        $('#import').attr('disabled', false);
        $('#import').val('Import');
      }
    })
  });
});
</script>