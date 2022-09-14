<!DOCTYPE html>
<html lang="ro" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="bmi_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="bmi_style.css" >
    <script defer async src="bmi_soft.js"></script>
    <title>BMI Calculator</title>
</head>
<body>
    <h1>BMI Calculator</h1>
    <main>
        <form method="POST" action="">
            <label>
                <input placeholder="Greutatea în kg" type="number" id="greutate" name="greutate" required>
                <span class="span-kg" id="greutateSpan">kg</span>
            </label>
            <label>
                <input placeholder="Înălțimea în cm" type="number" id="inaltime" name="inaltime" value_max="2.7" required>
                <span class="span-cm" id="inaltimeSpan">cm</span>
            </label>
            <button type="submit">Calculează</button>
        </form>
        <div class="rezultate">
            <?php
                session_start();
                $_SESSION['inregistrare'] = $_POST;

                foreach($_SESSION as $inregistrare) {
                    $greutate = 87;
                    $inaltime = 178;
                    $formInaltime = pow($inaltime, 2);
                    $BMI = $greutate / $formInaltime * 10000;
                    $formBMI = number_format($BMI, 2);
                    echo "<p>$formBMI</p>";
                }
            ?>
        </div>
    </main>
</body>
</html>