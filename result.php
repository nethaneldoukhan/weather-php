<?php if($obj) : ?>
    <div>
        <br>
        <div style="font-weight: bold"><?php echo 'City: ' . $obj->city->name . ', Country: ' . $obj->city->country; ?></div>
        <br>
        Temp: <?php echo (int)$obj->list[0]->main->temp; ?>° <br>
        Humidity: <?php echo $obj->list[0]->main->humidity; ?> <br>
        Clouds: <?php echo $obj->list[0]->weather[0]->description; ?> <br>
        Wind speed: <?php echo $obj->list[0]->wind->speed; ?>
    </div>
<?php endif ?>

<?php if($error) : ?>
    <div>
        <br>
        Error: <?php echo $error->message; ?>
    </div>
<?php endif ?>