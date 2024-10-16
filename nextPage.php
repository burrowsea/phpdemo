<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Calculator</title>
</head>
<body>



    <form method="post" action="">
        <label for="number_of_values">How many numbers would you like to average?</label>
        <input type="number" id="number_of_values" name="number_of_values" required min="1">
        <br><br>
        <div id="numbers-container"></div>
        <input type="submit" value="Calculate">
    </form>

    <script>
        document.getElementById('number_of_values').addEventListener('input', function () {
            const container = document.getElementById('numbers-container');
            const numValues = parseInt(this.value) || 0;

            container.innerHTML = '';

            for (let i = 1; i <= numValues; i++) {
                const input = document.createElement('input');
                input.type = 'number';
                input.name = `number_${i}`;
                input.placeholder = `Enter number ${i}`;
                input.required = true;
                container.appendChild(input);
                container.appendChild(document.createElement('br'));
            }
        });
    </script>

<?php

?>

<br><br><Br><br>

    <!-- I needed a bit of help from chatGPT for this one -->
    <form method="post">
        <label>Starting Balance (£):</label>
        <input type="number" name="balance" step="0.01" required><br><br>

        <label>Interest Rate (as decimal, e.g. 0.04):</label>
        <input type="number" name="interest_rate" step="0.01" required><br><br>

        <label>Target Balance (£):</label>
        <input type="number" name="target_balance" step="0.01" required><br><br>

        <input type="submit" value="Calculate">
    </form>

<?php

if (isset($_POST['balance']) && isset($_POST['interest_rate']) && isset($_POST['target_balance'])) {

    $balance = $_POST['balance'];
    $interest_rate = $_POST['interest_rate'];
    $target_balance = $_POST['target_balance'];

    echo "<h3>Starting balance: £$balance</h3>";

    $year = 0;
    while ($balance < $target_balance) {
        $balance += $balance * $interest_rate;
        $year++;
        echo "Year $year: £" . number_format($balance, 2) . "<br>";
    }

    echo "<h4>Target reached in $year years.</h4>";
}
?>

<br><br><br><br>

<?php
$dice_words = ["one", "two", "three", "four", "five", "six"];
$random_number = rand(1, 6);
echo "The dice roll result is: " . $dice_words[$random_number - 1];
?>

</body>
</html>



