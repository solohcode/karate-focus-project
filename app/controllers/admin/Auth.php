<?php






    class Auth {
        private $origin = "http://localhost/karate";

        public function __construct ()
        {
        }

        private function check ()
        {
            //
        }

        public static function loginFailed ($url)
        {
            return header("location: " . self::$origin . $url);
        } 
    }

    