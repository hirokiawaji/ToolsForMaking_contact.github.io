<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			$yourname = $_POST['yourname'];
			$comment = $_POST['comment'];
			$email = "tsukkii0810@gmail.com";
			$option= "From: tsukkii08101@outlook.jp";


			if(mb_send_mail($to, $yourname, $comment, $option)){
				echo "送信されました。ご協力ありがとうございました。";
			} else {
				echo "送信に失敗しました";
			}
		?>
	</body>
</html>
