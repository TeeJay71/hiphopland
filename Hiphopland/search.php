<?php
	include 'lib_db.php';
	$topSql = "SELECT * FROM news order by id desc limit 5 ";
	$sql="SELECT * FROM news order by id desc";
	$cate_sql="select name from news_category";
			 
	//1.1 Kiểm tra sql đúng không?
	//echo $sql; exit();
	//1.2 Thự thi
	$data = select_list($topSql);
	$data1 = select_list($sql);
	$cate = select_list($cate_sql);
	$a=array();
	$i=0;
	foreach($cate as $cate){
		$a[$i]=$cate['name'];	
		$i++;
	}
	// echo $a[1];exit();
 	//kiểm tra kết quả
	// print_r($data1["0"]["title"]); exit();
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Giới Thiệu</a>
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
            <h1>Danh sách bài viết</h1>
            <br />
            <table>
                <tr>
                    <th>Id</th>
                    <th>Mục</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($data1 as $item) {
				 $b = $item['cid'];
				?>
                <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $a[$b-1];?></td>
                    <td class="title-search"><?php echo $item['title'];?></td>
                    <td class="content-search"><?php echo $item['content'];?></td>
                    <td><a href="edit.php?id=<?php echo $item['id'];?>">Edit</a></td>
                    <td><a href="del_exec.php?id=<?php echo $item['id'];?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
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