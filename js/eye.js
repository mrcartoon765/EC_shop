let img_files = Array.from(Array(20).keys(), x => x + '.png');
var img_file = img_files[Math.floor(Math.random() * img_files.length)];
let random_img;
let this_file_name = location.href.split('/');
let img_folder = this_file_name[0] + '/image/eye/';
let search_img = img_folder + img_file;
let random_img_answer;
const image_answer = img_file;
let only = 0;
let count = 0;
let n = 0;
let startTime = 0;
let score = 0;
$(function () {
	$("select").on('change', function () {
		count = $(this).val();
		only = only + Number(count);
		document.getElementById("only").innerHTML =
			'<p style="font-color:red;">残り　' + only + '</p>';
		$.ajax({
			type: "POST",
			url: "/eye.php",
			//       async: false, //データ同期
			//       frequency: 2,
			data: {
				counts: count,
				img: img_file
			},
			dataType: "text",
		}).done(function (data) {
			for (let i = 0; i < count; i++) {
				document.getElementById("img_search").innerHTML =
					'<img src=' + search_img + ' style=' + 'width="75rem" height="75rem" float:left;>';
				var search_img_file = $(this)[0]['data'];
				var search_img_file = (search_img_file.substr(search_img_file.indexOf('&img=') + 5)); //検索する画像ファイル名
				random_img_count =
					document.getElementById("description").innerHTML =
					'<h4 class="text-center">同じ画像を画像群から探してください</h4>';

				random_img = img_files.sort(() => Math.random() - 0.5);
				random_img.forEach(function (element) {
					n = n + 1; //idにユニークIDを与える
					y = element; //
					random_img = '<img hspace="" src=' + img_folder + element + ' id="' + y + n + '" class="img-fluid" style= height="75rem" float:left";>';
					click_img_file = random_img;
					document.getElementById("img_one_loop").innerHTML +=
						click_img_file;
				});

			}
		}).fail(function (jqXHR, textStatus, errorThrown) {
			console.log('ミス');
			console.log("ajax通信に失敗しました");
			console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
			console.log("textStatus     : " + textStatus); // タイムアウト、パースエラー
			console.log("errorThrown    : " + errorThrown.message); // 例外情報
			console.log("URL            : " + url);
		});
	});
	$(document).on('click', 'img', function () {
		random_img_answer = ($(this).attr('id')); //探す画像のID取得
		d = random_img_answer.indexOf('g');
		r_i_a_c = random_img_answer.substring(0, d + 1); //画像群からユニークIDを除去
		if (image_answer == r_i_a_c) {
			score += 1;
			only -= 1;
			console.log(score);
			console.log(only);
			document.getElementById("score").innerHTML =
				'<h3 class="text-center" style="color:green;">正解数：' + score + '個</h3></div>';
			document.getElementById("only").style.display = "";
			if (only == 0) {
				document.getElementById("only").innerHTML =
					'<h2 style="color:green;">お疲れ様でした！<br>全て見つけました！</h2>';
			} else {
				document.getElementById("only").innerHTML =
					'<p class="text-center" >残り　<span style="color:red;">' + only + '</span>　個あります</p>';
			}
			document.getElementById(random_img_answer).style.display = "none";
			document.getElementById(random_img_answer).addClass = "fluffy";
		}
	});
	// $(document).on('click', 'button', function () {
	// 	document.getElementById(random_img_answer).addClass('fluffy');
	// 	console.log(document.getElementById(random_img_answer).addClass('fluffy'));
	// });
});


//タイマー作成


// const min = document.getElementById("min");
// const sec = document.getElementById("sec");

// function countdown() {
// 	const now = new Date();
// 	const tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
// 	const diff = tomorrow.getTime() - now.getTime();
// 	const calcMin = Math.floor(diff / 1000 / 60) % 60;
// 	const calcSec = Math.floor(diff / 1000) % 60;

// 	min.innerHTML = calcMin < 10 ? '0' + calcMin : calcMin;
// 	sec.innerHTML = calcSec < 10 ? '0' + calcSec : calcSec;
// }
// countdown();
// setInterval(countdown, 1000);