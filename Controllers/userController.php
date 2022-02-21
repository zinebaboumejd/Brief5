<?php
class userController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $data['pass_word'] = $_POST['password'];
            $result = User::login($data);
            if($result->username ===$_POST['username'] /*&& password_verify($_POST['password'],$result->password)*/ ){ //&& password_verify($_POST['password'],$result->password)    && $result->password === $_POST['password']
              $_SESSION['login']=true;
              $_SESSION['username']=$result->username;
           Redirect::to('home');
            }else{
             Session::set('error','votre nom ou mot de passe inccorrect');
             Redirect::to('login');
            }
        }
    }
    
public function register(){
    if(isset($_POST['submit'])){
         $options=[
            'cost' => 12
         ];
    $password= password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
        $data=array(
          'fullname' =>$_POST['fullname'],
          'username' =>$_POST['username'],
          'pas_sword' =>$_POST['password'],  //$password,

        );
        // die(print_r($data));
        $result=User::createUser($data);
        if($result === 'ok'){
            Session::set('success','Compte crée');
            Redirect::to('login');
        }else{
            echo $result;
        }
    }
}
static public function logout(){
    session_destroy();
}
}