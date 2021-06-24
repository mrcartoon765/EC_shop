# portforio


<img src="/image/image-top.png">

phpフルスクラッチECサイト

パレオな男　鈴木裕著の本購入サイトとそれに付随した商品の購入サイト

# EC_shop


作成機能（会員側）<br>
・会員登録<br>
・会員削除機能<br>
・会員情報編集<br>
・住所登録の際の郵便番号から住所検索(ajax)<br>
・カート機能<br>
・カート内商品数量変更機能（jquery）<br>
・商品一覧画面<br>
・欲しい！（いいね）機能（ajax,jquery）<br>
・購入履歴機能（商品別詳細、個数、単価）<br>
・商品購入数量変更ボタン(jquery)<br>
・ページング機能<br>
・商品詳細画面<br>
・Bootstrapレイアウト　(カード表示がメイン)<br>
・関連おすすめ商品スライド機能(jquery)<br>
・問い合わせ機能<br>
・全商品から商品名での検索機能<br>

作成機能（管理側側）<br>
・記事（トップニュース）管理機能<br>
・会員管理機能<br>
・受注管理、明細表示機能<br>
・書籍商品データ新規作成・編集・削除　機能<br>
・副商材商品データ新規作成・編集・削除　機能<br>

<h2>インフラ</h2>
・開発環境 M1 mac mini
・dockerコンテナのみで作成(Linux,Apache,Mysql 5.7,Php,https-portal)<br>
・AWSのEC2内のdockerコンテナのみで稼働<br>
・無料枠でなるべく収まるように、EC2のスワップファイル4GBを拡張<br>


<img src="/image/image-aws.png">