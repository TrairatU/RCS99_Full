<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RCS99 - Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <img src="{{asset('frontend/assets/images/logo.png')}}">
                    </a>
                    <ul class="nav">
                        <li><a href="/">หน้าแรก</a></li>
                        <li><a href="{{route('about')}}">เกี่ยวกับเรา</a></li>
                        <li><a href="/deals" class="active">ร้านค้า</a></li>
                        <li><a href="{{route('login')}}">เข้าสู่ระบบ</a></li>
                        <li><a href="{{route('register')}}">สมัครสมาชิก</a></li>
                    </ul>   
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading-text">
          <h4>เราคืออู่ทำรถ PCX ADV Click ย่านวิภาวดี</h4>
          <h2>ซ่อมเร็ว ปลอดภัย ขับไกลถึงเมืองนอก</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>รวมงานบริการและสินค้าจากร้าน RCS99 <br>
            🙏🏻ดูแลเหมือนญาติมิตร เต็มที่ทุกคันครับ🙏🏻</h2>
          </div>
        </div>
        
        @foreach ($product as $p)
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{asset('backend/upload/resize/'.$p->image)}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                <span class="info">*Engine Parts</span>
                  <h4>{{ $p->name }}</h4>
                  <div class="row">
                    <div class="col-6">
                      <!-- <i class="fa fa-clock"></i> -->
                      <span class="list">รุ่นที่เข้ากันได้</span>
                    </div>
                    <div class="col-6">
                      <!-- <i class="fa fa-map"></i> -->
                      <span class="list">PCX ADV Click</span>
                    </div>
                  </div>
                  <p>{{ $p->description }}</p>
                  <div class="main-button">
                    <a href="" target="_blank" >สั่งซื้อสินค้า</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-12">
          <ul class="page-numbers">
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
          <br><br><br>
        </div>
      </div>
    </div>
  </div>

  <footer id="app-footer"></footer>


  <!-- Scripts -->
  <script async src="{{asset('frontend/vendor/jquery/loadInstance.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
  <script src="{{asset('frontend/assets/js/tabs.js')}}"></script>
  <script src="{{asset('frontend/assets/js/popup.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>