$(function(){
  $('#address_search').click(function(){
    var zip1 = $('#zip1').val();
    var zip2 = $('#zip2').val();
    var entry_url = $('#entry_url').val();
    if (zip1.match(/[0-9]{3}/) === null || zip2.match(/[0-9]{4}/) === null){
      もしzip１が0-9の３桁の数字ではない場合　あるいは　もしzip2が0-9の4桁の数字ではない場合
      alert('正確な郵便番号を入力してください。');
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
          },
          function(data){
            alert("読み込みに失敗しました。")
          },
      );
        }
      });
    });