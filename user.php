<?php 
    class user{
        public $username;
        public $password;

        public function __construct($username, $password){
            $this->userData=[
                (object)[
                    'username' => 'arya',
                    'password' => 'arya12345',
                ]
                ];
                $this->username = $username;
                $this->password = $password;
        }
        public function auth(){
            foreach($this->userData as $key => $value){
              if($value->username == $this->username && $value->password == $this->password ){
                return true;
               }
             }
              return false;
            }

          public function login(){
            $isUser = $this->auth();
            if($isUser){
                header("Location:dashboard.php");
            } else {
                return false;
            }
          }
      }
      ?>
        }
 