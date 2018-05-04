<?php
class Model_Admin extends Model
{
	public function push_data_base($url, $content)
	{
		//if (isset($_POST['url']) and isset($_POST['content'])) {
		
		Model::connect_db();

     	$sqlConnect = "INSERT INTO BlogTable (text, url) VALUES ('$url', '$content')";
		$resultConnect = $this->conn->query($sqlConnect);
	}
}
?>