<doctype />

<html>
    <head>
    
    </head>
    <body>
        <h1>
            <?php echo 'Hola Mundo'; ?>
        </h1>
        
            <?php 
                for($i=2; $i<6; $i++)
                    echo "<h$i class='$i'>¿Como estás? </h$i>\n";
            ?>
    </body>
</html>