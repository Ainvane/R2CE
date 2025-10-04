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

    <title>ผลลัพธ์การค้นหา</title>

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
    <div class="container mt-4">
        <h2>ผลลัพธ์การค้นหา</h2>
        <br>
        @if($jobs->isEmpty())
            <h3>ไม่พบงานที่ตรงกับคุณสมบัตของคุณ</h3>
        @else
            @php
                $job = $jobs->first();
            @endphp
            <ul class="list-group">
                <li class="list-group-item">
                    <h3>งาน: {{ $job->name }}</h3>
                    <p>รายละเอียดของงาน: {{ $job->information }}</p>
                    <p>สายงาน: {{ $job->category }}</p>
                    <p>ค่าจ้าง: {{ $job->money }}</p>
                    <p>ช่องทางการติดต่อ: {{ $job->contact }}</p>
                </li>
            </ul>
        @endif
    </div>
</body>

</html>
</x-app-layout>