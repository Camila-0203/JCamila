<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>OUR TEAM</title>
</head>
<body>
    <?php
          $profiles = ["image/binaday.jpg", "image/camila.jpg", "image/florame.jpg", "image/jules.jpg", "image/rose.jpg"];
    $names = ["John Mark Binaday", "Camila Jadlocon", "Flora Mae Panis", "Jules Zulueta", "Rose Marie Ulnagan"];
    $statuses = ["IT student", "IT student", "IT student", "IT student", "IT student"];
    ?>

    <h1 class="heading">MEET OUR TEAM</h1>
    <div class="image-container">
        <?php
        for ($i = 0; $i < count($profiles); $i++) {
            echo '<div class="image" onclick="fetch_info(' . $i . ')"><img src="' . $profiles[$i] . '"></div>';
        }
        ?>
    </div>

    <div class="info-container">
        <img class="profile" id="profile" src="<?php echo $profiles[0]; ?>" />
        <div class="info">
            <h1 class="name" id="name"><?php echo $names[0]; ?></h1>
            <h3 class="status" id="status"><?php echo $statuses[0]; ?></h3>
            <p class="about" id="about">
                I am an IT student and I believe in myself that I can do everything to become a professional in IT.
            </p>
        </div>
    </div>

    <script>
        function fetch_info(i) {
            let profile = <?php echo json_encode($profiles); ?>;
            let name = <?php echo json_encode($names); ?>;
            let status = <?php echo json_encode($statuses); ?>;
            
            document.getElementById("profile").src = profile[i];
            document.getElementById("name").innerHTML = name[i];
            document.getElementById("status").innerHTML = status[i];
            document.getElementById("about").innerHTML = name[i] + 
           "I am a hard Working and Willing to Learn.";
        }
    </script>
</body>
</html>