<?php  
// hàm điều hướng
class Redirect{
	public function __construct($url = null)
	{
		if($url)
		{
			echo '<script>location.href="'.$url.'";</script>';
		}
	}
}
?>