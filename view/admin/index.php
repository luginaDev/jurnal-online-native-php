<?php 
include "../../core/JurnalController.php";

include"header.php"; 
include"sidebar.php";
$data = new JurnalController;
    if (isset($_POST['btn-simpan'])) {
    $judul =  $_POST['judul'];
        $slug = $_POST['slug'];
        $body = $_POST['body'];
        $published =  $_POST['published'];
        $printissn = $_POST['printissn'];
        $eissn =  $_POST['eissn'];
        $source = $_FILES['source'];
        $created_at = '';
        $response = $data->validateFile();
       
        if ($response['types'] == "true") {
            $values = " '', '$response[file]','$slug',  '$judul', '$body',  '$printissn', '$eissn', '$published',  '1' ";
            
        }
      $response =  $data->insert('jurnal', $values);
    }
?>
<div class="page-wrapper">
    <?php include"navbar.php" ?>
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">upload jurnal</li>
            </ol>
        </nav>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Form upload jurnal</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">judul</label>
                                        <input type="text" class="form-control" name="judul" placeholder="judul" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder required>
                                    </div>
                                </div><!-- Col -->
                            </div>
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Body</h4>
                                            <textarea class="form-control" name="body" id="simpleMdeExample" rows="10" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Published</label>
                                        <input type="date" class="form-control" name="published" required="">
                                    </div>
                                </div><!-- Col -->
                                <button type="submit" name="btn-simpan" class="btn btn-primary submit ml-2 mb-4 float-right">publish</button>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Print ISSN</label>
                                        <input type="text" class="form-control" name="printissn" placeholder="ISSN" required="">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label"> e-ISSN </label>
                                        <input type="text" class="form-control" name="eissn" autocomplete="off" placeholder="e-ISSN" required="">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <h6 class="card-title">file jurnal</h6>
                            <p class="card-description">PDF <a href=""></p>
                            <input type="file" id="myDropify" name="source" required="" class="border" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php include"footer.php" ?>