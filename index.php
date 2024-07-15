<?php
$number = '';
$grade = '';
$uff = '';

if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    if ($number < 100 & $number >= 80) {
        $uff = 'Congratulations !';
        $grade = "A+";
    } elseif ($number < 80 & $number >= 70) {
        $uff = 'Congratulations !';
        $grade = "A";
    } elseif ($number < 70 & $number >= 60) {
        $grade = "B";
    } elseif ($number < 60 & $number >= 50) {
        $grade = "C";
    } elseif ($number < 50 & $number >= 40) {
        $grade = "D";
    } elseif ($number < 40 & $number >= 33) {
        $grade = "E";
    } elseif ($number < 33 & $number >= 0) {
        $grade = "F";
    } elseif ($number < 100) {
        $grade = "Invalid";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Grade Generator</title>
</head>

<body class="bg-gray-500">
    <div class="h-screen flex justify-center items-center">

        <div class="drop-shadow-2xl w-96 h-auto bg-gray-200 flex items-center justify-center flex-col rounded-md p-4 ">

            <h3 class="mt-3 font-bold text-gray-500 text-3xl">Grade Generator</h3>

            <form class="p-5 w-full" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input class="w-full p-1 rounded-md" required type="number" name="number" placeholder="Type number" min="0" max="100"><br>
                <input class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 mt-3 px-4 rounded" type="submit" name="submit" value="Submit">
            </form>

            <p class="text-gray-500"> <?php
                if ($number < 100 & $number > 0) {
                    echo "$uff Your number is '$number' & Grade is '$grade'";
                } else {
                    echo $grade;
                }

                ?></p>
        </div>
    </div>
</body>

</html>