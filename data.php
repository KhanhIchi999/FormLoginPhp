<?php 

	$students = [];

    $student = new stdClass;
    $student->name = 'Khánh Hoàng Nguyễn';
    $student->age = 24;

    $students[] = $student;

    $student = new stdClass;
    $student->name = 'Phạm Thùy Linh';
    $student->age = 26;

    $students[] = $student;

    $student = new stdClass;
    $student->name = 'Trần Thị Hân';
    $student->age = 24;

    $students[] = $student; //thêm student vào mảng students

    // gửi data đến cho client theo dạng json
    
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    sleep(2); //ngủ 2s
    echo json_encode($students);

    



?>