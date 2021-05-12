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