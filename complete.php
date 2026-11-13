<?php
// フォームから送信されたデータを受け取る
$safe_name = $_POST["name"];
$safe_email = $_POST["email"];
$safe_age = $_POST["age"];

// パラメータの存在チェック
$name = isset($_GET["name"]) ? $_GET["name"]: "ゲスト";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/complete.css">
    <title>完了画面</title>
</head>
<body>
    <div class="container">
        <h1>ユーザー登録（3/3）完了</h1>
        <div>
            <p><?php echo $safe_name . "さん、登録が完了しました！" ?></p>
            <p><?php echo "確認メールを " . $safe_email . " に送信しました。" ?></p>
        </div>
        <div>
            <a  href="./input.php">
                <button type="button" class="back-to-firstpage_button">最初に戻る</button>
            </a>
        </div>
    </div>
</body>
</html>