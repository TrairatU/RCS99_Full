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
                    <a href="{{route('welcome')}}" class="logo">
                        <img src="{{asset('frontend/assets/images/logo.png')}}">
                    </a>
                    <ul class="nav">
                        <li><a href="{{route('welcome')}}">หน้าแรก</a></li>
                        <li><a href="{{route('about')}}">เกี่ยวกับเรา</a></li>
                        <li><a href="{{route('deals')}}" class="active">ร้านค้า</a></li>
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

  <!-- <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-2">
                <h4>สินค้าที่ต้องการค้นหา:</h4>
              </div>
              <div class="col-lg-4">
                  <fieldset>
                      <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                          <option selected>เลือกสินค้า</option>
                          <option type="checkbox" name="option1" value="ชุดชามปรับองศา PCX,ADV,Click ">ชุดชามปรับองศา PCX,ADV,Click </option>
                          <option value="ชุดชามปรับองศา PCX160,ADV160 ">ชุดชามปรับองศา PCX160,ADV160 </option>
                          <option value="ชุดชามปรับองศา Click160">ชุดชามปรับองศา Click160</option>
                          <option value="ชุดชามปรับองศา FORZA350,ADV350">ชุดชามปรับองศา FORZA350,ADV350</option>
                          <option value="ชุดชามแท้ปรับองศา Xmax">ชุดชามแท้ปรับองศา Xmax</option>
                          <option value="ชุดชามแท้ปรับองศา vaspa Spin150-200">ชุดชามแท้ปรับองศา vaspa Spin150-200</option>
                          <option value="ชุดชามเม็ดปรับองศา Nmax,Aerox">ชุดชามเม็ดปรับองศา Nmax,Aerox</option>
                          <option value="สายพาน PCX,ADV,Click,Forza แท้จาก Honda ">สายพาน PCX,ADV,Click,Forza แท้จาก Honda</option>
                          <option value="กะโหลกกัดลาย PCX,ADV,Click">กะโหลกกัดลาย PCX,ADV,Click</option>
                          <option value="กะโหลกกัดลาย FORZA350,ADV350">กะโหลกกัดลาย FORZA350,ADV350</option>
                          <option value="กะโหลกคลัชกัดลาย Nmax,Aerox,Lexi">กะโหลกคลัชกัดลาย Nmax,Aerox,Lexi</option>
                          <option value="ชิวหน้า ADV150/ADV160 ผลิตจากคาบอนแท้">ชิวหน้า ADV150/ADV160 ผลิตจากคาบอนแท้</option>
                          <option value="ท่อกรองอากาศสเตนเลส พร้อมยางกันน้ำ PCX,ADV">ท่อกรองอากาศสเตนเลส พร้อมยางกันน้ำ PCX,ADV</option>
                          <option value="เฟืองคู่ FORZA350,ADV350">เฟืองคู่ FORZA350,ADV350</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-4">
                  <fieldset>
                      <select name="Price" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                          <option selected>ราคาสินค้า</option>
                          <option value="100">$100 - $250</option>
                          <option value="250">$250 - $500</option>
                          <option value="500">$500 - $1,000</option>
                          <option value="1000">$1,000 - $2,500</option>
                          <option value="2500+">$2,500+</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-2">                        
                  <fieldset>
                      <button class="border-button">ค้น</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

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
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{asset('frontend/assets/images/RCS03.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Engine Parts</span>
                  <h4>ท่อกรองอากาศสเตนเลส</h4>
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
                  <p>ท่อกรองอากาศสเตนเลสไล่ระดับการเชื่อมเข้ามุมโค้งได้รูปขนาดเส้นฝ่าศูนย์กลาง 30-34 มิลลิเมตร เหมาะสำหรับรถลิ้นเดิม - ลิ้น 30 เท่านั้น</p>
                  <div class="main-button">
                    <a href="https://shopee.co.th/%E0%B8%97%E0%B9%88%E0%B8%AD%E0%B8%81%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B8%AA%E0%B9%80%E0%B8%95%E0%B8%99%E0%B9%80%E0%B8%A5%E0%B8%AA-%E0%B8%9E%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%A2%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%99%E0%B9%89%E0%B8%B3-PCX-ADV-i.11168019.17061910201?xptdk=eabb6072-6aff-4af8-bdb8-bd652053074f" target="_blank" >สั่งซื้อสินค้า</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{asset('frontend/assets/images/RCS04.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Engine Parts</span>
                  <h4>สายพานรถมอเตอร์ไซค์</h4>
                  <div class="row">
                    <div class="col-6">
                      <!-- <i class="fa fa-clock"></i> -->
                      <span class="list">ยี่ห้อ</span>
                    </div>
                    <div class="col-6">
                      <!-- <i class="fa fa-map"></i> -->
                      <span class="list">HONDA(ฮอนด้า)</span>
                    </div>
                  </div>
                  <p>สายพานแท้เบิกจากโรงงาน มั่นใจหายห่วงคุณภาพดี ควรเปลี่ยนทุกๆ 20,000-25,000 กิโลเมตร ต่อ 1 เส้นเพื่ออัตราเร่งที่เป็นปกติ</p>
                  <div class="main-button">
                    <a href="https://shopee.co.th/%E0%B8%AA%E0%B8%B2%E0%B8%A2%E0%B8%9E%E0%B8%B2%E0%B8%99-Click-PCX-ADV-Forza-%E0%B9%81%E0%B8%97%E0%B8%B1%E0%B8%88%E0%B8%B2%E0%B8%81-Honda-i.11168019.18900444430?sp_atk=2eff0206-bf40-4c64-9820-30c67b012150" target="_blank" >สั่งซื้อสินค้า</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{asset('frontend/assets/images/RCS05.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Engine Parts</span>
                  <h4>ชุดชามปรับองศา</h4>
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
                  <p>ชุดปลดล็อคความเร็ว Step แรกสำหรับรถสายพาน PCX ADV Click ที่เพิ่มประสิทธิภาพในการขับขี่ สามารถใช้แทนของเดิมในรถได้ทันที</p>
                  <div class="main-button">
                    <a href="https://shopee.co.th/%E0%B8%8A%E0%B8%B8%E0%B8%94%E0%B8%8A%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AD%E0%B8%87%E0%B8%A8%E0%B8%B2-PCX-ADV-Click-Race99-i.11168019.17961900114?sp_atk=94819d5b-3dd0-444a-95c8-2eddecc4fb4d&xptdk=94819d5b-3dd0-444a-95c8-2eddecc4fb4d" target="_blank" >สั่งซื้อสินค้า</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{asset('frontend/assets/images/RCS06.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Engine Parts</span>
                  <h4>เฟืองคู่</h4>
                  <div class="row">
                    <div class="col-6">
                      <!-- <i class="fa fa-clock"></i> -->
                      <span class="list">รุ่นที่เข้ากันได้</span>
                    </div>
                    <div class="col-6">
                      <!-- <i class="fa fa-map"></i> -->
                      <span class="list">Forza350 ADV350</span>
                    </div>
                  </div>
                  <p>Forza350 ADV350 สำหรับรถที่มีชาม มีท่อ อยากได้ท้ายที่ไหล แต่รอบเครื่องต่ำลง รับประกันเสียหรือแตกเปลี่ยนฟรี</p>
                  <div class="main-button">
                    <a href="https://shopee.co.th/%E0%B9%80%E0%B8%9F%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B9%E0%B9%88-Forza350-ADV350-Race99-i.11168019.10096063507?sp_atk=cb23cfb8-8acc-483a-b099-24859626a731&xptdk=cb23cfb8-8acc-483a-b099-24859626a731" target="_blank" >สั่งซื้อสินค้า</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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