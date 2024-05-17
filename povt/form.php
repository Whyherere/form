    <?php
/* 1 if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['text'])) {
    $text = $_POST['text'];
    $word = str_word_count($text);
    $simv = strlen($text);
    echo "<p>Количество слов: $word</p>";
    echo "<p>Количество символов: $simv</p>";
} */
$dayOfWeek = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $dateStr = $year . '-' . $month . '-' . $day;
    $times = strtotime($dateStr);
    $dayOfWeek = date("l", $times);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--1 <form method="post" action="">
    <textarea name="text" ></textarea><br>
    <input type="submit" value="Подсчитать">
</form> -->
<form method="post" action="">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <select name="month">
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
        <?php endfor; ?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <input type="submit" value="Узнать день недели">
</form>

<?php
if (!empty($dayOfWeek)) {
    echo "<p>День недели: $dayOfWeek</p>";
}
?>

</body>
</html>