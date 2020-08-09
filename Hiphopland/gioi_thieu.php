<?php
	include 'lib_db.php';
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

    <div>
        <div class="card-body pt-1">
            <div class="section-title">
                <h1>Về chúng tôi</h1>
            </div>
            <p>VHDP (vanhoaduongpho.com) là cầu nối trực tuyến dành cho sự nghiệp duy trì và phát triển Hip-Hop cũng như
                nghệ thuật đường phố Việt Nam.&nbsp;<br></p>
            <p>Với kinh nghiệm hơn 20 năm sinh hoạt trong cộng đồng Hip-Hop và văn hóa đường phố Việt Nam của các thành
                viên trong nhóm. Chúng tôi tin rằng sẽ giúp các bạn hiểu rõ được về lịch sử văn hóa của Hip-Hop/ Đường
                Phố và chung tay bảo tồn mãi mãi bản sắc văn hóa đó như trong bối cảnh lịch sử sơ khai ban đầu. Bên cạnh
                đó, thông qua việc giới thiệu các hình thức thương mại hóa và toàn cầu hóa bởi mọi người từ khắp nơi
                trên thế giới, các bạn sẽ có định hướng tốt hơn trong việc hoạch định cả tương lai sự nghiệp bản thân
                mình gắn bó với sự phát triển của Hip-Hop/ Đường Phố Việt Nam.</p>
            <p>Chúng tôi là những người sinh ra, lớn lên, học tập và tập luyện trên đường phố bằng sự may mắn thừa hưởng
                một nền văn hóa đã hình thành hơn 20 năm trước đó. Từng bước tiến vững chắc, trưởng thành với nhiều cấp
                độ từ thấp đến cao và giờ đây trong bối cảnh cộng đồng đang định hình để tiến tới phát triển bền vững,
                chúng tôi tự nhận lấy thêm một phần trách nhiệm sẽ cùng truyền bá, duy trì và phát triển nó.<br><br></p>
            <p><b>CHÍNH SÁCH CỦA VHDP</b> [vanhoaduongpho.com]</p>
            <p>VHDP đánh giá cao mối quan hệ với tất cả các bạn - những người yêu văn hóa đường phố và những người chúng
                tôi hợp tác để mang đến cho bạn những nội dung thú vị hàng ngày.</p>
            <p>Chúng tôi cũng rất coi trọng các vấn đề liên quan đến an ninh mạng để chúng tôi có thể bảo vệ thông tin
                của bạn, các cộng tác viên và thương hiệu của chúng tôi. Điều rất quan trọng mà chúng tôi lưu ý là không
                tham gia vào việc thực hành chào mời hoặc lừa đảo. Bất kỳ thư từ nào từ bạn từ công ty chúng tôi nên có
                một địa chỉ email chính thức kết thúc bằng @vanhoaduongpho.com. Bất kỳ email nào bạn nhận được mà không
                có chỉ định này từ những người tự xưng là nhân viên, đại diện hoặc đối tác của VHPD (vanhoaduongpho.com)
                đều là lừa đảo và rất có thể được sử dụng để lừa đảo lấy thông tin cá nhân của bạn hoặc thậm chí trong
                một số trường hợp xấu hơn. Chúng tôi cam kết điều tra đầy đủ và thực hiện hành động pháp lý tích cực
                chống lại bất kỳ người nào hoặc những người đóng giả làm nhân viên của công ty chúng tôi hoặc tự nhận
                mình là đối tác của chúng tôi để lừa dối bạn. Điều này bao gồm theo đuổi các cáo buộc hình sự chống lại
                những người như vậy. Nếu bạn là người nhận bất kỳ email nào như vậy, vui lòng báo cáo ngay cho chúng
                tôi.</p>
            <p>Chúng tôi đánh giá cao sự giúp đỡ của bạn trong việc đảm bảo rằng VHPD (vanhoaduongpho.com) là một môi
                trường kỹ thuật số an toàn cho tất cả mọi người cùng thưởng thức.<br></p>
            <p><br>Thay lời kết, chúng tôi cam kết cùng hành động vì một tương lai của Hip-Hop, của Văn hóa đường phố
                Việt Nam có bản sắc riêng, có một cộng đồng luôn mạnh mẽ, sáng tạo, kiên trì. Trở thành một phần quan
                trọng đóng góp cho xã hội với những nhân tài, sản phẩm có tầm ảnh hưởng rộng rãi. &nbsp;<br></p>
            <p>VHDP Team</p>
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