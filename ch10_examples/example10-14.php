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
            require_once 'login.php';

            try {
                $pdo = new PDO($attr, $user, $pass, $opts);
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int) $e->getCode());
            }

            $query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
            $result = $pdo->query($query);

            echo "The Insert ID was: " . $pdo->lastInsertId();
            ?>
        </div>
    </body>
</html>