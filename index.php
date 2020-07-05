<?php
        class Task {

                protected $description;

                protected $complited;

                public __construct($description) {
                        $this->description = $description
                }
        }

$task = new Task('Go to go');

var_dump($task);