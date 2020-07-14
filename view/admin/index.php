<?php 
include"header.php"; 
include"sidebar.php";
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
        <div class="row">
            <div class="col-md-8 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Form upload jurnal</h6>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">judul</label>
                                        <input type="text" class="form-control" name="judul"  placeholder="judul">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="">
                                    </div>
                                </div><!-- Col -->
                            </div>
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Body</h4>
                                            <textarea class="form-control" name="body" id="simpleMdeExample" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                           
                        </form>
                        
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
                                    <input type="date" class="form-control" name="published">
                                </div>
                            </div><!-- Col -->
                           <button type="submit" class="btn btn-primary submit ml-2 mb-4 float-right">publish</button>
                        </div><!-- Row -->
                     
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Print ISSN</label>
                                    <input type="text" class="form-control" name="printissn" placeholder="ISSN">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"> e-ISSN </label>
                                    <input type="text" class="form-control" name="eissn" autocomplete="off" placeholder="e-ISSN">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <h6 class="card-title">file jurnal</h6>
                        <p class="card-description">PDF <a href=""></p>
                        <input type="file" id="myDropify" name="source" class="border" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"footer.php" ?>