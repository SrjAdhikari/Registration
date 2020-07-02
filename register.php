<!DOCTYPE html>
<html>
<head>
  <title>会員様登録ページ</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="header">
  	<h2>会員様登録</h2>
  </div>
	
  <form method="post" action="confirm.php">
  	
  	<div class="input-group">
  	  <label>姓</label>
  	  <input type="text" name="last_name" value="" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>名</label>
  	  <input type="text" name="first_name" value="" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>セイ</label>
  	  <input type="text" name="sei" value="" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>メイ</label>
  	  <input type="text" name="mei" value="" autofocus required>
  	</div>

    
  	<div class="sex">
  	  <label>性別</label><br>
  	  	<input type="radio" name="gender" id="radiobox" value="男性" autofocus required>男性
		  <input type="radio" name="gender" id="radiobox" value="女性" autofocus required>女性
		  <input type="radio" name="gender" id="radiobox" value="その他" autofocus required>その他
  	</div>


  	<div class="input-group">
  	  <label>誕生日</label>
  	  <input type="date" name="birthday" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>年齢</label>
  	  <input type=number name="age"autofocus required> 
  	</div>

  	<div class="input-group">
  	  <label>郵便番号</label>
  	  <input type="text" name="zipcode" value="" pattern="\d{3}-\d{4}" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>住所</label>
  	  <input type="text" name="address" value="" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>電話番号</label>
  	  <input type="tel" name="tel" value="" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>メール</label>
  	  <input type="email" name="email" value="" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>パスワード</label>
  	  <input type="password" name="password1" autofocus required>
  	</div>

  	<div class="input-group">
  	  <label>確認パスワード</label>
  	  <input type="password" name="password2" autofocus required>
  	</div>

 
      <input type="submit" class="button" name="confirm" value="確認" autofocus>
  	
  </form>
</body>
</html>