<x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>เว็บแอปพลิเคชันช่วยสรรหางาน</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Additional JS -->
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
  {{--   <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="assets/images/job-search.png" alt="">
          <a class="navbar-brand" href="http://project.home.lan/"><h2>R2<em>CE</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/find_job">หางาน
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="/find_worker">หาผู้ลงงาน</a></li>

                <li class="nav-item"><a class="nav-link" href="/register">สมัครสมาชิก</a></li>

                <li class="nav-item"><a class="nav-link" href="/login">เข้าสู่ระบบ</a></li>

                <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header> --}}

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-02">
          <div class="text-content">
            <h2 style="color:rgb(190, 38, 38)"><em>Recruit Job Web Application <br>to<br> earn EXP Credit</em></h2>
            <br><br>
            <h4 style="color:white">เว็บแอปพลิเคชันที่จะทำให้คุณที่มีความสามารถและเวลาว่างสามารถหารายได้ พร้อมทั้งประสบการณ์
              ในการทำงาน! ลองมาเป็นครอบครัว R2EC กับเรา!</h4>
          </div>
        </div>
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Fugiat Aspernatur</h4>
            <h2>Laboriosam reprehenderit ducimus</h2>
          </div>
        </div>
        {{-- <div class="banner-item-03">
          <div class="text-content">
            <h4>Saepe Omnis</h4>
            <h2>Quaerat suscipit unde minus dicta</h2>
          </div>
        </div> --}}
      </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ทำไมถึงต้อง R2CE!</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>ปัจจุบันการหางานถือเป็นอีกหนึ่งการแข่งขันที่ต้องใช้หลายปัจจัยในการแข่งขันนี้ <br> 
                โดยที่มีตั้งแต่การแข่งขันในการทำงาน การทำผลงาน จนไปถึงการหางาน ซึ่งปัจจัยสำคัญในการหางานที่หลายบริษัทใช้ <br> 
                ในการคัดเลือกบุคลากรเข้ามาเป็นส่วนหนึ่งของบริษัทนั้น คือ ประสบการณ์ในการทำงาน เพราะสามารถทำให้เห็นถึงศักยภาพ <br> 
                ในการทำงานทั้งความรับผิดชอบ ความสามารถ รวมไปถึงความรู้ที่สั่งสมมาจากการทำงาน ทว่าในข้อดีก็มีข้อเสียอยู่ อาทิเช่น ส่งผลให้นักศึกษาที่จบใหม่นั้น  <br> 
                จะมีโอกาสที่สามารถเข้าทำงานได้น้อยกว่ากลุ่มคนที่เคยมีประสบการณ์มาก่อน เนื่องจากไม่เคยมีประสบการณ์ในการทำงานจริงมาก่อน <br> 
                ทั้งที่บางทีกลุ่มนักศึกษาเหล่านั้นจบมาด้วยความรู้ และเทคโนโลยีที่เปลี่ยนไปตามยุคสมัย โดยที่กลุ่มคนที่เคยมีประสบการณ์มาก่อนอาจจะยังไม่ได้เรียนรู้ <br> 
                และเข้าถึงเลยด้วยซ้ำ กลุ่มนักศึกษา 2 คนได้แก่ นายสงกรานต์ ชาวหน้าไม้ และ นายธนภัทร พันธุ์เจริญ จากสาขาวิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่  <br> 
                จึงได้พัฒนาพร้อมด้วยได้รับความช่วยเหลือในการปรับปรุงจากอาจารย์กิตตินันท์ น้อยมณี เพื่อสร้างเป็น เว็บแอปพลิเคชันช่วยสรรหางาน เพื่อสร้างเครดิตและประสบการณ์การทำงาน  <br> 
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="page-section" id="services">
      <div class="container px-4 px-lg-5">
          <h2 class="text-center mt-0">สายงานที่ให้บริการ</h2>
          <hr class="divider" />
          <div class="row gx-4 gx-lg-5">
              <div class="col-lg-4 col-md-6 text-center">
                  <div class="mt-5">
                      <div class="mb-2"><i class="bi-gem fs-1" style="color:red"></i></div>
                      <h3 class="h5 mb-2">การบัญชี</h3>
                      <p class="text-muted mb-0">การเงิน บัญชีรายรับ บัญชีรายจ่าย </p>
                      <p class="text-muted mb-0"> หากมันยุ่งยากนักก็หานักบัญชีให้ทำซะเลยสิ!</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <div class="mt-5">
                      <div class="mb-2"><i class="bi-brush fs-1" style="color:red"></i></div>
                      <h3 class="h5 mb-2">เขียนแบบ/ออกแบบวิศวกรรม</h3>
                      <p class="text-muted mb-0">มีไอเดียในหัวอยู่ล่ะสิ! ต้องการหาคนช่วยนำไอเดียนั้น </p>
                      <p class="text-muted mb-0"> ออกมาจากหัว แล้วทำให้มันเป็นจริงรึเปล่า! หาคนซะสิ!</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <div class="mt-5">
                      <div class="mb-2"><i class="bi-laptop fs-1" style="color:red"></i></div>
                      <h3 class="h5 mb-2">คอมพิวเตอร์/ไอที/โปรแกรมเมอร์</h3>
                      <p class="text-muted mb-0">โปรแกรม สายไฟ อุปกรณ์ หน้าเว็บ ยุ่งยากไปหมด!? </p>
                      <p class="text-muted mb-0"> ถ้าจะยุ่งยากขนาดนี้ ให้เราช่วยหาคนมาจัดการให้คุณมั้ยล่ะ!</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ผู้ร่วมก่อตั้ง</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>ธนภัทร พันธุ์เจริญ</h4>
                  <p class="n-m"><em>"นักศึกษาคณะวิศวกรรมศาสตร์ สาขาวิศวกรรมคอมพิวเตอร์ ชั้นปีที่ 6"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>สงกรานต์ ชาวหน้าไม้</h4>
                  <p class="n-m"><em>"นักศึกษาคณะวิศวกรรมศาสตร์ สาขาวิศวกรรมคอมพิวเตอร์ ชั้นปีที่ 6"</em></p>
                </div>
              </div>
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>อาจารย์กิตตินันท์ น้อยมณี</h4>
                  <p class="n-m"><em>"อาจารย์ที่ปรึกษาของโปรเจค"</em></p>
                </div>
              </div>         
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2024 Webapplication Forexperience</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
</x-app-layout>