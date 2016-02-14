<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Php Validation</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
$first_nameErr = $last_nameErr = $emailErr = $genderErr = $bdayErr = "";
$first_name = $last_name = $email = $gender = $bday = $favcolor = $points = $marital_status = $social_status = $live = $comment = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$favcolor = test_input($_POST["favcolor"]);
	$points = test_input($_POST["points"]);
	$marital_status = test_input($_POST["marital_status"]);
	$social_status = test_input($_POST["social_status"]);
	$live = test_input($_POST["live"]);
	$comment = test_input($_POST["comment"]);


	if (empty($_POST["first_name"])) {
		$first_nameErr = "Введите ваше имя";
	}
	else {
		$first_name = test_input($_POST["first_name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
			$first_nameErr = "Разрешены только английские буквы и пробелы";
		}
	}

	if (empty($_POST["last_name"])) {
		$last_nameErr = "Введите ваше имя";
	}
	else {
		$last_name = test_input($_POST["last_name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
			$last_nameErr = "Разрешены только английские буквы и пробелы";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Введите ваш Email";
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Неправильный формат email-а";
		}
	}
	if (empty($_POST["bday"])) {
		$bdayErr = "Введите дату рождения";
	}
	else {
		$bday = test_input($_POST["bday"]);
	}

	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		$genderErr = "Введите ваш пол";
	} else {
		$gender = test_input($_POST["gender"]);
	}

	if (empty($_POST["social_status"])) {
		$social_status = "Не указано!";
	} else {
		$social_status = test_input($_POST["social_status"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="wrap">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<fieldset class="first">
			<legend>Коротко о себе</legend>
			<ul>
				<li>
					<label>Имя:
						<input type="text" name="first_name"  value="<?php echo $first_name;?>" >
					</label>
					<span class="error">* <?php echo $first_nameErr;?></span>
				</li>
				<li>
					<label>Фамилия:
						<input type="text" name="last_name"  value="<?php echo $last_name;?>">
					</label>
					<span class="error">* <?php echo $last_nameErr;?></span>
				</li>
				<li>
					Пол:
					<label>
						<input type="radio"  name="gender" value="мужской"  <?php if (isset($gender) && $gender=="мужской") echo "checked";?>>мужской
					</label>
					<label>
						<input type="radio" name="gender" value="женский" <?php if (isset($gender) && $gender=="женский") echo "checked";?>>женский
					</label>
					<span class="error">* <?php echo $genderErr;?></span>
				</li>
				<li>
					<label>
						E-mail: <input type="text" name="email" value="<?php echo $email;?>">
					</label>
					<span class="error">* <?php echo $emailErr;?></span>
				</li>
				<li>
					<label>День рождения:
						<input type="date" name="bday" value="<?php echo $bday;?>">
					</label>
					<span class="error">* <?php echo $bdayErr;?></span>
				</li>
				<li>
					<label>Ваш любимый цвет:
						<input type="color" name="favcolor" value="<?php echo $favcolor;?>">
					</label>
				</li>
				<li>
					<label>Ваша средняя оценка:
						<input type="range" name="points" min="0" max="10">
					</label>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Подробнее о себе</legend>
			<ul  class="small stext">
				<li>
					<label>
						<input type="text" name="marital_status" value="<?php echo $marital_status;?>">Семейное положение
					</label>
				</li>
				<li>
					<label>
						<input type="text"  name="social_status" value="<?php echo $social_status;?>">Социальный статус
					</label>
				</li>
				<li>
					<label>
						<input type="text" name="live" value="<?php echo $live;?>">Местожительства
					</label>
				</li>
				<li class="head_list_bold">
					<label for="comment">Ваши пожелания:</label>
				</li>
				<li>
					<textarea id="comment" name="comment" rows="10" value="<?php echo $comment;?>"></textarea>
				</li>
			</ul>
		</fieldset>

		<input type="submit" name="submit" value="Submit">

	</form>
	<div class="your-input">
		<?php
		echo "<h2>Проверте правильность введеных Вами данных:</h2>";
		echo "<ul>";
			echo "<li>";
			echo "<span class='inputData'> Ваше имя:</span>" . " " . $first_name;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваша фамилия:</span>" . " " . $last_name;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваш електронный адрес:</span>" . " " . $email;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Дата Вашего дня рождения:</span>" . " " . $bday;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваш любимый цвет:</span>" . " " . $favcolor;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваша средняя оценка:</span>" . " " .  $points;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваш пол:</span>" . " " . $gender;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваше семейное положение:</span>" . " " . $marital_status;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваш социальный статус:</span>" . " " . $social_status;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваше место проживания:</span>" . " " . $live;
		echo "</li>";
		echo "<li>";
			echo "<span class='inputData'> Ваши пожелания:</span>" . " " . $comment;
		echo "</li>";
		echo "<ul>";
		?>
	</div>
</div>

</body>
</html>