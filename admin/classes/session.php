<?php  

class Session{
	public function start()
	{
		session_start();
	}

	//luu session
	public function send($user)
	{
		$_SESSION['user'] = $user;
	}

	//lấy dữ liệu session
	public function get()
	{
		if(isset($_SESSION['user']))
		{
			$user = $_SESSION['user'];
		}
		else
		{
			$user = '';
		}
		return $user;
	}

	// xóa
	public function destroy()
	{
		session_destroy();
	}
}
?>