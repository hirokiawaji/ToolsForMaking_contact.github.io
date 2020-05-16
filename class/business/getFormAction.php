<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

	</head>
	<body>
		<?php
class getFormAction {
	public $pdo;

	/**
	 * コネクション確保
	 */
	function __construct() {
		try {
			$this->pdo = new PDO( PDO_DSN, DATABASE_USER, DATABASE_PASSWORD);
		} catch (PDOException $e) {
			echo 'error' . $e->getMessage();
			die();
		}
	}

	/**
	 * 記事データをDBに保存
	 */
	function saveDbPostData($data){

		// データの保存
		$smt = $this->pdo->prepare('insert into post (name,body,created_at,updated_at) values(:name,:body,now(),now())');
		$smt->bindParam(':name',$data['name'], PDO::PARAM_STR);
		$smt->bindParam(':body',$data['body'], PDO::PARAM_STR);
		$smt->execute();

	}
}
?>
</body>
</html>
