<?php 
include "core/JurnalController.php";
include"header.php"; 
$data = new JurnalController;
if (isset($_GET['slug'])) {
	$where  = $_GET['slug'];
	$collection =  $data->selectWhere($where);
	$latestpost =  $data->limit('jurnal');

}else{
	header('location:index.php');
}

?>


	<!-- Blog Page Grid Area Start -->
	<section class="blog-page single-blog-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php foreach ($collection as $value): ?>
						          <div class="single-blog-details">
              <div class="img">
                  <img src="assets/images/blog/blog-details.png" alt="">
              </div>
              <div class="content">
                  <ul class="top-meta">
                      <li>
                          <p class="date">
                             publish : <?= $value['published'] ?>
                          </p>
                      </li>
                      <li>
                          <p class="date">
                             Print ISSN : <?= $value['printissn'] ?>
                          </p>
                      </li>
                      <li>
                          <p class="post-by">
                              e-ISSN : <?= $value['eissn'] ?>
                          </p>
                      </li>
                  </ul>
                  <a href="#">
                      <h4 class="title">
                        	<?= $value['judul']  ?>
                      </h4>
                  </a>
                  <div class="text-area">
                      <p>
                          <?= $value['body']  ?>
                      </p>
                  </div>
              </div>
          </div>
					<?php endforeach ?>


				</div>
				<div class="col-lg-4">
					<div class="newsletter-widget">
						<h4 class="title">
								Looking for something
						</h4>
						<form action="#" method="get">

							<input type="text" class="input-field" name="term" placeholder="Go..">
							<button type="submit" class="mybtn2">
                <span>Search</span>
              </button>
						</form> 
					</div>
					<div class="latest-post-widget">
						<h4 class="title">
							Latest Post
						</h4>
						<ul class="post-list">
							<li>
								<div class="post">
									<div class="post-img">
										<img src="assets/images/blog/img1.png" alt="">
									</div>
									<?php foreach ($latestpost as $latest): ?>
										<div class="post-details">
										<a href="#" class="post-title">
											<?= $latest['judul'] ?>  
										</a>
									</div>
									<?php endforeach ?>
									
								</div>
							</li>
						
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Blog Page Grid Area End -->

<?php include "footer.php" ?>