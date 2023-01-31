<?php include 'header.php' ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Upload File</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Upload File</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

            <!-- /.card-header -->
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group">
                    <label for="file">Pilih file</label>
                    <input type="file" name="NamaFile" id="file" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <input type="button" class="btn bg-maroon" onclick="history.back();" value="Cancel">
                    <input type="submit" class="btn btn-primary" name="proses" value="Upload">
                </div>
            </form>
            <?php
            if(isset($_POST['proses'])) {

                $direktori = "direktori/";
                $file_name = $_FILES['NamaFile']['name'];
                move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

                mysqli_query($conn, "INSERT INTO dokumen SET file='$file_name'");

                echo "<script>alert('Berhasil Upload!');window.location='index.php'</script>";
            } 
            
            
            ?>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


<?php include 'footer.php'  ?>