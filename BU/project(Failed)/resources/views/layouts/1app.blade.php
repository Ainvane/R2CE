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

    </head>
    <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="assets/images/job-search.png" alt="">
          <a class="navbar-brand" href="http://project.home.lan/"><h2>Job Agency <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="search-job.html">หางาน
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="search-worker.html">หาผู้ลงงาน</a></li>

                <li class="nav-item"><a class="nav-link" href="/register">สมัครสมาชิก</a></li>

                <li class="nav-item"><a class="nav-link" href="/login">เข้าสู่ระบบ</a></li>

                <li class="nav-item"><a class="nav-link" href="FAQ.html">FAQ</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    </body>
</html>