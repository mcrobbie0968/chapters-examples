<!DOCTYPE html>
<html>
    <head>
        <title>PHP, MySQL and JavaScript</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $fp = fopen("text.txt", 'wb');

            for ($j = 0; $j < 100; ++$j) {
                $written = fwrite($fp, "data\n");

                if ($written == FALSE) {
                    break;
                }
            }

            fclose($fp);
            ?>
        </div>
    </body>
</html>
