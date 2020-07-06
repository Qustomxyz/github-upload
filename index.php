<?php

echo phpinfo();

$att PDO::ATTR_DRIVER_NAME;
echo public PDO::getAttribute ( $att );
try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=laca', 'www', '117630');
} catch(PDOexception $e) {
        die('Could not connect:'.$e);
}



        class Task {

                protected $description;

                protected $complited;

                public function __construct($description) {
                        $this->description = $description;
                }
        }

        $task = new Task('Go to go');

        var_dump($task);

?>