<!DOCTYPE html>
<html>
<head>
	<title>確認ページ</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>確認画面</h2>

	<h4>以下の情報確認の上に登録ボタン押してください</h4>

	<?php

		if(isset($_POST['confirm'])){

			$last_name = $_POST['last_name'];
			$first_name = $_POST['first_name'];
			$sei = $_POST['sei'];
			$mei = $_POST['mei'];
			$gender = $_POST['gender'];
			$birthday = $_POST['birthday'];
			$age = $_POST['age'];
			$zipcode = $_POST['zipcode'];
			$address = $_POST['address'];
			$tel = $_POST['tel'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
		}

			//文字列に変換（セキュリティ対策）
			$last_name = htmlspecialchars($last_name,ENT_QUOTES,'utf-8');
			$first_name = htmlspecialchars($first_name,ENT_QUOTES,'utf-8');
			$sei = htmlspecialchars($sei,ENT_QUOTES,'utf-8');
			$mei = htmlspecialchars($mei,ENT_QUOTES,'utf-8');
			$gender = htmlspecialchars($gender,ENT_QUOTES,'utf-8');
			$birthday = htmlspecialchars($birthday,ENT_QUOTES,'utf-8');
			$age = htmlspecialchars($age,ENT_QUOTES,'utf-8');
			$zipcode = htmlspecialchars($zipcode,ENT_QUOTES,'utf-8');
			$address = htmlspecialchars($address,ENT_QUOTES,'utf-8');
			$tel = htmlspecialchars($tel,ENT_QUOTES,'utf-8');
			$email = htmlspecialchars($email,ENT_QUOTES,'utf-8');
			$password1 = htmlspecialchars($password1,ENT_QUOTES,'utf-8');
			$password2 = htmlspecialchars($password2,ENT_QUOTES,'utf-8');

			//$lastnameがカラならエラーメッセージを表示する
			//$lastname入力されていれば, $lastnameを表示する
			if ($last_name==''||$first_name=='') {
				echo "姓または名が入力されていません。";
				echo "<br>";
			}
			else{
				echo "名前(漢字)　：　$last_name$first_name";
				echo "<br>";
			}

			//$firstnameがカラならエラーメッセージを表示する
			//$firstname入力されていれば, $lastnameを表示する
			if ($sei==''||$mei=='') {
				echo "セイまたはメイが入力されていません。";
				echo "<br>";
			}
			else{
				echo "名前(カタカナ)　：　$sei$mei";
				echo "<br>";
			}

			//$genderがカラならエラーメッセージを表示する
			//$gender入力されていれば, $lastnameを表示する
			if ($gender=='') {
				echo "性別を選択されていません。";
			}
			else{
				echo "性別　：　$gender";
				echo "<br>";
			}

			//$genderがカラならエラーメッセージを表示する
			//$gender入力されていれば, $lastnameを表示する
			if ($birthday=='') {
				echo "誕生日を選択されていません。";
			}
			else{
				echo "誕生日　：　$birthday";
				echo "<br>";
			}

			//$ageがカラならエラーメッセージを表示する
			//$age入力されていれば, $lastnameを表示する
			if ($age=='') {
				echo "年齢を入力されていません。";
			}
			else{
				echo "年齢　：　$age";
				echo "<br>";
			}

			//$zipcodeがカラならエラーメッセージを表示する
			//$zipcode入力されていれば, $lastnameを表示する
			if ($zipcode=='') {
				echo "郵便番号を入力されていません。";
			}
			else{
				echo "郵便番号　：　$zipcode";
				echo "<br>";
			}

			//$addressがカラならエラーメッセージを表示する
			//$address入力されていれば, $lastnameを表示する
			if ($address=='') {
				echo "住所入力されていません。";
			}
			else{
				echo "住所　：　$address";
				echo "<br>";
			}

			//$telがカラならエラーメッセージを表示する
			//$tel入力されていれば, $lastnameを表示する
			if ($tel=='') {
				echo "電話番号を入力されていません。";
			}
			else{
				echo "電話番号　：　$tel";
				echo "<br>";
			}

			//$emailがカラならエラーメッセージを表示する
			//$email入力されていれば, $lastnameを表示する
			if ($email=='') {
				echo "メールアドレスを入力されていません。";
			}
			else{
				echo "メール　：　$email";
				echo "<br>";
			}

			//$password1がカラならエラーメッセージを表示する
			if($password1==''){
			  echo"パスワードが入力されていません。<br />";
			}
			else{
				echo "パスワード　：　$password1";
				echo "<br>";
			}

			//$password2がカラならエラーメッセージを表示する
			if($password2==''){
			  echo"確認パスワードが入力されていません。<br />";
			}
			else{
				echo "確認パスワード　：　$password2";
				echo "<br>";
				echo "<br>";
			}

			//$password1、$passowrd2が一致しなければ、エラーメッセージを表示する
			if($password1!=$password2){ //もしパスワード1とパスワード2の値が異なるなら
				array_push($error, "パスワードが一致しません。")
			  //echo"パスワードが一致しません。<br />";
			  echo "<br>";
			}

			//$lastname、$firstname,$lname,$fname,$gender,$bithday,$age,$zipcode,$address,$tel,$email,$password1、$password2がカラなら、または、$password1、$password2が一致しなければ、戻るボタンのみを表示する
			//入力項目が適切なら、戻るボタンとOKボタンを表示する。
			if ($last_name==''||$first_name==''||$sei==''||$mei==''||$gender==''||$birthday==''||$age==''||$zipcode==''||$address==''||$tel==''||$email==''||$password1==''||$password2==''||$password1!=$password2) {
				echo "<form>";
				echo '<input type="button" onclick="history.back();" value="戻る">';
				echo "</form>";
			}
			else{
				$password1=md5($password1);	   //パスワードをMD5規約に則って32桁のランダム値に変換
				echo '<form method="post" action="insert.php">';
				echo '<input type="hidden" name="last_name" value="'.$last_name.'">';
				echo '<input type="hidden" name="first_name" value="'.$first_name.'">';
				echo '<input type="hidden" name="sei" value="'.$sei.'">';
				echo '<input type="hidden" name="mei" value="'.$mei.'">';
				echo '<input type="hidden" name="gender" value="'.$gender.'">';
				echo '<input type="hidden" name="birthday" value="'.$birthday.'">';
				echo '<input type="hidden"name="age"value="'.$age.'">';
				echo '<input type="hidden"name="zipcode"value="'.$zipcode.'">';
				echo '<input type="hidden"name="address"value="'.$address.'">';
				echo '<input type="hidden"name="tel"value="'.$tel.'">';
				echo '<input type="hidden"name="email"value="'.$email.'">';
				echo '<input type="hidden"name="password1"value="'.$password1.'">';
				echo "<br>";
				echo '<input type="button" onclick="history.back();" value="戻る">';
				echo '<input type="submit" name="register" value="登録">';
				echo "</form>";
			}	
	?>

</body>
</html>