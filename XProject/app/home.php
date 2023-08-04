<?php

    // Bước 01: Kiểm tra giá trị của controller và action
   

    $controller = isset($_GET['controller'])?$_GET['controller']:'home';
    $action     = isset($_GET['action'])?$_GET['action']:'index';
    // Bước 02: Tìm tệp mà mình sẽ chuyển lại Quyền cho nó (Controller)
    $controller = ucfirstr($controller); //Viết hoa chữ cái đầu
    $controller .= 'Controller';
    $controllerPath = "app/controllers/".$controller.'.php';
    //Nếu không tồn tại TỆP
    if(!file_exists($controllerPath)){
        die('Tệp tin không tồn tại');
    }
    //Nếu có tồn tại tệp Controller
    include($controllerPath);
    // Bước 03: Khởi tạo đối tượng tương ứng của Controller và gọi hàm xử lý Action
    $myController = new $controller();
    $myController->$action();

?>