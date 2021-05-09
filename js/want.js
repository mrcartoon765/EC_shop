$(function(){
  var $want = $('.btn-want'), //いいねボタンセレクタ
              wantPostId; //投稿ID
  $want.on('click',function(e){
      e.stopPropagation();
      var $this = $(this);
      //カスタム属性（post_id）に格納された投稿ID取得
      wantPostId = $this.parents('.post').data('postid'); 
      $.ajax({
          type: 'POST',
          url: '../../config/want.class.php', //post送信を受けとるphpファイル
          data: { postId: wantPostId} //{キー:投稿ID}
      }).done(function(data){
          console.log('Ajax Success');
          // いいねの総数を表示
          $this.children('span').html(data);
          // いいね取り消しのスタイル
          $this.children('i').toggleClass('far'); //空洞ハート
          // いいね押した時のスタイル
          $this.children('i').toggleClass('fas'); //塗りつぶしハート
          $this.children('i').toggleClass('active');
          $this.toggleClass('active');
      }).fail(function(msg) {
          console.log('Ajax Error');
      });
  });
});