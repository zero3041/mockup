<?php
    include('lib_db.php');
    // include('check_login.php');
    session_start();
    if(isset($_COOKIE['username']))
        header("location:index.php")
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/login.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" >
        <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap/js/bootstrap.js"></script>
        <script>
            $(document).ready(function(){
                $('.button-dangnhap').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        url: "http://localhost:8000/mockup/login_submit.php",
                        method: 'post',
                        dataType: 'json',
                        data: {
                            username: $('[name="username"]').val(),
                            password: $('[name="password"]').val(),
                            submit_dangnhap: 1,
                            ajax: 1
                        }
                        }).done(function(res) {
                            
                            if(res.success){
                                window.location= "http://localhost:8000/mockup/index.php";
                            }else{
                                alert(res.mes);
                                return;
                            }
                            
                        });
                })
                })
        </script>
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
                      <a class="header_navbar-link header_navbar-link-active" href="#">TI???T KI???M H??N V???I ???NG D???NG</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link header_navbar-link-active" href="#">B??N H??NG C??NG LAZADA</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="#">CH??M S??C KH??CH H??NG</a>
                    </li>
                    <li class="nav-item header_navbar-item">
                      <a class="header_navbar-link" href="#">KI???M TRA ????N H??NG</a>
                    </li>
                    <?php
                            if(!isset($_COOKIE['username'])){
                            echo '<li class="header_navbar-item nav-item">
                              <a href="./login.php" class="header_navbar-link">
                                ????NG NH???P
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="./register.php" class="header_navbar-link">
                                ????NG K??
                              </a>';
                            }else
                            {
                            echo '<li class="header_navbar-item nav-item">
                              <a href="./admin.php" class="header_navbar-link">
                                ADMIN
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="./logout.php" class="header_navbar-link">
                                ????NG XU???T
                              </a>
                              </li>';
                            }

                              ?>
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
                      <input class="search-action_input" placeholder="T??m ki???m tr??n lazada" type="text">
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
                              Danh m???c
                          </span>
                      </a>
                      <i class="fas fa-angle-down fa-2x" aria-hidden="true"></i>
                      <div class="dropdown_menu">
                          <a href="" class=""><span>Thi???t b??? ??i???n t???</span></a>
                          <a href="" class=""><span>Ph??? ki???n ??i???n t???</span></a>
                          <a href="" class=""><span>TV & Thi???t B??? Gia D???ng</span></a>
                          <a href="" class=""><span>S???c Kh???e & L??m ?????p</span></a>
                          <a href="" class=""><span>H??ng M???, B?? & ???? Ch??i</span></a>
                          <a href="" class=""><span>Si??u Th??? T???p H??a</span></a>
                          <a href="" class=""><span>H??ng Gia D???ng & ?????i S???ng</span></a>
                          <a href="" class=""><span>Th???i Trang N???</span></a>
                          <a href="" class=""><span>Th???i Trang Nam</span></a>
                          <a href="" class=""><span>Ph??? Ki???n Th???i Trang</span></a>
                          <a href="" class=""><span>Th??? Thao & Du l???ch</span></a>
                          <a href="" class=""><span>?? t??, Xe M??y & Thi???t B??? ?????nh V???</span></a>
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
                      <span class="menu-site-labels-text">M?? gi???m gi??</span>
                    </a>
                    <a href="#" class="menu-site-labels-items">
                      <span class="menu-site-labels-items-icon">
                        <img class="menu-site-labels-items-icon-img" src="images/napthe-voucher.png" alt="">
                      </span>
                      <span class="menu-site-labels-text">N???p Th??? & eVoucher</span>
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
          <div class="login">
              <div class="login-title">
                  <H3>Ch??o m???ng ?????n v???i Lazada. ????ng nh???p ngay!</H3>
              </div>
              <div class="login-menu">
                  <form action="login_submit.php" method="POST">
                      <div class="login-main">
                          <div class="login-main-left">
                            <p><?php
                                if( isset($_SESSION["thongbao"])) {
                                    echo $_SESSION["thongbao"];
                                    unset($_SESSION["thongbao"]);
                                } 
                              ?>
                            <div class="login-main-name login-set">
                                <label>T??n t??i kho???n</label>
                                <input name="username" type="text" placeholder="Vui l??ng nh???p t??i kho???n">
                                <span></span>
                            </div>
                            <div class="login-main-pass login-set">
                                <label>M???t kh???u</label>
                                <input name="password" type="password" placeholder="Vui l??ng nh???p m???t kh???u">
                                <span></span>
                            </div>
                          </div>
                          <div class="login-main-right">
                            <div class="login-button button-login">
                                <button type="submit" name="submit_dangnhap" class="button-dangnhap">????NG NH???P</button>
                            </div>
                            <div class="login-button button-login">
                                <button type="submit" name="submit-dangky" class="button-dangky">????NG K??</button>
                            </div>
                          </div>
                      </div>
                  </form>
              </div>
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
                            <span>LI??N H??? V???I LAZADA</span>
                            <ul class="contact_1-1-list">
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Th??? 2 ?????n CN: 9h - 18h (Hotline), 7h - 22h (chat tr???c
                                tuy???n)
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Trung t??m h??? tr???
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                H?????ng d???n ?????t h??ng
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Giao h??ng & Nh???n h??ng
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                Ch??nh s??ch h??ng nh???p kh???u
                                </a>
                            </li>
                            <li class="contact_1-1-item">
                                <a href="" class="contact_1-1-link">
                                H?????ng d???n ?????i tr??? h??ng
                                </a>
                            </li>
                            </ul>
                        </div>
                        <div class="footer-contact_1-1">
                            <span>LAZADA VI???T NAM</span>
                            <ul class="contact_1-1-list">
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    V??? Lazada Vi???t Nam
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    B??n h??ng c??ng Lazada
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Ch????ng tr??nh Lazada Af???liate
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Tuy???n d???ng
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    ??i???u kho???n mua b??n h??ng h??a
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Ch??nh s??ch b???o m???t
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    B??o ch??
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    B???o v??? quy???n s??? h???u tr?? tu???
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Quy ch??? ho???t ?????ng s??n Lazada
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    ??i???u Kho???n C??ng C??? T????ng T??c
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
                            <span class="tai-app-lzd" >T???i App Lazada</span>
                            </div><img class="footer-contact_2-info-download"src="images/img-app-1.png"alt=""/>
                                  <img class="footer-contact_2-info-download" src="images/img-app-2.png" alt=""/>
                              </div>
                        <div class="footer-contact_2-info">
                            <div>C??NG TY TNHH RECESS</div>
                            <div>
                            Gi???y CN??KDN: 0308808576 ??? Ng??y c???p: 06/5/2009, ???????c s???a ?????i
                            l???n th??? 19 ng??y 15/8/2019.
                            </div>
                            <div>
                            C?? quan c???p: Ph??ng ????ng k?? kinh doanh ??? S??? k??? ho???ch v?? ?????u
                            t?? TP.HCM
                            </div>
                            <div>
                            ?????a ch??? ????ng k?? kinh doanh: T???ng 19, T??a nh?? Saigon Centre ???
                            Th??p 2, 67 L?? L???i, Ph?????ng B???n Ngh??, Qu???n 1, Tp. H??? Ch?? Minh,
                            Vi???t Nam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-second">
            <div class="grid footer-second-content">
                <div class="footer-second-1">
                    <div class="footer-second-1-title">C??CH TH???C THANH TO??N</div>
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
                    <div class="footer-second-2-1-title">D???CH V??? GIAO H??NG</div>
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
                        <div class="footer-second-2-1-title">CH???NG NH???N</div>
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
                        <span >K???t n???i v???i ch??ng t??i</span>
                        <a class="footer-third-title-1-link connection-1" href="#"></a>
                        <a class="footer-third-title-1-link connection-2" href="#"></a>
                        <a class="footer-third-title-1-link connection-3" href="#"></a>
                        <a class="footer-third-title-1-link connection-4" href="#"></a>
                        <a class="footer-third-title-1-link connection-5" href="#"></a>
                        <a class="footer-third-title-1-link connection-6" href="#"></a>
                    </div>
                    <div class="footer-third-title-2 c-lazada">?? Lazada 2020</div>
                </div>
            </div>
        </div>
    </div> 
    <!-- end web -->
  </div>
</body>