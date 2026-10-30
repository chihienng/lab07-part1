
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days of the Week</title>
</head>
    <h1>PHP Variables, Arrays, and Operators</h1>
<body>
    <?php
        
        $days = array(
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        );

    
        echo "<p>The days of the week in English are:<br>";
        echo implode(", ", $days) . ".</p>";

        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vedredi", "Samedi");
        echo "<p>The days of the week in French are:<br>";
        echo implode(", ", $days) . "</p>";
    ?>
</body>
</html>
