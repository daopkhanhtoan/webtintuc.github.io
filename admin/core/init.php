<?php  

require_once 'classes/DB.php';
require_once 'classes/session.php';
require_once 'classes/Function.php';

// kết nối database 
$db = new DB();
$db->connect();
$db->set_char('utf8');

// thông tin chung
$_DOMAIN = 'html://localhost:8080/WebNew/admin/';
//data_default_timezone_set('Asia/Ho_Chi_Minh');
$data_current = '';
// $date_current = data('Y-m-d H:i:sa');

// kết nối session
$session = new session();
$session->start();

// kiểm tra session
if($session->get() != '')
{
	$user = $session->get();
}
else
{
	$user = '';
}

?>