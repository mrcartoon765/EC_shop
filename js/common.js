$(function(){
  $('#address_search').click(function(){
    // もしアドレスサーチ(郵便番号から住所を入力)がクリックされた時
    var zip1 = $('#zip1').val();
    // regist.htmlの
    var zip2 = $('#zip2').val();
    var entry_url = $('#entry_url').val();
    // idのentry_url registの一番上
    if (zip1.match(/[0-9]{3}/) === null || zip2.match(/[0-9]{4}/) === null){
      //もしzip１が0-9の３桁の数字ではない場合　あるいは　もしzip2が0-9の4桁の数字ではない場合
      //matchは失敗したらnullが入る,
      alert('正確な郵便番号を入力してください。');
      return false; //ページ遷移をしない
    } else {
      //成功した場合
      $.ajax({
        //$.ajax ({PHPのファイル情報})　{内には、オブジェクト、配列をいれていく}
        type: "get",
        //get通信
        url : entry_url + "/postcode_search.php?zip1=" + escape(zip1) + "&zip2=" + escape(zip2),
        //postcode_serach.php

        //entry_urlを呼び出す
        //escapeはエスケープ処理
        //getでデータを2つ送っている数字３桁と数字４桁
      }).then(
        //AJAX処理が成功したら
        function(data){
          if (data == 'no' || data == '') {
            alert('該当する郵便番号がありません');
          } else {
            $('#address').val(data);
            // idの割り当てを丸ごと取得する
            // ..valのdataに書きこむ
          }
          //
          },
          function(data){
            //失敗したら
            alert("読み込みに失敗しました。")
          },
      );
        }
      });
    });