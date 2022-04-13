<?php
    $host = "localhost";	// $ host 변수 선언, localhost 문자값을 host변수에 넣겠다
    $user = "hanbi5252";	// 데이터베이스 아이디 입력
    $pw = "gksql5252!";		// 데이터베이스 비밀번호 입력
    $dbName = "hanbi5252";		// 데이터베이스 이름 입력, 보통 데이터베이스 아이디랑 같음
    $dbConnect = new mysqli($host, $user, $pw, $dbName);	//데이터베이스 정보 입력 
    $dbConnect->set_charset("utf8");
?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>

<body>
	<?php
		$id = $_POST['gaipId'];	// $ id 변수 선언, 폼 태그 method 속성이 post면 $_POST기입, []안에는 name속성값 입력 
		$pw = $_POST['gaipPw'];
		$name = $_POST['gaipName'];
		$email = $_POST['gaipEmail'];
		$phone = $_POST['gaipHp'];
		$addr = $_POST['gaipAddr'];
		$gender = $_POST['gender_chk'];
		
		$sql = "insert into members(id, pass, name, email, phone, addr, gender) values('$id', '$pw', '$name', '$email', $phone, '$addr', '$gender')";
		// members 테이블에 새로운 레코드 추가
		/*
		insert into members : menbers 테이블에 새로운 레코트(행)를 추가하겠다
		추가할 때 필드 7개 모두 입력 
		values(추가할 값) : 필드에 추가할 값 입력
		*/

    	$result = $dbConnect->query($sql);
		// 데이터베이스 실행

		echo "
              <script>
				  alert('회원가입이 완료되었습니다');
				  location.href = 'index.html';
              </script>
            ";
	?>
</body>
</html>
