$(function(){
  $('#address_search').click(function(){
    var zip1 = $('#zip1').val();
    var zip2 = $('#zip2').val();
    var entry_url = $('#entry_url').val();
    if (zip1.match(/[0-9]{3}/) === null || zip2.match(/[0-9]{4}/) === null){
      alert('正確な郵便番号を入力してください。');
      return false;
    } else {
      $.ajax({
        type: "get",
        url : entry_url + "/postcode_search.php?zip1=" + escape(zip1) + "&zip2=" + escape(zip2),
      }).then(
        function(data){
          if (data == 'no' || data == '') {
            alert('該当する郵便番号がありません');
          } else {
            $('#address').val(data);
          }
          },
          function(data){
            alert("読み込みに失敗しました。")
          },
      );
        }
      });
    });

    $(function(){
      var $want = $('.btn-want'), //いいねボタンセレクタ
                  wantName; //投稿ID
      $want.on('click',function(e){
          e.stopPropagation();
          var $this = $(this);
          //カスタム属性（post_id）に格納された投稿ID取得
            wantName = $this.parents('.post').data('wantName');
          $.ajax({
            type: 'POST',
            url: '../../config/want.class.php', //post送信を受けとるphpファイル
            data: {want_name: wantName} //{キー:投稿ID}
          }).done(function(data){
              console.log('Ajax Success');
              // いいねの総数を表示
              $this.children('i').toggleClass('far'); //空洞ハート
              // いいね押した時のスタイル
              $this.children('i').toggleClass('fas'); //塗りつぶしハート
              $this.children('i').toggleClass('active');
              $this.toggleClass('active');
              $this.children('span').html(data);
              // いいね取り消しのスタイル
          }).fail(function(msg) {
              console.log('Ajax Error');
          });
      });
    });