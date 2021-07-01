
// window.addEventListener('load', () => {
//   if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.register('sw.js').then(function(registration) {
//         console.log('ServiceWorker registration successful with scope: ', registration.scope);
//     }).catch(function(err) {
//         console.log('ServiceWorker registration failed: ', err);
//     });
//     }
// });

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
  };

//郵便番号から住所検索
$(function () {
  $('#address_search').click(function () {
    var zip1 = $('#zip1').val();
    var zip2 = $('#zip2').val();
    var entry_url = $('#entry_url').val();
    if (zip1.match(/[0-9]{3}/) === null || zip2.match(/[0-9]{4}/) === null) {
      alert('正確な郵便番号を入力してください。');
      return false;
    } else {
      $.ajax({
        type: "get",
        url: entry_url + "/postcode_search.php?zip1=" + escape(zip1) + "&zip2=" + escape(zip2),
      }).then(
        function (data) {
          if (data == 'no' || data == '') {
            alert('該当する郵便番号がありません');
          } else {
            $('#address').val(data);
          }
        },
        function (data) {
          alert("読み込みに失敗しました。");
        },
      );
    }
  });
});

//欲しい！ボタン
$(function() {
      for_count = $("#for_count0").val();
      for_count_end = $("#for_count_end").val();
      var $want = '.btn_want_status', //欲しい！ボタンセレクタ
        id;
      var $hosii = '#hosii_sum'
      var $this = $(this);
      for (let i = 0; i < for_count_end; i++) {
        $.ajax({
          type: 'POST',
          url: '/config/want_status.php',
          dataType: 'json',
          async: false, //データ同期
          frequency: 2,
          data: {
            product_id: $("#product_id" + for_count).val(),
            table_name: $("#table" + for_count).val(),
          }
        }).done(function (data) {
          console.log('success');
          $($want + for_count).toggleClass(data.want);
          $($want + for_count).html(data.icon);
          $($hosii + for_count).text(data.sum + ' 欲しい！');
          for_count++;
        }).fail(function (jqXHR, textStatus, errorThrown) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
          console.log("ajax通信に失敗しました");
          console.log("jqXHR          : " + jqXHR.status); // HTTPステータス取得
          console.log("textStatus     : " + textStatus); // タイムアウト、パースエラー
          console.log("errorThrown    : " + errorThrown.message); // 例外情報
          console.log("URL            : " + url);
        });
      };

      //押下した時の色変化と欲しい！状態の変更
      $('.btn-want').on('click', function (e) {
        e.stopPropagation();
        var $this = $(this);
        id = $this.parents('.post').data('want');
        table = $this.parents('.post').data('table');
        image = $this.parents('.post').data('image');
        no = $this.parents('.post').data('no');
        $.ajax({
          type: 'POST',
          url: '/config/want-function.php', //post送信を受けとるphpファイル
          dataType: 'json',
          data: {
            product_id: id, // //商品IDキー:商品id
            table_name: table,
            count_no: no,
            image: image
          } //テーブル名キー:テーブル名}
        }).done(function (data) {
          console.log('Ajax Success');
          console.log(data);
          // 欲しい！の総数を増減させる
          $($hosii + data.count_no).text(data.sum + ' 欲しい！');
          // 欲しい！取り消しのスタイル
          $($want + data.count_no).children('i').toggleClass('far'); //空洞ハート
          $($want + data.count_no).children('i').toggleClass('fas'); //ハート
          // 欲しい！押した時のスタイル
          $($want + data.count_no).toggleClass('active'); //赤か黒
        }).fail(function (jqXHR, textStatus, errorThrown) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
          console.log("ajax通信に失敗しました");
          console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
          console.log("textStatus     : " + textStatus); // タイムアウト、パースエラー
          console.log("errorThrown    : " + errorThrown.message); // 例外情報
          console.log("URL            : " + url);
        });
      });

      //欲しい！商品リスト一覧取得
      $(function () {
        w_l_c = $("#want_list_count0").val();
        w_l_e = $("#want_list_end").val();
        var $w_l = '#want_list', //欲しい！ボタンセレクタ
        id;
        var $img_dir = $("#img_dir").val();
        img_tag_src = '<img style="width: 100%;" src='+ $img_dir;
        img_tag_alt = ' alt="product_img">';
        for (let i = 0; i < w_l_e; i++) {
          $.ajax({
            type: 'POST',
            url: '/customer/want_list-function.php',
            dataType: 'json',
            async: false, //データ同期
            // frequency: 2,
            data: {
              want_list_product_id: $($w_l+"_id" + w_l_c).val(),
              want_list_table_name: $($w_l+"_table" + w_l_c).val(),
              want_list_count_no: $($w_l+"_count_no" + w_l_c).val(),
            }
          }).done(function(data){
            $($w_l+'_title' + w_l_c).text(data.title);
            $($w_l+'_price' + w_l_c).text('￥'+data.price);
            // $($w_l+'_img' + w_l_c).html(img_tag_src+data.table_name+'/'+ data.image + '>');
            $($w_l+'_want_sum' + w_l_c).text(data.want_list_sum + ' 欲しい！');
            w_l_c++;

          }).fail(function (jqXHR, textStatus, errorThrown) {
            // 通信失敗時の処理
            alert('ファイルの取得に失敗しました。');
            console.log("ajax通信に失敗しました");
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus); // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
            console.log("URL            : " + url);
          });
        };
      });
    });


    //管理者画面削除ボタン
      $(function () {
        $(".delete").click(function () {
          var id = this.dataset.id;
          if (confirm("ID:" + id + "番のコンテンツを本当に削除していいですか？")) { // OK
            $("#delete_form_" + id).submit();
          } else { // キャンセル
            return false;
          };
        });
        });

        //pay.jp管理
        $(".confirm").click(function () {
          $(".error").empty();
          var number = $("#card-number").val();
          var cvc = $("#cvc").val();
          var exp_month = $("#exp_month").val();
          var exp_year = $("#exp_year").val();
        });

        //詳細ページスライダーアニメーション
        $('.slider').each(function(){
         var sliderCount =$(this).children('li').length;
         var randomStart =Math.floor(Math.random() * sliderCount);
        $(this).not('.slick-initialized').slick({
          initialSlide: randomStart,
          Infinity: true,
          autoplay: true,
          adaptiveHeight: true,
          autoplaySpeed: 2000,
          dots: false,
          prevArrow: false,
          nextArrow: false,
          swipe: true,
          swipeToSlide: true,
          cssEase: 'linear',
          slidesToShow: 4,
          centerMode: true,
          centerPadding: '10%',
          responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                centerMode: true,
                centerPadding: '15%',
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                centerMode: true,
                centerPadding: '15%',
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                centerMode: true,
                centerPadding: '15%',
              }
            }]
        });
        });

        //インデックストップページスライダー画面
        $('.slider-index').each(function(){
          var sliderCount =$(this).children('li').length;
          var randomStart =Math.floor(Math.random() * sliderCount);
         $('.slider-index').not('.slick-initialized').slick({
           initialSlide: randomStart,
           Infinity: true,
           autoplay: true,
           adaptiveHeight: true,
           autoplaySpeed: 2000,
           dots: false,
           prevArrow: false,
           nextArrow: false,
           swipe: true,
           swipeToSlide: true,
           cssEase: 'linear',
           slidesToShow:  4,
           centerMode: true,
           centerPadding: '10%',
           responsive: [{
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 centerMode: true,
                 centerPadding: '15%',
               }
             },
             {
               breakpoint: 768,
               settings: {
                 slidesToShow: 2,
                 centerMode: true,
                 centerPadding: '15%',
               }
             },
             {
               breakpoint: 480,
               settings: {
                 slidesToShow: 2,
                 centerMode: true,
                 centerPadding: '15%',
               }
             },
           ]
         });
         });

        //数量変更ボタン
        $(function () {
          var arySpinnerCtrl = [];
          var spin_speed = 20; //変動スピード
          //長押し押下時
          $('.btnspinner').on('touchstart mousedown click', function (e) {
            if (arySpinnerCtrl['interval']) return false;
            var target = $(this).data('target');
            arySpinnerCtrl['target'] = target;
            arySpinnerCtrl['timestamp'] = e.timeStamp;
            arySpinnerCtrl['cal'] = Number($(this).data('cal'));
            //クリックは単一の処理に留める
            if (e.type == 'click') {
              spinnerCal();
              arySpinnerCtrl = [];
              return false;
            }
            //長押し時の処理
            setTimeout(function () {
              //インターバル未実行中 + 長押しのイベントタイプスタンプ一致時に計算処理
              if (!arySpinnerCtrl['interval'] && arySpinnerCtrl['timestamp'] == e.timeStamp) {
                arySpinnerCtrl['interval'] = setInterval(spinnerCal, spin_speed);
              }
            }, 500);
          });
          //長押し解除時 画面スクロールも解除に含む
          $(document).on('touchend mouseup scroll', function (e) {
            if (arySpinnerCtrl['interval']) {
              clearInterval(arySpinnerCtrl['interval']);
              arySpinnerCtrl = [];
            }
          });
          //変動計算関数
          function spinnerCal() {
            var target = $(arySpinnerCtrl['target']);
            var num = Number(target.val());
            num = num + arySpinnerCtrl['cal'];
            if (num > Number(target.data('max'))) {
              target.val(Number(target.data('max')));
            } else if (Number(target.data('min')) > num) {
              target.val(Number(target.data('min')));
            } else {
              target.val(num);
            }
          }
        });
        //テーブルソート
        $(function () {
          $('.sort-table').tablesorter({
            textExtraction: function (node) {
              var attr = $(node).attr('data-value');
              if (typeof attr !== 'undefined' && attr !== false) {
                return attr;
              }
              return $(node).text();
            }
          });
        });