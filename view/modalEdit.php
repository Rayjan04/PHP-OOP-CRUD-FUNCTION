<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('../Control/CRUD_Control.php')?>
    
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Set New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form action="#" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" name="fullname1"class="form-control" id="exampleInputEmail1" placeholder="Enter new fullname" value="<?php  ?>" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" name="email1" class="form-control" id="exampleInputPassword1" placeholder="Enter new Email">
                        </div >
                              <input type="submit" name="Savechange" value="Savechange" class="btn btn-info">
                        </form>
                </div>
                </div>
            </div>
</div>
</body>
</html>