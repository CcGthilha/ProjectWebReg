<! html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-blue-600 text-white shadow-md">
        <?php
        if (isset($_SESSION['student_id'])) {
            $student = getCurrentStudent();
            echo '<div class="container mx-auto px-6 py-4 flex justify-between items-center">';
            echo '<h1 class="text-2xl font-bold">ระบบลงทะเบียนเรียน</h1>';
            echo '<nav class="space-x-4">';
            echo '<a href="/student" class="hover:text-blue-200 transition">หน้าแรก</a>';
            echo '<a href="/students" class="hover:text-blue-200 transition">ข้อมูลส่วนตัว</a>';
            echo '<a href="/courses" class="hover:text-blue-200 transition">รายวิชา</a>';
            echo '<a href="/logout" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition">ออกจากระบบ</a>';
            echo '</nav>';
            echo '</div>';
        } else {
            echo '<div class="container mx-auto px-6 py-4 flex justify-between items-center">';
            echo '<h1 class="text-2xl font-bold">ระบบลงทะเบียนเรียน</h1>';
            echo '<nav class="space-x-4">';
            echo '<a href="/" class="hover:text-blue-200 transition">หน้าแรก</a>';
            echo '<a href="/login" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition">เข้าสู่ระบบ</a>';
            echo '</nav>';
            echo '</div>';
        }
    ?>
    </header>