//郵便番号から住所検索
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
            alert("読み込みに失敗しました。");
          },
      );
        }
      });
    });
//いいねボタン
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
//管理者画面削除ボタン
	$(".delete").click(function () {
    var id = this.dataset.id;
    if (confirm("ID:" + id + "番のコンテンツを本当に削除していいですか？")) { // OK
    $("#delete_form_" + id).submit();
    } else { // キャンセル
    return false;
    };
    });
//pay.jp管理
    $(".confirm").click(function() {
    $(".error").empty();
    var number = $("#card-number").val();
    var cvc = $("#cvc").val();
    var exp_month = $("#exp_month").val();
    var exp_year = $("#exp_year").val();
     });
//詳細ページスライダーアニメーション
    $('.slider').slick({
      Infinity: true,
      autoplay:true,
      autoplaySpeed:5000,
      dots:true,
      slidesToShow:4,
      responsive:[
          {
              breakpoint: 1024,
              settings:{
                  slidesToShow:3,
              }
          },
          {
              breakpoint: 768,
              settings:{
                  slidesToShow:2,
              }
          },
          {
              breakpoint: 480,
              settings:{
                  slidesToShow:1,
              }
          },
      ]
  });
  //インデックストップページスライダー画面
  $(document).on('ready', function() {
    $(".full-screen").slick({
      centerMode: true,
      centerPadding: '5%',
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      infinite: true,
    });
  });
//数量変更ボタン
$(function(){
  var arySpinnerCtrl = [];
  var spin_speed = 20; //変動スピード
  //長押し押下時
  $('.btnspinner').on('touchstart mousedown click', function(e){
      if(arySpinnerCtrl['interval']) return false;
      var target = $(this).data('target');
      arySpinnerCtrl['target'] = target;
      arySpinnerCtrl['timestamp'] = e.timeStamp;
      arySpinnerCtrl['cal'] = Number($(this).data('cal'));
      //クリックは単一の処理に留める
      if(e.type == 'click'){
          spinnerCal();
          arySpinnerCtrl = [];
          return false;
      }
      //長押し時の処理
      setTimeout(function(){
          //インターバル未実行中 + 長押しのイベントタイプスタンプ一致時に計算処理
          if(!arySpinnerCtrl['interval'] && arySpinnerCtrl['timestamp'] == e.timeStamp){
              arySpinnerCtrl['interval'] = setInterval(spinnerCal, spin_speed);
          }
      }, 500);
  });
  //長押し解除時 画面スクロールも解除に含む
  $(document).on('touchend mouseup scroll', function(e){
      if(arySpinnerCtrl['interval']){
          clearInterval(arySpinnerCtrl['interval']);
          arySpinnerCtrl = [];
      }
  });
  //変動計算関数
  function spinnerCal(){
      var target = $(arySpinnerCtrl['target']);
      var num = Number(target.val());
      num = num + arySpinnerCtrl['cal'];
      if(num > Number(target.data('max'))){
          target.val(Number(target.data('max')));
      }else if(Number(target.data('min')) > num){
          target.val(Number(target.data('min')));
      }else{
          target.val(num);
      }
  }
});
//テーブルソート
$(function(){
  $('.sort-table').tablesorter({
      textExtraction: function(node){
          var attr = $(node).attr('data-value');
          if(typeof attr !== 'undefined' && attr !== false){
              return attr;
          }
          return $(node).text();
      }
  });
});