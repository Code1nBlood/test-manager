<?php
    namespace App;

    class User{
        private string $name;
        private string $email;

        public function __construct(string $name, string $email){
            $this->name = $name;
            $this->email = $email;
        }

        public function getInfo(): string{
            return $this -> name . " " . $this -> email;
        }
    }


?>