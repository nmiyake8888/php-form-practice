<?php
// フォームから送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];

// htmlspecialchar()でエスケープ処理を行う
$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');

// 登録ボタンが押された場合
if (isset($_POST["submit"])) {

    // 名前をURLエンコード
    $encoded_name = urlencode($name);

    // complete.phpへリダイレクト
    header("Location: complete.php?name=" . $encoded_name);
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/confirm.css">
    <title>確認画面</title>
</head>
<body>
    <div class="container">
        <h1>ユーザー登録（2/3）確認</h1>
        <div class="info_wrapper">
            <div class="info">
                <p>以下の内容で登録します。よろしいですか？</p>
            </div>
            <div class="info">
                <table>
                    <tr>
                        <th>お名前</th>
                        <td><?php echo $safe_name ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo $safe_email ?></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><?php echo $safe_age . "歳" ?></td>
                    </tr>
                </table>
            </div>
            <div class="button_wrapper">
                <div>
                    <button type="button" id="back_button" onclick="history.back()">戻る</button>
                </div>
                <div>
                    <form action="complete.php" method="post">
                        <input type="hidden" name="name"
                            value="<?php echo $safe_name; ?>">
                        <input type="hidden" name="email"
                            value="<?php echo $safe_email; ?>">
                        <input type="hidden" name="age"
                            value="<?php echo $safe_age; ?>">
                        <button type="submit" id="submit_button">登録する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>