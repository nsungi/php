


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../boottutorial/bootstrap-5.2.0-dist/css/bootstrap.css">
    <title>  </title>
</head>
<body>

<h2>Example of using events of Modal Plugin</h2>
<!-- Button trigger modal --> 




<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 Launch demo modal
</button> 

<p id="modal"></p>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
 aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal"
 aria-hidden="true">×
 </button>
 <h4 class="modal-title" id="myModalLabel">
 This Modal title
 </h4>
 </div>
 <div class="modal-body">
 Click on close button to check Event functionality.
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default"
 data-dismiss="modal">
 Close
 </button>
 <button type="button" class="btn btn-primary">
 Submit changes
 </button>
 </div>
 </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
 $(function () { $('#myModal').modal('hide')})});
</script>
<script>
 $(function () { $('#myModal').on('hide.bs.modal', function () {
 alert('Hey, I heard you like modals...');})
 }); 
 document.getElementById("modal").innerHTML = txt;

</script>


</body>
</html>
