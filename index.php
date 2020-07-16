<?php 
	include 'core/JurnalController.php';
	include"header.php";
	$data = new JurnalController;
	$collection = $data->index('jurnal');

	 ?>
<!-- Blog Page Grid Area Start -->
<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="section-title extra">
                    <h2 class="title">Jurnal Online Politeknik LP3I Bandung</h2>
                    <p style="text-align: justify;
  text-justify: inter-word;">
                        Jurnal Online Politeknik LP3I Bandung dikembangkan sebagai media karya ilmiah mahasiswa dan dosen, baik hasil penelitian maupun tulisan ilmiah berupa hasil studi kepustakaan khusus di bidang ilmu Administrasi Bisnis, Manajemen Informatika, Akuntansi dan Hubungan Masyarakat.
                        Diharapkan dengan adanya media jurnal online ini akan menambah khasanah pengetahuan dan tukar menukar informasi ilmiah terutama hasil-hasil penelitian yang akan banyak manfaatnya terutama bagi pembangunan di Indonesia.
                        Untuk Registrasi sebagai AUTHOR silahkan pilih salah satu Jurnal yang sesuai bidang ilmu dibawah ini.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <i class="flaticon-art"></i>
                        </div>
                        <h4 class="title">Interactive Design</h4>
                        <p class="text">
                            Viewing hastily or written dearest elderly up weather. direction so sweetness, Donec dearest justo eget
                            felis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <i class="flaticon-apps"></i>
                        </div>
                        <h4 class="title">Install Apps</h4>
                        <p class="text">
                            Viewing hastily or written dearest elderly up weather. direction so sweetness, Donec dearest justo eget
                            felis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box">
                    <div class="inner-box">
                        <div class="img">
                            <img src="assets/images/blog/img1.png" alt="<?= $value['slug'] ?>">
                        </div>
                        <h4 class="title">GPS Tracking</h4>
                        <p class="text">
                            Viewing hastily or written dearest elderly up weather. direction so sweetness, Donec dearest justo eget
                            felis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-page single-blog-area">
    <div class="container">
        <div class="row">
            <?php foreach ($collection as $value): ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="img">
                        <img src="assets/images/blog/img1.png" alt="<?= $value['slug'] ?>">
                    </div>
                    <div class="content">
                        <ul class="top-meta">
                            <li>
                                <p class="date">
                                    Print ISSN :
                                    <?= $value['printissn'] ?>
                                </p>
                            </li>
                            <li>
                                <p class="post-by">
                                    e-ISSN :
                                    <?= $value['eissn'] ?>
                                </p>
                            </li>
                        </ul>
                        <a href="jurnal_detail.php?slug=<?= $value['slug'] ?>">
                            <h4 class="title">
                                <?= $value['judul']  ?>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Blog Page Grid Area End -->
<?php include"footer.php"; ?>