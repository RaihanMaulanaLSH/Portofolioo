<?php
use yii\helpers\Html;

use backend\models\About;
use backend\models\Kontak;
use backend\models\Skill;
use backend\models\Porto;
use backend\models\Mitra;
use backend\models\Testi;




/** @var yii\web\View $this */

$this->title = 'Portofolio';
$basePath = 'skydash';
$abouts = About::find()->all();
$kontaks = Kontak::find()->all();
$skills = SKill::find()->all();
$portos = Porto::find()->all();
$mitras = Mitra::find()->all();
$testii = Testi::find()->all();

?>
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hello</h3>
							<h1 class="text-uppercase">Raihan Maulana </h1>
							<h5 class="text-uppercase">Junior Website developer And Networking Engginer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/green.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    
	<!--================ Start About Us Area =================-->
    <section id="aboutSection" class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
			<div class="col-lg-5">
            <?php foreach ($abouts as $about) : ?>
    <?php
    $backendUrl = 'http://localhost/portofl/backend'; // Sesuaikan dengan URL backend Anda
    $imageUrl = $backendUrl . '/web/' . $basePath . $about->gambar;
    ?>
    <?= Html::img($imageUrl, ['style' => 'max-width: 100%; height: auto; margin-left: 150px;']); ?>
<?php endforeach; ?>

    </div>
				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>let’s <br>
							Introduce about <br>
							myself</h2>
							<?php foreach ($abouts as $about) : ?>
							
									<p>
										<?= Html::encode($about->deskripsi); ?>
									</p>
								
							<?php endforeach; ?>

						<p>
							Quotes Hari ini..
						</p>
						<?php foreach ($abouts as $about) : ?>
							
							<p>
								<?= Html::encode($about->quotes); ?>
							</p>
						
					<?php endforeach; ?>
						<a class="primary_btn" href="#"><span>Know me More</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section id="ServicesSection" class="brand_area section_gap_bottom">
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row">

                <?php foreach ($mitras as $mitra) : ?>
                    <?php
                    $backendUrl = 'http://localhost/portofl/backend'; // Sesuaikan dengan URL backend Anda
                    $imageUrl = $backendUrl . '/web/' . $basePath . $mitra->gambar;
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <?= Html::img($imageUrl, ['width' => '300', 'style' => 'margin-left: px;']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div  class="offset-lg-2 col-lg-4 col-md-6">
            <div  class="client-info">
                <div class="d-flex mb-50">
                    <span class="lage">2</span>
                    <span class="smll">Years Experience Working</span>
                </div>
                <div class="call-now d-flex">
                    <div>
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="ml-15">
                        <p>call us now</p>
                        <?php foreach ($kontaks as $kontak) : ?>
                            <p>
                                <?= Html::encode($kontak->nohp); ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section id="SkillSection" class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Skill Yang Di Punyai </h2>
						<p>
							Ini adalah beberapa Skill yang saya miliki dan kedepan nya akan lebih banyak lagi <br> dan sudah di kembangkan sejak SMK
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
			<?php
$gambarServices = [
    'img/services/s1.png',
    'img/services/s2.png',
    'img/services/s3.png',
    'img/services/s4.png',
    // Tambahkan URL gambar lainnya sesuai kebutuhan
];

foreach ($skills as $skill) :
    // Pilih gambar secara acak dari daftar
    $randomImage = $gambarServices[array_rand($gambarServices)];
    ?>
    <div class="col-lg-3 col-md-6">
        <div class="feature_item">
            <!-- Ganti src dengan URL gambar yang dipilih secara acak -->
            <img src="<?= Html::encode($randomImage); ?>" alt="<?= Html::encode($skill->nama); ?>">

            <h4><?= Html::encode($skill->nama); ?></h4>
			<p>
    <?= Html::encode(substr($skill->deskripsi, 0, 150)); ?>...
</p>
        </div>
    </div>
<?php endforeach; ?>
</div>

</div>

		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portofolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>Portfolio <br>
							Yang Sudah Saya Kerjakan </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
    <div class="row portfolio-grid justify-content-center">
        <?php foreach ($portos as $porto) : ?>
            <?php
            $backendUrl = 'http://localhost/portofl/backend'; // Sesuaikan dengan URL backend Anda
            $imageUrl = $backendUrl . '/web/' . $basePath . $porto->gambar;
            ?>
            <div class="col-lg-4 col-md-6 all">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="<?= Html::encode($imageUrl); ?>" alt="<?= Html::encode($porto->judul); ?>">
                        <div class="overlay"></div>
                        <a href="<?= Html::encode($imageUrl); ?>" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a href="portfolio-details.html"><?= Html::encode($porto->judul); ?></a></h4>
                        <p><?= Html::encode($porto->deskripsi); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div id="TestiSection" class="testimonial_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>Testimonial</h2>
                    <p>Beberapa kata-kata dari rekan atau pelanggan mengenai saya</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testi_slider owl-carousel">
                <?php foreach ($testii as $testi) : ?>
                    <?php
                    $backendUrl = 'http://localhost/portofl/backend'; // Sesuaikan dengan URL backend Anda
                    $imageUrl = $backendUrl . '/web/' . $basePath . $testi->gambar;

                    // Cek apakah gambar tersedia
                    $imagePath = Yii::getAlias('@app/web' . $basePath . $testi->gambar);
                    if (file_exists($imagePath) && is_file($imagePath)) {
                        // Tentukan ukuran maksimal gambar
                        $maxWidth = 400;
                        $maxHeight = 300;

                        // Dapatkan ukuran gambar
                        list($width, $height) = getimagesize($imagePath);

                        // Hitung rasio untuk menghindari distorsi gambar
                        $ratio = min($maxWidth / $width, $maxHeight / $height);

                        // Tentukan dimensi baru
                        $newWidth = $width * $ratio;
                        $newHeight = $height * $ratio;
                    } else {
                        // Jika gambar tidak tersedia, tentukan dimensi default
                        $newWidth = 150;
                        $newHeight = 150;
                    }
                    ?>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <?= Html::img($imageUrl, ['alt' => 'Testimonial Image', 'width' => $newWidth, 'height' => $newHeight]); ?>
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4><?= Html::encode($testi->nama); ?></h4>
                                    <p><?= Html::encode($testi->deskripsi); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">get update from anywhere</h2>
						<p class="text-white">
							Bearing Void gathering light light his eavening unto dont afraid. 
						</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
								<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline">Get Started</button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>