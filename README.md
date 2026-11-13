# php-form-practice

## 概要
COACHTECH 教材 Tutorial 7-4「フォームとデータ受け渡し ハンズオン演習」で作成した成果物です。
ユーザー登録フォームを作成し、入力画面・確認画面・完了画面の3画面構成で実装しました。
フォームからPOSTでデータを受け取り、入力内容の確認やURLパラメータを利用した画面遷移を行います。

## 使用技術
- PHP 8.2
- HTML5
- CSS3
- Docker
- ChatGPT（エラー発生時の検索補助）

## 学んだこと
- formタグのaction属性とmethod属性を使用して、フォームの入力データをPOSTで別のPHPファイルに受け渡す方法。
- htmlspecialchars()を使用したHTMLエスケープ処理や、urlencode()を使用したURLエンコードの方法。
- PHPのheader("Location: ...")を使用したリダイレクト処理と、$_GET・$_POSTによるデータの受け取り方。

## 動作確認
- Dockerコンテナを起動する。
    docker compose up -d
- ブラウザで以下のURLにアクセスする。
    http://localhost/7-4-3_hands-on/practice/input.php
- 入力画面で名前・メールアドレス・年齢を入力し、「確認する」ボタンを押す。
- 確認画面で入力内容が正しく表示されることを確認する。
- 「登録する」ボタンを押し、登録完了画面へ遷移することを確認する。