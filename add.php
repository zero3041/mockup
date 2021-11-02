<?php
    session_start();
    include("lib_db.php");
	include("suanh.php");

    $sql = "SELECT * FROM chuyenmuc ";
    $cates = select_list($sql);
    $sq= "SELECT * FROM trangchu";
    $c = select_list($sq);
    $last = end($c);
    // print_r($last).die('ok');
    $dem = $last['id'] + 1;
    // print_r($dem).die('ok');
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/form.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" >
        <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap/js/bootstrap.js"></script>
        
    </head>

<body>
    <div class="weblazada">
      <div class="lzd-header">
        <div class="header">
          <nav class="navbar navbar-expand-lg header_navbar ">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav header_navbar-list">
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link header_navbar-link-active" href="#">TIẾT KIỆM HƠN VỚI ỨNG DỤNG</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link header_navbar-link-active" href="#">BÁN HÀNG CÙNG LAZADA</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="#">CHĂM SÓC KHÁCH HÀNG</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="#">KIỂM TRA ĐƠN HÀNG</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="./login.php">ĐĂNG NHẬP</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="./register.php">ĐĂNG KÝ</a>
                    </li>
                    <li class="nav-item header_navbar-item dropdown">
                      <a class="header_navbar-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CHANGE LANGUAGE
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">VIETNAM</a></li>
                        <li><a class="dropdown-item" href="#">ENGLISH</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          <div class="header_search">
              <div class="header_search-logo">
                  <a href="./index.php"><img class="header_search-logo-img" src="images/logo.png" alt="logo"/></a>
              </div>
              <div class="header_search-action">
                      <input class="search-action_input" placeholder="Tìm kiếm trên lazada" type="text">
                      <div class="search-action_icon">
                          <i class="fas fa-search fa-3x"></i>
                      </div>
                  
                      <i class="header_search-cart fas fa-shopping-cart"></i>
                      <a href="" class="header_search-advertisenment"><img src="images/logo-momo-sale.jpg" alt="Advertisenment"/></a>
              </div>
          </div>
          <div class="menu-site-lzd">
              <div class="menu-site-container container-fluid">
                  <div class="menu-site-category ">
                      <a href="" class="menu-site-category-text">
                          <span class="category-text">
                              Danh mục
                          </span>
                      </a>
                      <i class="fas fa-angle-down fa-2x" aria-hidden="true"></i>
                      <div class="dropdown_menu">
                          <a href="" class=""><span>Thiết bị điện tử</span></a>
                          <a href="" class=""><span>Phụ kiện điện tử</span></a>
                          <a href="" class=""><span>TV & Thiết Bị Gia Dụng</span></a>
                          <a href="" class=""><span>Sức Khỏe & Làm Đẹp</span></a>
                          <a href="" class=""><span>Hàng Mẹ, Bé & Đò Chơi</span></a>
                          <a href="" class=""><span>Siêu Thị Tạp Hóa</span></a>
                          <a href="" class=""><span>Hàng Gia Dụng & Đời Sống</span></a>
                          <a href="" class=""><span>Thời Trang Nữ</span></a>
                          <a href="" class=""><span>Thời Trang Nam</span></a>
                          <a href="" class=""><span>Phụ Kiện Thời Trang</span></a>
                          <a href="" class=""><span>Thể Thao & Du lịch</span></a>
                          <a href="" class=""><span>Ô tô, Xe Máy & Thiết Bị Định Vị</span></a>
                      </div>
                  </div>
                  <nav class="menu-site-labels">
                    <a href="#" class="menu-site-labels-items">
                      <span class="menu-site-labels-items-icon">
                        <img class="menu-site-labels-items-icon-img" src="images/lazzmail.png" alt="">
                      </span>
                      <span class="menu-site-labels-text">LazMall</span>
                    </a>
                    <a href="#" class="menu-site-labels-items">
                      <span class="menu-site-labels-items-icon">
                        <img class="menu-site-labels-items-icon-img" src="images/mgg.png" alt="">
                      </span>
                      <span class="menu-site-labels-text">Mã giảm giá</span>
                    </a>
                    <a href="#" class="menu-site-labels-items">
                      <span class="menu-site-labels-items-icon">
                        <img class="menu-site-labels-items-icon-img" src="images/napthe-voucher.png" alt="">
                      </span>
                      <span class="menu-site-labels-text">Nạp Thẻ & eVoucher</span>
                    </a>
                    <a href="#" class="menu-site-labels-items">
                      <span class="menu-site-labels-items-icon">
                        <img class="menu-site-labels-items-icon-img" src="images/global.png" alt="">
                      </span>
                      <span class="menu-site-labels-text">LazGlobal</span>
                    </a>
                  </nav>
              </div>  
            </div>           
        </div> 
      </div>

      <!-- container -->
        <div class="container"> 
            <div class="row">
                <div class="add-menu">
                    <h1 class="add-menu-title">THÊM SẢN PHẨM</h1>
                    <h2><?php 
                            if( isset($_SESSION["thongbao"])) {
                                echo $_SESSION["thongbao"];
                                unset($_SESSION["thongbao"]); 
                            }
                        ?>
                    </h2>
                </div>
                <form class="form form-sets" action="add_exec.php" method="post"  enctype="multipart/form-data">
                    <label class="form-label">Chọn chuyên mục</label>
                    <select class="form-select form-select-lg" name="cid">
                        <option value="">Chọn chuyên mục</option>
                    <?php foreach ($cates as $item) {?>
                    
                        <option value="<?php echo $item["id"]?>"><?php echo $item["name"]?></option>
                    <?php } ?>
                    </select>
                        
                    <div class="clear-both"></div>
                    <label class="form-label">Chọn ảnh ( Lưu ý đổi tên thành 1,2,3 ....)</label>
                    <input class="form-control .form-control-lg" type="file" name="img" value=""/>
                    <div class="clear-both"></div>
                    <label class="form-label">Tiêu đề sản phẩm</label>
                    <textarea class="form-control .form-control-lg" name="cardname" value=""></textarea>
                    <div class="clear-both"></div>
                    <label class="form-label">Giá bán</label>
                    <input class="form-control .form-control-lg" name="cardprice" value=""/>
                    <div class="clear-both"></div>
                    <label class="form-label">Giá gốc</label
                    ><input class="form-control .form-control-lg" name="currentprice" value=""/>
                    <div class="clear-both"></div>
                    <label class="form-label">Giảm giá</label>
                    <input class="form-control .form-control-lg" name="currentsaleoff"></input>
                    
                    <div class="clear-both"></div>
                    <button class="btn btn-success btn-lg " >Thêm</button>
                    
                    <a href="./admin.php" class="btn btn-primary btn-lg xoa-cl">Quản lí</a>
                    <!-- <a class="btn btn btn-danger btn-lg quanli-cl">Xóa</a> -->
                    
                </form>
                

            </div>                    
        </div>


      <!-- footter -->
      <div class="footer">
        <div class="footer-first">
            <div class="grid">
                <!-- <div class="footer-card">
                    <div class="footer-card-list row">
                        <img
                            class="footer-card-img col-sm-7 col-lg-4"
                            src="images/img-ad-footer-1.png"
                            alt=""
                        />
                        <img
                            class="footer-card-img col-sm-7 col-lg-4"
                            src="images/img-ad-footer-2.png"
                            alt=""
                        />
                        <img
                            class="footer-card-img col-sm-7 col-lg-4"
                            src="images/img-ad-footer-3.png"
                            alt=""
                        />
                    </div>
                </div> -->
                <div class="footer-contact">
                    <div class="footer-contact_1">
                        <div class="footer-contact_1-1">
                            <span>LIÊN HỆ VỚI LAZADA</span>
                            <ul class="contact_1-1-list">
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Thứ 2 đến CN: 9h - 18h (Hotline), 7h - 22h (chat trực
                                tuyến)
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Trung tâm hỗ trợ
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Hướng dẫn đặt hàng
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Giao hàng & Nhận hàng
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Chính sách hàng nhập khẩu
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Hướng dẫn đổi trả hàng
                                </a>
                            </li>
                            </ul>
                        </div>
                        <div class="footer-contact_1-1">
                            <span>LAZADA VIỆT NAM</span>
                            <ul class="contact_1-1-list">
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Về Lazada Việt Nam
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Bán hàng cùng Lazada
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Chương trình Lazada Afﬁliate
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Tuyển dụng
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Điều khoản mua bán hàng hóa
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Chính sách bảo mật
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Báo chí
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Bảo vệ quyền sở hữu trí tuệ
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Quy chế hoạt động sàn Lazada
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Điều Khoản Công Cụ Tương Tác
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-contact_2">
                        <div class="footer-contact_2-header">
                            <div class="footer-contact_2-info-img logo-small-footer"></div>
                            <div class="footer-contact_2-info-contact">
                            <span class="go-where" >Go where your heart beats</span
                            >
                            <span class="tai-app-lzd" >Tải App Lazada</span>
                            </div><img class="footer-contact_2-info-download"src="images/img-app-1.png"alt=""/>
                                  <img class="footer-contact_2-info-download" src="images/img-app-2.png" alt=""/>
                              </div>
                        <div class="footer-contact_2-info">
                            <div>CÔNG TY TNHH RECESS</div>
                            <div>
                            Giấy CNĐKDN: 0308808576 – Ngày cấp: 06/5/2009, được sửa đổi
                            lần thứ 19 ngày 15/8/2019.
                            </div>
                            <div>
                            Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu
                            tư TP.HCM
                            </div>
                            <div>
                            Địa chỉ đăng ký kinh doanh: Tầng 19, Tòa nhà Saigon Centre –
                            Tháp 2, 67 Lê Lợi, Phường Bến Nghé, Quận 1, Tp. Hồ Chí Minh,
                            Việt Nam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-second">
            <div class="grid footer-second-content">
                <div class="footer-second-1">
                    <div class="footer-second-1-title">CÁCH THỨC THANH TOÁN</div>
                    <div class="footer-second-1-icon payment-visa"></div>
                    <div class="footer-second-1-icon payment-mastercard"></div>
                    <div class="footer-second-1-icon payment-jcb" ></div>
                    <div class="footer-second-1-icon payment-cash-on"></div>
                    <div class="footer-second-1-icon payment-napas" ></div>
                    <div class="footer-second-1-icon payment-logo"></div>
                    <div class="footer-second-1-icon payment-zalo"></div>
                    <div class="footer-second-1-icon payment-momo"></div>
                </div>
                <div class="footer-second-2">
                    <div class="footer-second-2-1">
                    <div class="footer-second-2-1-title">DỊCH VỤ GIAO HÀNG</div>
                    <div class="footer-second-2-1-list">
                        <span class="footer-second-2-1-item"></span>
                        <span class="footer-second-2-1-item"></span>
                        <span class="footer-second-2-1-item"></span>
                        <span class="footer-second-2-1-item"></span>
                        <img class="footer-second-2-1-img" src="images/best-express.png" alt="" >
                        <img class="footer-second-2-1-img" src="images/ahamove.png" alt="">
                    </div>
                    </div>
                    <div class="footer-second-2-1">
                        <div class="footer-second-2-1-title">CHỨNG NHẬN</div>
                        <div class="footer-second-2-1-1-a">
                            <img class="footer-second-2-1-1-img logo-pci" src="images/pcidss.png" alt="">
                            <img class="footer-second-2-1-1-img logo-fake" src="images/noikhonghanggia.png" alt="">
                            <img class="footer-second-2-1-1-img logo-iso" src="images/iso.png" alt="">
                        </div>
                        <div class="footer-second-2-1-1-b">
                            <img class="footer-second-2-1-1-img" src="images/dangky-bocongthuong.png" alt="">
                            <img class="footer-second-2-1-1-img" src="images/dathongbao-bocongthuong.png" alt="">
                            <img class="footer-second-2-1-1-img" src="images/dangky-bocongthuong.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-third">
            <div class="grid">
                <div class="footer-third-title">
                    <div class="footer-third-title-1">
                        <span >Lazada Southeast Asia</span>
                        <a class="footer-third-title-1-link laz-southeast-1" href="#"></a>
                        <a class="footer-third-title-1-link laz-southeast-2" href="#"></a>
                        <a class="footer-third-title-1-link laz-southeast-3" href="#"></a>
                        <a class="footer-third-title-1-link laz-southeast-4" href="#"></a>
                        <a class="footer-third-title-1-link laz-southeast-5" href="#"></a>
                        <a class="footer-third-title-1-link laz-southeast-6" href="#"></a>
                    </div>
                    <div class="footer-third-title-2">
                        <span >Kết nối với chúng tôi</span>
                        <a class="footer-third-title-1-link connection-1" href="#"></a>
                        <a class="footer-third-title-1-link connection-2" href="#"></a>
                        <a class="footer-third-title-1-link connection-3" href="#"></a>
                        <a class="footer-third-title-1-link connection-4" href="#"></a>
                        <a class="footer-third-title-1-link connection-5" href="#"></a>
                        <a class="footer-third-title-1-link connection-6" href="#"></a>
                    </div>
                    <div class="footer-third-title-2 c-lazada">© Lazada 2020</div>
                </div>
            </div>
        </div>
    </div> 
    <!-- end web -->
  </div>
</body>