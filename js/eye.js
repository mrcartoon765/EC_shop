let img_files = Array.from(Array(20).keys(), x => x + '.png');
var img_file = img_files[Math.floor(Math.random() * img_files.length)];
let random_img;
let this_file_name = location.href.split('/');
let img_folder = this_file_name[0] + '/image/eye/';
let search_img = img_folder + img_file;
const image_answer = img_file;
let only = 0;
let n = 0;
$(function () {

	$("select").on('change', function () {
		var count = $(this).val();
		only = only + Number(count);
		document.getElementById("only").innerHTML =
			'<p>残り　' + only;
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
					'<img src=' + search_img + '  style=' + 'width="75rem" height="75rem" float:left;>';
				var search_img_file = $(this)[0]['data'];
				var search_img_file = (search_img_file.substr(search_img_file.indexOf('&img=') + 5)); //検索する画像ファイル名
				random_img_count =
					document.getElementById("description").innerHTML =
					'<p>同じ画像を下の画像群から探してください</p>';

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
	score = 0;
	$(document).on('click', 'img', function () {
		random_img_answer = ($(this).attr('id')); //探す画像のID取得
		d = random_img_answer.indexOf('g');
		r_i_a_c = random_img_answer.substring(0, d + 1); //画像群からユニークIDを除去
		if (image_answer == r_i_a_c) {
			score += 1;
			only -= 1;
			document.getElementById("score").innerHTML =
				'<p>正解数：' + score + '</p>';
			document.getElementById("only").style.display = "";
			document.getElementById("only").innerHTML =
				'<p>残り　' + only;
			// Number(only) - 1;
			//  + '個あります</p>';
			document.getElementById(random_img_answer).style.display = "none";
		}
	});

	// 	var time_up = 180;
	// 	var time_max = 180;
	// 	var intervalid;
	// 	var start_flag = false;

	// 	function count_start() {
	// 		console.log("count_start");
	// 		if (start_flag === false) {
	// 			intervalid = setInterval(count_down, 1000);
	// 			start_flag = true;
	// 		}
	// 	}

	// 	function count_down() {
	// 		console.log("count_down");
	// 		var timer = document.getElementById("timer");
	// 		if (to_timeup === 0) {
	// 			timer.innerHTML = 'お疲れ様でした！'
	// 			timer.style.color = "red";
	// 			count_stop();
	// 		} else {
	// 			to_timeup--;
	// 			padding();
	// 		}
	// 	}

	// 	function padding() {
	// 		var timer = document.getElementById("timer");
	// 		var min = 0;
	// 		var sec = 0;
	// 		min = Math.floor(to_timeup / 60);
	// 		sec = (to_timeup % 60);
	// 		min = ("0" + min).slice(-2);
	// 		sec = ("0" + sec).slice(-2);
	// 		timer.innerHTML = min + ":" + sec;
	// 	}

	// 	function count_stop() {
	// 		console.log(count_stop);
	// 		clearInterval(intervalid);
	// 		start_flag = false;
	// 	}

	// 	function count_reset() {
	// 		console.log(count_reset);
	// 		var timer = document.getElementById("timer");
	// 		clearInterval(intervalid);
	// 		start_flag = false;
	// 		to_timeup = max;
	// 		padding();
	// 		timer.style.color = "black";
	// 	}

	// 	window.onload = function () {
	// 		// console.log("mumei");
	// 		padding();
	// 		var startbutton = document.getElementById("startbutton");
	// 		startbutton.addEventListener("click", count_start, false);
	// 		var stopbutton = document.getElementById("stopbutton");
	// 		stopbutton.addEventListener("click", count_stop, false);
	// 		var resetbutton = document.getElementById("resetbutton");
	// 		resetbutton.addEventListener("click", count_reset, false);

	// 	}

	// }

});