<?php
//Triệu gọi đến file xử lý thông qua request

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
}

// get method if get default null
$method = $_SERVER['REQUEST_METHOD'] === 'GET' ? '' : $_SERVER['REQUEST_METHOD'];

$action_name = get_action().ucfirst(strtolower($method)).'Action';

call_function(array('construct', $action_name));


