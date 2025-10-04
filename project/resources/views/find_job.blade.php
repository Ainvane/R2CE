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
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/faqs/faq-3/assets/css/faq-3.css">

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

    <!-- Banner -->
    <div class="banner header-text">
      <div class="banner-item-03">
        <div class="text-content">
          <h2 style="color:rgb(53, 53, 53)">Search Job</h2>
          <h4 style="color:red">เลือกสายงานและตำแหน่งของคุณ เพื่อให้เราช่วยสรรหางาน!</h4>
        </div>
      </div>
    </div>

    <!-- Find Job -->
    <br>
    <div class="find_job">        
        <!-- Find Job Section -->
        <div class="container">
          <div class="justify-content-center">
              <div class="card border-0 shadow p-4">
                  
                  <!-- ทักษะของผู้หางาน -->
                  <div class="card-header"><h2>ความถนัดของคุณ</h2></div>
                  <div class="card-body">
                    <form action="{{route('search')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      สายงาน
                      <select name="category" id="category" class="form-control" required>
                        <option value="" selected disabled hidden>-- เลือกสายงานที่คุณต้องการ --</option>
                        <option value="บัญชี">สายงานการบัญชี</option>
                        <option value="วิศวกรรม">สายงานเขียนแบบ/ออกแบบวิศวกรรม</option>
                        <option value="คอมพิวเตอร์">สายงานคอมพิวเตอร์/ไอที/โปรแกรมเมอร์</option>
                      </select>
                      ข้อมูลเพิ่มเติม
                      <textarea name="information" id="information" cols="30" rows="10" class="form-control" required autocomplete="off"></textarea>
                      <!-- งานที่มีความเสี่ยงสูง -->
                          <label>ต้องการรับ</label><label class="text-primary" data-bs-toggle="modal" data-bs-target="#myModal">งานที่มีความเสี่ยงสูง?</label>
                          <select name="risky" id="risky" class="form-control" required>
                            <option value="" selected disabled hidden>-- ระดับความยากของงาน --</option>
                            <option value="ปกติ">เป็นงานธรรมดา</option>
                            <option value="เสี่ยง">เป็นงานที่มีความเสียงสูง</option>
                          </select>
                      <div class="modal fade mt-2" id="myModal">
                        <br><br><br><br><br>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">งานที่มีความเสี่ยงสูง?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                งานที่มีความเสี่ยงสูงคืออะไร? <br>
                                คือ งานที่มีระดับความยากสูงกว่าปกติ จึงจำเป็นต้องใช้ทักษะและความเข้าใจเกี่ยวกับงานด้านนั้นๆ ในระดับที่มากกว่าปกติ ทว่าจะมีค่าจ้างที่สูงกว่างานทั่วไป <br>
                                ซึ่งการที่จะทำงานระดับนี้ได้ จึงต้องมีการยอมรับข้อตกลงและความเสี่ยง เพื่อเป็นการรับรองว่าตัวของผู้หางานจะสามารถเข้าใจและทำงานชิ้นดังกล่าวให้ประสบความสำเร็จได้
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">ค้นหางาน</button>
                    </form>
                  </div>
              </div>
          </div>
    </div>
    @if(isset($jobs))
    <div class="container mt-4">
        <h2>ผลลัพธ์การค้นหา</h2>
        <ul class="list-group">
            @foreach($jobs as $job)
                <li class="list-group-item">
                    <h3>งาน:{{ $job->name }}</h3>
                    <p>รายละเอียดของงาน:{{ $job->information }}</p>
                    <p>สายงาน: {{ $job->category }}</p>
                    <p>ค่าจ้าง: {{ $job->money }}</p>
                    <p>ช่องทางการติดต่อ: {{ $job->contact }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
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