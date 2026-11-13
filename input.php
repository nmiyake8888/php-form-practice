<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/input.css">
    <title>入力画面</title>
</head>
<body>
    <div class="container">
        <h1>ユーザー登録（1/3）入力</h1>
        <div class="form_wrapper">
            <form class="form" action="confirm.php" method="post">
                <div class="form_content">
                    <label for="name">お名前：</label>
                    <br>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="山田 太郎"
                        required
                    />
                </div>
                <div class="form_content">
                    <label for="e-mail">メールアドレス：</label>
                    <br>
                    <input
                        type="email"
                        name="email"
                        id="e-mail"
                        placeholder="example@gmial.com"
                        required
                    />
                </div>
                <div class="form_content">
                    <label for="age">年齢：</label>
                    <br>
                    <input
                        type="number"
                        name="age"
                        min="0"
                        max="120"
                        id="age"
                        placeholder="29"
                        required
                    />
                </div>
                <div class="form_content">
                    <button type="submit" href="./confirm.php">確認画面へ</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>