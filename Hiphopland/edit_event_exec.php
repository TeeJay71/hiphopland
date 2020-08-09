<?php
	include("lib_db.php");
	include("util.php");
	//print_r($_FILES);exit();
	$image = upload_file_by_name("img");
	//echo "img = [{$img}]"; exit();
	
	$data = array();
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	$title = isset($_REQUEST["title"]) ? $_REQUEST["title"] : "";
	$host = isset($_REQUEST["host"]) ? $_REQUEST["host"] : "";
	$description = isset($_REQUEST["content"]) ? $_REQUEST["content"] : "";
	$date = isset($_REQUEST["date"]) ? $_REQUEST["date"] : "";
	$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : 0;
    $address = isset($_REQUEST["address"]) ? $_REQUEST["address"] : "";
    if($image==""){
        $imgsql= "select image from event where id = {$id}";
        $img = select_one($imgsql);
        $data["image"] = $img['image'];
    }else{ $data["image"]=$image;}
	// $data["cid"] = $cid;
	$data["name"] = $title;
	$data["host"] = $host;
	$data["content"] = $description;
	$data["date"] = $date;
	$data["address"] = $address;
	$tbl = "event";
	$cond = "id={$id}";
	$sql = data_to_sql_update($tbl,$data,$cond);
	// echo "sql = [{$sql}]"; exit();
	$ret = exec_update($sql);
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
    <div class="travel-content">
        <div class="travel-content-main">
            <h1>Kết quả sửa sự kiện</h1>
            <br />
            Sửa thành công
            <br />
            <br />
        </div><!-- end travel-content-main -->
        <div class="travel-content-right">
            <ul>
                <li><a href="add.php">Thêm tin tức</a></li>
                <li><a href="search.php">Danh sách tin tức</a></li>
                <li><a href="add_event.php">Thêm sự kiện</a></li>
                <li><a href="search_event.php">Danh sách sự kiện</a></li>
            </ul>
        </div><!-- end travel-content-right -->
    </div><!-- end travel-content -->
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