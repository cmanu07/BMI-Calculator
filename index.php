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
                <span class="span-off" id="greutateSpan">kg</span>
            </label>
            <label>
                <input placeholder="Înălțimea în cm" type="number" id="inaltime" name="inaltime" required>
                <span class="span-off" id="inaltimeSpan">cm</span>
            </label>
            <button type="submit">Calculează</button>
        </form>
        <div class="rezultate">
            <?php
                session_start();
                $_SESSION['inregistrare'] = $_POST;

                foreach($_SESSION as $inregistrare => $valoare) { 
                    foreach($valoare as $atribut => $val) {
                        if ($atribut === 'greutate' ) $greutate = $val;
                        if ($atribut === 'inaltime' ) $inaltime = $val;
                    }
                    if (isset($inaltime, $greutate)) {
                        $formInaltime = pow($inaltime, 2);
                        $BMI = $greutate / $formInaltime * 10000;
                        $formBMI = number_format($BMI, 2);
                        echo "<p>Greutate: <strong>$greutate</strong> kg</p>";
                        echo "<p style='margin-bottom: 1em'>Înălțime: <strong>$inaltime</strong> cm</p>";
                        if ($formBMI < 18.5) echo "<p>Indicele BMI este: <strong>$formBMI</strong> și se încadrează în categoria <span style='color:#FDD037'>SUBPONDERAL</span>.";
                        if ($formBMI >= 18.5 && $formBMI < 25) echo "<p>Indicele BMI este: <strong>$formBMI</strong> și se încadrează în categoria <span style='color:#6BBD99'>NORMOPONDERAL</span>.";
                        if ($formBMI >= 25  && $formBMI < 30) echo "<p>Indicele BMI este: <strong>$formBMI</strong> și se încadrează în categoria <span style='color:#E65C4F'>SUPRAPONDERAL</span>.";
                        if ($formBMI >= 30) echo "<p>Indicele BMI este: <strong>$formBMI</strong> și se încadrează în categoria <span style='color:#861F1F'>OBEZITATE</span>.";
                    }
                }
                session_destroy();
            ?>
        </div>
    </main>
</body>
</html>