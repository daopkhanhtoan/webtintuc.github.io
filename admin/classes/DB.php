<?php  

// lơp database 
class{
	private $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $dbname = 'newspage';

// biến lưu trử kết nối	
    public $cn = null;
// Hàm kết nối
    public function connect()
    {
    	$this->cn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
   	}
// hàm ngát kết nối
   	public function close()
   	{
   		if($this->cn)
   			mysqli_close($this->cn);
   	}
 // hàm truy vấn
 	public function query($sql = null)
 	{
 		if($this->cn)
 			mysqli_query($this->cn, $sql);
 	}
 // hàm đếm số hàng
 	public function num_rows($sql = null)
 	{
 		if($this->cn)
 		{
 			$query = mysqli_query($this->cn, $sql);
 			if($query)
 			{
 				$row = mysqli_num_rows($query);
 				return $row;
 			}
 		}
 	}
// hàm charset cho database 
 	public function set_char($uni)
 	{
 		if($this->cn)
 		{
 			mysqli_set_charset($this->cn, $uni);
 		}
 	}
 // hàm lấy ID cao nhất
 	public function insert_id()
 	{
 		if($this->cn)
 		{
 			$count = mysqli_insert_id($this->cn);
 			if($count == '0')
 			{
 				$count == '1';
 			}
 			else
 			{
 				$count = $count;
 			}
 			return $count;
 		}
 	}

// hàm lấy dữ liệu
 	public function fetch_assoc($sql = null, $type)
 	{
 		if($this->cn)
 		{
 			$query = mysqli_query($this->cn,$sql);
 			if($query)
 			{
 				if($type == 0)
 				{
 					//lấy dữ liệu gán vào mảng
 					while ($row = mysqli_fetch_assoc($query)) {
 						$data[] = $row;
 					}
 					return $data;
 				}
 				if($type == 1)
 				{
 					//lấy một hàng dữ liệu gán vào biến
 					$data = mysqli_fetch_assoc($query)
 					return $data;
 				}
 			}
 		}
 	}
  
	} 
?>