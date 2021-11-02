<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>포켓몬 홈페이지</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/css/style.css">
</head>

<body id="target">
	<header>
		<img src="https://data1.pokemonkorea.co.kr/newdata/2021/08/2021-08-18_23-02-01-91057-1629295321.png" alt="포켓몬월드">
	  <h1>Welcome, <a href="https://localhost/html/ex_html_pokemon5.html" target="_blank">Pokemon World</a></h1>
	</header>
	<nav>
	  <ul>
     <li class="enroll"><a href="http://localhost/html/page_enroll.html">포켓몬 등록</a></li>

	   <li class="starting">스타팅 포켓몬</li>
	    <ol>
	      <?php
				echo file_get_contents("list.txt");
				 ?>
	    </ol>

	    <li class="property">포켓몬 속성</li>
	    <ul>
				<?php
				echo file_get_contents("list2.txt");
				 ?>
	    </ul>
	  </ul>
	</nav>

	<div id="control">
		<input type="button" value="일반모드" id="white_btn"/>
		<input type="button" value="다크모드" id="black_btn"/>
	</div>

	<script src="http://localhost/javascript/script.js"></script>

	<article>
		<?php
			if(empty($_GET['id'])==false){
			echo file_get_contents($_GET['id'].".txt");
		}
		 ?>
	</article>

</body>
</html>
