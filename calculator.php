<style>
	button {
		border: 1px solid blue;
		background: blue;
		padding: 10px;
		color: white;
		cursor: pointer;
        margin-top: 18px;
	}
	input, select {
		padding: 10px;
		border: 1px solid blue;
	}
</style>

<?php
$result = "";

    if(isset($_POST['submit'])) {
        $no1 = $_POST['num1'];
        $no2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case "+":
                $result = $no1 + $no2;
            break;            
            case "-":
                $result =  $no1 - $no2;
            break;            
            case "*":
                $result =  $no1 * $no2;
            break;            
            case "/":
                if($no2 == 0) {
                    $result = "INF";
                } else {
                    $result =  $no1 / $no2;
                }
            break;        }
    }
?>

<form method="post" action="">
    <input type="number" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '' ?>" placeholder="A" required>
    <select name="operator">
        <option value="+" <?php if (isset($_POST['operator']) && $_POST['operator'] == "+") echo "selected='selected'"; ?>>+ (Add)</option>
        <option value="-" <?php if (isset($_POST['operator']) && $_POST['operator'] == "-") echo "selected='selected'"; ?>>- (Subtract)</option>
        <option value="*" <?php if (isset($_POST['operator']) && $_POST['operator'] == "*") echo "selected='selected'"; ?>>x (Multiply)</option>
        <option value="/" <?php if (isset($_POST['operator']) && $_POST['operator'] == "/") echo "selected='selected'"; ?>>/ (Divide)</option>
    </select>
    <input type="number" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '' ?>" placeholder="B" required>
    =
    <input type="text" readonly placeholder="RESULT" value="<?php $result; echo $result ?>">
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>