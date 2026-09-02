<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
  <title>フォーム入力</title>
</head>
<body>
  <h1>フォーム入力</h1>
  <form action="confirm.php" method="POST">
    <!-- 名前 -->
    <label for="username">名前:</label>
    <input type="text" id="username" name="username"><br><br>
    <!-- 年齢 -->
    <label for="age">年齢:</label>
    <input type="text" id="age" name="age"><br><br>

    <!-- 電話番号 -->
    <label for="phone">電話番号:</label>
    <input type="tel" id="phone" name="phone"><br><br>

    <!-- メールアドレス -->
    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email"><br><br>

    <!-- 住所 -->
    <label for="address">住所:</label>
    <input type="text" id="address" name="address"><br><br>

    <!-- 質問 -->
    <label for="question">質問:</label>
    <input type="text" id="question" name="question"><br><br>

    <!-- 性別 -->
    <label for="gender">性別:</label>
    <select id="gender" name="gender">
      <option value="male">男性</option>
      <option value="female">女性</option>
      <option value="other">その他</option>
    </select><br><br>

<!-- 送信ボタン -->
<button type="submit">送信</button>
  </form>
</body>
</html>
