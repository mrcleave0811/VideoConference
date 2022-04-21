<?php


    Class MySite{

        private $server = "mysql:host=localhost;dbname=video_conference";
        private $user = "root";
        private $pass = "1234";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC); //code for fetching data from database using PHP PDO
        protected $con;
    

        //method for connection with the database
        public function openConnection(){

            try {
                
                //package "con" will initiate the command to connect on the database
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
                return $this->con;


            } catch (PDOException $e) {
                
                //if there is a problem on connection you will get this message
                echo "There is some problem in connection: ". $e->getMessage();
            }

        } //end of openConnection() method

        //closing the connection on the database
        public function closeConnection(){

            $this->con = null;

        } //end of closeConnection() method

        public function page_not_found(){

            http_response_code(404); //built int method of php
            echo "Page not found";
            die;

        } //end of page_not_found method

        //Login Function
        public function login(){


            // "isset()" is a built it function of php to determine wether a varialbe is set or not
            if(isset($_POST['login'])){
            
                $email = strtolower($_POST['email']);
                $password = md5($_POST['password']);
                
            
                $connection = $this->openConnection(); 
                $stmt = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?"); //Querry to find data on our database
                $stmt->execute([$email,$password]); //$stmt will execute the querry code above, the arrangement of parameters is base on the code above
                $user = $stmt->fetch(); //to store the fetched data inside the user variable, the fetched data is in array form
                $total = $stmt->rowCount();
                echo $total;
                if($total > 0){

                    $this->set_userdata($user);
                    header("Location: homePage.php");

                }else {

                    echo "<script>
                alert('INCORRECT EMAIL OR PASSWORD, PLEASE TRY AGAIN');
                window.location.href='Login.php';
                </script>";
                
                }

            }

        } //end of login() method

        public function set_userdata($array){

            if(!isset($_SESSION)){
                session_start();

            }
            //gagawa tyo ng variable userdata para mag hold ng mga data galing database na ibabato natin
            //sa iba't ibang part ng website/webapp natin
            $_SESSION['userdata'] = array(
                "fullname" => $array['firstname']." ".$array['lastname']
            );

            return $_SESSION['userdata']; 

        } //end of set_userdata() method

        public function get_userdata(){

            if(!isset($_SESSION)){
                session_start();

            }

            //ichecheck kung may currently naka log in o wala.
            //para kapag nag log out yung user at bumalik sa index.php dahil dun naka redirect ang ating website
            //after mag logout, para hindi mag eerror kapag tinawag sa index.php yung userdata
            if (isset($_SESSION['userdata'])) {
                return $_SESSION['userdata'];

            }else{
                return null;
            }

            return $_SESSION['userdata']; 

        } //end of get_userdata() method

        //Method to logout your account
        //at dito rin natin i eend yung session ng currently na naka login
        public function logout(){

            if(!isset($_SESSION)){
                session_start();

            }

            $_SESSION['userdata'] = null;
            unset($_SESSION['userdata']);


        } //end of logout() method


        //FUNCTION FOR REGISTERING USER
        public function registerUser(){

            if (isset($_POST['register'])) {

                $firstName = strtolower($_POST['firstname']);
                $lastName = strtolower($_POST['lastName']);
                $email = strtolower($_POST['email']);
                $gender = strtolower($_POST['gender']);
                $birthDate = strtolower($_POST['birthDate']);
                $password = md5($_POST['password']);          
                

                $connection = $this->openConnection(); 
                $stmt = $connection->prepare("INSERT INTO users(`email`, `password`, `firstname`, `lastname`, `gender`, `birthdate`) VALUES(?, ?, ?, ?, ?, ?)"); //Querry to find data on our database
                $stmt->execute([$email, $password, $firstName, $lastName, $gender, $birthDate]);

                header("Location: login.php");
            }

        }

        //Code for generating random MeetCode
        function generateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }




    }
    $operations = new MySite();

