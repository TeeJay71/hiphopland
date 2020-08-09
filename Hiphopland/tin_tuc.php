<?php
	include 'lib_db.php';
	$topSql = "SELECT * FROM news where cid =1 order by id desc limit 3 ";
    $sql="SELECT * FROM news where cid =1 order by id desc";
    $sql_right="SELECT * FROM news order by id desc";
	//1.1 Kiểm tra sql đúng không?
	//echo $sql; exit();
	//1.2 Thự thi
	$data = select_list($topSql);
    $data1 = select_list($sql);
    $data_right = select_list($sql_right);
 	//kiểm tra kết quả
	// print_r($data1["0"]["title"]); exit();
	// echo $data['0']['image'];exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HiphopLand</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="style/css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css-fa/all.min.css">
    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <div class="container-fluid header">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 logo">
                        <div class="row">
                            <a href="index.php">
                                <img src="images/streetculturevn.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 mb-nav">
                        <div class="row">
                            <nav class="navbar navbar-expand-lg w-100">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <i class="fas fa-bars navbar-toggler-icon"></i>
                                </button>
                                <div class="collapse navbar-collapse w-100" id="navbarHeader">
                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 textHeader w-100">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="su_kien.php">Sự Kiện</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tin_tuc.php">Tin Tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="kien_thuc.php">Kiến Thức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="loi_song.php">Lối Sống</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gioi_thieu.php">Giới Thiệu</a>
                                        </li>

                                        <a class="btn search-btn" data-toggle="collapse" href="#collapseSearch"
                                            role="button" aria-expanded="false" aria-controls="collapseSearch">
                                            <i class="fas fa-search"></i>
                                        </a>
                                        <div class="collapse search-btn" id="collapseSearch">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                                aria-label="Search">
                                        </div>
                                        <li class="nav-item">
                                            <button type="button" class="btn btn-black">Đăng sự kiện</button>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide show hightligt  -->
    <div class="container mtc">
        <div class="row">
            <h2> Tin tức </h2>
        </div>
    </div>

    <!-- Main content  -->
    <div class="container main-content ">
        <div class="row">
            <div class="content col-lg-8">
                <div class="row hot-new flex">
                    <div class="col-7-dm card-hn">
                        <img src="<?php echo $data['0']['image'] ?>">
                        <div class="detail-hn-t1">
                            <a class="alert" href="detail.php?id=<?php echo $data['0']['id']?>">
                                <p class="title"><?php echo $data['0']['title'] ?></p>
                            </a>
                            <div class="flex-box">
                                <p><i
                                        class="fas fa-folder"></i> Tin tức</p>
                                <p><i
                                        class="fas fa-clock"></i><?php echo date('d/m/Y',strtotime($data["0"]["date"])); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-dm card-hn">
                        <div class="card-hn-m">
                            <img src="<?php echo $data['1']['image'] ?>">
                            <div class="detail-hn-t1">
                                <a class="alert" href="detail.php?id=<?php echo $data['1']['id']?>">
                                    <p class="title"><?php echo $data['1']['title'] ?></p>
                                </a>
                                <div class="flex-box">
                                    <p> <i
                                        class="fas fa-folder"></i>Tin tức</p>
                                    <p><i
                                            class="fas fa-clock"></i><?php echo date('d/m/Y',strtotime($data["1"]["date"])); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-hn-m">
                            <img src="<?php echo $data['2']['image'] ?>">
                            <div class="detail-hn-t1">
                                <a class="alert" href="detail.php?id=<?php echo $data['1']['id']?>">
                                    <p class="title"><?php echo $data['2']['title'] ?></p>
                                </a>
                                <div class="flex-box">
                                    <p><i
                                        class="fas fa-folder"></i> Tin tức</p>
                                    <p> <i
                                            class="fas fa-clock"></i><?php echo date('d/m/Y',strtotime($data["2"]["date"])); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
			$a = 0;
			foreach($data1 as $data){
				$a++;
				if($a>3){
					echo '<div class="row content-item">
					<img src="'.$data["image"].'">
					<div class="float-right">
						<a href="#"><h5>'.$data["title"].'</h5></a>
						<p class="time-upload"><i class="fas fa-clock"></i>';
					echo date('d/m/Y',strtotime($data["date"]));
					// echo $data["date"];
					echo '</p>
						<p class="previewer">'.$data["content"].'</p>
						</div>
					</div>';
				}
			}
			?>
            </div>
            <div class="side-bar col-lg-4">
                <div class="row">

                    <div class="sidebar-news">
                        <h4>Tin Nổi Bật</h4>
                        <?php
							$b =0;
							foreach($data_right as $data){
								$b++;
								if($b<6){
								echo '<div class="sidebar-item">
								<img src="'.$data["image"].'">
								<div class="float-right">
                                <a href="detail.php?id='.$data["id"].'">   
                                <p class="previewer">'.$data["title"].'</p>
                             </a>
									</div>
								</div>';
								}
							}
						?>
                    </div>

                    <div class="event-ads">
                        <a href="#">
                            <img src="images/event.gif">
                        </a>
                    </div>

                    <div class="event-ads">
                        <a href="#">
                            <img src="images/event.gif">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <footer class="container-fluid footer-area">
        <div class="row ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 logo-ft">
                        <a href="index.php">
                            <img src="images/logo-white.png">
                        </a>
                        <div class="contact-info mt-3">
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <a class="my-mail" href="mailto:info@vanhoaduongpho.com"
                                        target="_blank">info@vanhoaduongpho.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 offset-4 social-ft">
                        <h4>Social connect</h4>
                        <div class="social-connect-dm mt-3">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p>Copyright © 2019 VanHoaDuongPho. All Rights Reserved.</p>
                        </div>

                        <div class="col-lg-4 offset-2">
                            <ul class="footer-nav">
                                <li><a href="/">Trang chủ</a></li>
                                <li><a href="https://vanhoaduongpho.com/tin-tuc">Tin tức</a></li>
                                <li><a href="https://vanhoaduongpho.com/gioi-thieu">Giới thiệu</a></li>
                                <li><a href="https://vanhoaduongpho.com/lien-he">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/js-bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/js-bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/js-fa/all.min.js"></script>
</body>

</html>