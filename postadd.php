<?php include 'includes/session.php'; ?>


<style>
  
#contentt{
background-image: url("images/back6.jpg");
}

#contenttt{
background-image: url("images/back6.jpg");
}

</style>
<?php
if (!isset($_SESSION['user'])) {
  header('location: index.php');
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomm";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper" >
      <div class="container" >

        <!-- Main content -->
        <section class="content" >
          <div class="row" >
            <div class="col-sm-9">
              <?php
              if (isset($_SESSION['error'])) {
                echo "
                    <div class='callout callout-danger'>
                      " . $_SESSION['error'] . "
                    </div>
                  ";
                unset($_SESSION['error']);
              }

              if (isset($_SESSION['success'])) {
                echo "
                    <div class='callout callout-success'>
                      " . $_SESSION['success'] . "
                    </div>
                  ";
                unset($_SESSION['success']);
              }
              ?>
              <div class="box box-solid" id="contentt" >
                <div class="box-body"  >
                  <div class="col-sm-3"  >
                    <img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" width="100%">
                  </div>
                  <div class="col-sm-9" >
                    <div class="row" >
                      <div class="col-sm-3" style="color:white">
                        <h4>Name:</h4>
                        <h4>Email:</h4>
                        <h4>Contact Info:</h4>
                        <h4>Address:</h4>
                        <h4>Member Since:</h4>
                      </div>
                      <div class="col-sm-9" style="color:white">
                        <h4><?php echo $user['firstname'].' '.$user['lastname']; ?>
                          <span class="pull-right">
                            <a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
                          </span>
                        </h4>
                        <h4><?php echo $user['email']; ?></h4>
                        <h4><?php echo (!empty($user['contact_info'])) ? $user['contact_info'] : 'N/a'; ?></h4>
                        <h4><?php echo (!empty($user['address'])) ? $user['address'] : 'N/a'; ?></h4>
                        <h4><?php echo date('M d, Y', strtotime($user['created_on'])); ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="box-body" id="contenttt" style="color:white">
                    <!-- ------------ -----------------    -->

                    <form method="POST" action="products_add.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Name</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <label for="category" class="col-sm-1 control-label">Category</label>

                        <div class="col-sm-5">
                          <select class="form-control" name="category" required>

                            <?php

                            $sql = "SELECT id,name FROM category";
                            $result = $connect->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["id"] . "' selected>- " . $row["name"] . " -</option>";
                              }
                            } else {
                              echo "0 results";
                            }

                            $connect->close();



                            ?>

                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="price" class="col-sm-1 control-label">Price</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <label for="photo" class="col-sm-1 control-label">Photo</label>

                        <div class="col-sm-5">
                          <input type="file" id="photo" name="photo">
                        </div>
                      </div>
                      <p><b>Description</b></p>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <textarea id="editor1" name="description" rows="10" cols="80" required></textarea>
                        </div>

                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                    </form>

                    <!-------------------------------------------->

                    <!-- Description -->
                    <div class="modal fade" id="description">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><b><span class="name"></span></b></h4>
                          </div>
                          <div class="modal-body">
                            <p id="desc"></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Add -->
                    <div class="modal fade" id="addnew">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><b>Add New Product</b></h4>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="products_add.php" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="name" class="col-sm-1 control-label">Name</label>

                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <label for="category" class="col-sm-1 control-label">Category</label>

                                <div class="col-sm-5">
                                  <select class="form-control" id="category" name="category" required>
                                    <option value="" selected>- Select -</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="price" class="col-sm-1 control-label">Price</label>

                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="price" name="price" required>
                                </div>

                                <label for="photo" class="col-sm-1 control-label">Photo</label>

                                <div class="col-sm-5">
                                  <input type="file" id="photo" name="photo">
                                </div>
                              </div>
                              <p><b>Description</b></p>
                              <div class="form-group">
                                <div class="col-sm-12">
                                  <textarea id="editor1" name="description" rows="10" cols="80" required></textarea>
                                </div>

                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Update Photo -->
                    <div class="modal fade" id="edit_photo">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><b><span class="name"></span></b></h4>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                              <input type="hidden" class="prodid" name="id">
                              <div class="form-group">
                                <label for="photo" class="col-sm-3 control-label">Photo</label>

                                <div class="col-sm-9">
                                  <input type="file" id="photo" name="photo" required>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--         ------------------------------------------------------------------------------->
                  </div>
                </div>
              </div>
              <div class="col-sm-3">

              </div>
            </div>
        </section>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/profile_modal.php'; ?>
  </div>

  <?php include 'includes/scripts.php'; ?>

  <script>
    $(function() {
      $(document).on('click', '.transact', function(e) {
        e.preventDefault();
        $('#transaction').modal('show');
        var id = $(this).data('id');
        $.ajax({
          type: 'POST',
          url: 'transaction.php',
          data: {
            id: id
          },
          dataType: 'json',
          success: function(response) {
            $('#date').html(response.date);
            $('#transid').html(response.transaction);
            $('#detail').prepend(response.list);
            $('#total').html(response.total);
          }
        });
      });

      $("#transaction").on("hidden.bs.modal", function() {
        $('.prepend_items').remove();
      });
    });
  </script>
</body>

</html>