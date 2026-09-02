<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST["username"];
    $age=$_POST["age"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $question=$_POST["question"];
    $gender=$_POST["gender"];

    //バリデーション
    if(!preg_match("/^[ぁ-ん ァ-ヶー一-龠 a-zA-Z\s]+$/u",$username)){
      echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";

    }elseif(!ctype_digit($age)||$age<0||$age>150){
      echo "<p>年齢は0から150の間で入力してください。</p>";

    }elseif(!preg_match("/^[0-9-]+$/",$phone)){
      echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";

    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "<p>メールアドレスの形式が正しくありません。</p>";

    }elseif(!preg_match("/^[ぁ-ん ァ-ヶー一-龠 a-zA-Z\s]+$/u",$address)){
      echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";

    }else{
      //入力内容の表示
      echo"<p>名前:".htmlspecialchars($username,ENT_QUOTES,'UTF-8')."</p>";

      echo"<p>年齢:".htmlspecialchars($age,ENT_QUOTES,'UTF-8')."歳</p>";

      echo"<p>電話番号:".htmlspecialchars($phone,ENT_QUOTES,'UTF-8')."</p>";

      echo"<p>メールアドレス:".htmlspecialchars($email,ENT_QUOTES,'UTF-8')."</p>";

      echo"<p>住所:".htmlspecialchars($address,ENT_QUOTES,'UTF-8')."</p>";

      echo"<p>質問:".htmlspecialchars($question,ENT_QUOTES,'UTF-8')."</p>";

      //性別の変換と表示
      $gender_list=['male'=>'男性','female'=>'女性','other'=>'その他'];
      $display_gender=$gender_list[$gender]??'未選択';
      echo"<p>性別:".htmlspecialchars($display_gender,ENT_QUOTES,'UTF-8')."</p>";
    }
  }else{
    echo"<p>データが送信されていません。</p>";
  }
  ?>
</body>
</html>
