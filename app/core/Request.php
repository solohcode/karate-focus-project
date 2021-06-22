<?php

    class Request {
        private string $method;
        private $routes = [];

        public function __construct()
        {
            $this->method = $_SERVER["REQUEST_METHOD"];
            if ($this->method === "GET") {
                echo "GET";
                echo $this->getUri();
            }
            if ($this->method === "POST") {
                echo "POST";
            }
        }

        protected function getUri () 
        {
            // $url = strpos();
        }


        protected function params ()
        {

        }
    }
