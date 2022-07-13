<!DOCTYPE html>
 
 <html>
 <body>
 
 <h1>
    <?= $greeting; ?>  
 </h1>
 <ul>
    <?php
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
    ?>

 </ul>
 <ul>
    <?php foreach ($animals as $animal) : ?>
        <li><?=  $animal; ?></li>
    <?php endforeach; ?>
 </ul>
 <ul>
    <?php foreach ($person as $key => $feature) : ?>
        <li><?=$key . ' ' . $feature; ?></li>
    <?php endforeach; ?>
 </ul>
 
 
 </body>
 </html> 
 
 