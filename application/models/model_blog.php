<?php
class Model_Blog extends Model
{
	public $arrayMysqlData;
	public $controller; 
	
		public function __construct()
	{
		$this->controller = new Controller_Blog();

	}

	//Первой запускаем метод модели
	public function action_index() {	

		Model::connect_db();

		$sql = "SELECT text, url FROM BlogTable";
		$resultSelect = $this->conn->query($sql);

		if ($resultSelect->num_rows > 0) {

   			// output data of each row
    		for ($x = 0 ; $row = $resultSelect->fetch_assoc(); $x++) {
        		echo "URL: " . $row["url"]. " - Text: " . $row["text"]."<br>";
        		$urlOne[$x] = $row["url"];
        		$textOne[$x] = $row["text"];
    		}
			$this->conn->close();
				$count = count($urlOne); // Подсчитали количество статей для вывода в блоге

			// Сгружаем результаты из БД в один массив
			$arrayMysqlData = [$urlOne, $textOne, $count];

			// Передаем данные в контроллер
			$this->controller->model_result($arrayMysqlData); 
		}

	}
}
?>