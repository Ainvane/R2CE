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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  
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
  
      <style>
          .report-issue-sidebar {
              position: fixed;
              top: 0;
              right: 0;
              width: 300px;
              height: 100%;
              background-color: #f8f9fa;
              border: 1px solid #dee2e6;
              border-radius: 0.25rem;
              padding: 1rem;
              box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
              transform: translateX(100%);
              transition: transform 0.3s ease;
          }
  
          .report-issue-sidebar.open {
              transform: translateX(0);
          }
  
          .toggle-sidebar-btn {
              position: fixed;
              top: 50%;
              right: 0;
              transform: translateY(-50%);
              background-color: #007bff;
              color: white;
              border: none;
              border-radius: 0.25rem 0 0 0.25rem;
              padding: 0.5rem 1rem;
              cursor: pointer;
              z-index: 1000;
          }
      </style>
  
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
          <div class="banner-item-01">
              <div class="text-content">
                  <h2 style="color:rgb(53, 53, 53)">ปัญหาและคำถามที่พบบ่อย</h2>
                  <h4 style="color:red">หากมีปัญหาที่ไม่มีในคำถามที่พบบ่อย กรุณากรอกฟอร์มด้านล่างเพื่อรายงานปัญหาของท่านไปยังผู้ดูแล</h4>
              </div>
          </div>
      </div>
  
      <!-- FAQ -->
      <div class="faq">
          <!-- FAQs: My Account -->
          <br><br>
          <div class="mb-8">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-11 col-xl-10">
                          <div class="d-flex align-items-end mb-5">
                              <i class="bi bi-person-gear me-3 lh-1 display-5"></i>
                              <h3 class="m-0">ปัญหาบัญชีผู้ใช้</h3>
                          </div>
                      </div>
                      <div class="col-11 col-xl-10">
                          <div class="accordion accordion-flush" id="faqAccount">
                              <div class="accordion-item bg-transparent border-top border-bottom py-3">
                                  <h2 class="accordion-header" id="faqAccountHeading1">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse1" aria-expanded="false" aria-controls="faqAccountCollapse1">
                                          ปัญหาการไม่ได้รับอีเมลยืนยันการสมัคร
                                      </button>
                                  </h2>
                                  <div id="faqAccountCollapse1" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading1" data-bs-parent="#faqAccount">
                                      <div class="accordion-body">
                                          <p>อาจจะเกิดจากการที่อีเมลที่ระบบได้ส่งไปให้นั้น อาจจะถูกส่งไปที่ junk mail หรือ เมลขยะของคุณ 
                                              ทางเราจึงแนะนำให้ท่านไปตรวจสอบเพื่อให้แน่ใจว่าไม่ได้รับอีเมลยืนยันหรือไม่ หรือในอีกกรณีนึกก็คือ 
                                              อีเมลที่คุณใส่ไปนั้นไม่ตรงกับอีเมลที่ใช้เข้าสู่ระบบ ให้ลองทำการตรวจสอบอีกครั้ง</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item bg-transparent border-bottom py-3">
                                  <h2 class="accordion-header" id="faqAccountHeading2">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse2" aria-expanded="false" aria-controls="faqAccountCollapse2">
                                          ปัญหาการไม่สามารถล็อกอินเข้าสู่ระบบได้
                                      </button>
                                  </h2>
                                  <div id="faqAccountCollapse2" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading2" data-bs-parent="#faqAccount">
                                      <div class="accordion-body">
                                          <p>อาจเกิดได้จากการที่ id หรือ password ที่สมัครนั้นไม่ตรงกับที่กรอกไปในระบบ 
                                              ให้ตรวจสอบให้แน่ใจว่าได้กรอกข้อมูลอย่างถูกต้อง หรืออาจเกิดจากการที่ตัวระบบกำลังปรับปรุง 
                                              ให้ลองอ่านที่ประกาศหน้าเว็บไซต์เพื่อติดตามข่าวสาร</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- FAQs: Search Job&Worker -->
          <div class="mb-8">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-11 col-xl-10">
                          <div class="d-flex align-items-end mb-5">
                              <i class="bi bi-search me-3 lh-1 display-5"></i>
                              <h3 class="m-0">ปัญหาการหางานและผู้ลงงาน</h3>
                          </div>
                      </div>
                      <div class="col-11 col-xl-10">
                          <div class="accordion accordion-flush" id="faqOrder">
                              <div class="accordion-item bg-transparent border-top border-bottom py-3">
                                  <h2 class="accordion-header" id="faqOrderHeading1">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse1" aria-expanded="false" aria-controls="faqOrderCollapse1">
                                          ปัญหาการที่ไม่สามรถลงงานได้
                                      </button>
                                  </h2>
                                  <div id="faqOrderCollapse1" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading1" data-bs-parent="#faqOrder">
                                      <div class="accordion-body">
                                          <p>อาจจะเกิดจากการที่กรอกข้อมูลที่จำเป็นไม่ครบถ้วน ให้ลองตรวจสอบอีกครั้งว่าท่านได้กรอกข้อมูลที่จำเป็นครบหรือไม่</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item bg-transparent border-bottom py-3">
                                  <h2 class="accordion-header" id="faqOrderHeading2">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse2" aria-expanded="false" aria-controls="faqOrderCollapse2">
                                          ปัญหาเมื่อลงงานไปแล้ว ไม่มีงานขึ้นบนระบบ
                                      </button>
                                  </h2>
                                  <div id="faqOrderCollapse2" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading2" data-bs-parent="#faqOrder">
                                      <div class="accordion-body">
                                          <p>อาจเกิดจากการที่ระบบกำลังทำการอัพเดทบนฐานข้อมูล ให้ท่านรอประมาณ 5 นาทีแล้วไปตรวจเช็คอีกครั้ง 
                                              ในกรณีที่งานของท่านไม่ขึ้นกรุณาแจ้งผู้ดูแลระบบ เพื่อให้ผู้ดูแลระบบทำการตรวจสอบให้</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- FAQs: Update Profile -->
          <div class="mb-0">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-11 col-xl-10">
                          <div class="d-flex align-items-end mb-5">
                              <i class="bi bi-person-vcard me-3 lh-1 display-5"></i>
                              <h3 class="m-0">ปัญหาการอัพเดตข้อมูล</h3>
                          </div>
                      </div>
                      <div class="col-11 col-xl-10">
                          <div class="accordion accordion-flush" id="faqRefund">
                              <div class="accordion-item bg-transparent border-top border-bottom py-3">
                                  <h2 class="accordion-header" id="faqRefundHeading1">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse1" aria-expanded="false" aria-controls="faqRefundCollapse1">
                                          ปัญหาไม่สามารถอัพเดทข้อมูลได้
                                      </button>
                                  </h2>
                                  <div id="faqRefundCollapse1" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading1" data-bs-parent="#faqRefund">
                                      <div class="accordion-body">
                                          <p>อาจเกิดจากการที่ใส่ password ยืนยันไม่ถูกต้อง กรุณาตรวจสอบให้แน่ใจว่าท่านได้กรอก password อย่างถูกต้องแล้วหรือไม่</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item bg-transparent border-bottom py-3">
                                  <h2 class="accordion-header" id="faqRefundHeading2">
                                      <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse2" aria-expanded="false" aria-controls="faqRefundCollapse2">
                                          ปัญหาเมื่อเปลี่ยนขอมูลส่วนตัวแล้วไม่มีการอัพเดทเกิดขึ้น
                                      </button>
                                  </h2>
                                  <div id="faqRefundCollapse2" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading2" data-bs-parent="#faqRefund">
                                      <div class="accordion-body">
                                          <p>อาจเกิดจากการที่ระบบกำลังทำการอัพเดทข้อมูลอยู่ ให้ท่านรอประมาณ 5 นาทีแล้วไปตรวจสอบอีกครั้งว่าข้อมูลได้ถูกอัพเดทเป็นปัจจุบันแล้วหรือไม่ 
                                              ในกรณที่ข้อมูลยังไม่มีการเปลี่ยนแปลงกรุณาแจ้งไปที่ผู้ดูแลระบบ เพื่อให้ผู้ดูแลระบบทำการตรวจสอบให้</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
      </div>
  
      <!-- แถบรายงานปัญหา -->
      <button class="toggle-sidebar-btn" id="openSidebarBtn" onclick="toggleSidebar(true)">รายงานปัญหา</button>
  
      <!-- รายละเอียดของปัญหา -->
      <div class="report-issue-sidebar" id="reportIssueSidebar">
          <h3 class="mb-4">รายงานปัญหา</h3>
          <button type="button" id="closeSidebarBtn" onclick="toggleSidebar(false)" style="position:absolute;top:10px;right:10px;background:none;border:none;font-size:1.5rem;">×</button>
          <form action="{{ url('report_mail') }}" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="issue-description" class="form-label">รายละเอียดปัญหา</label>
                  <textarea class="form-control" id="issue-description" name="description" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
          </form>
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
  
    <script>
    function toggleSidebar(open) {
        var sidebar = document.getElementById('reportIssueSidebar');
        var openBtn = document.getElementById('openSidebarBtn');
        if(open) {
            sidebar.classList.add('open');
            openBtn.style.display = 'none';
        } else {
            sidebar.classList.remove('open');
            openBtn.style.display = 'block';
        }
    }
    </script>
  </body>
  </html>
  </x-app-layout>