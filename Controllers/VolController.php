<?php 
class VolController{ 
    public function getAllVol(){
        $vol= Vol::getAll();
        return $vol;
    }
    public function getOneVol(){
        if(isset($_POST['idVol'])){
            $data=array(
                'idVol'=>$_POST['idVol']
            );
            $vol=vol::getVol($data);   
            return $vol; 
        }
  
    }
    ////////////////////recherche///////////////////////////////
 public function findVol(){
     if(isset($_POST['search'])){
         $data=array('search' => $_POST['search']);
     }
     $vol=vol::searchVol($data);
     return $vol;
 }
 ////////////////////////////////////////////////////////////////////
public function AddVol(){
    if(isset($_POST['submit'])){
        $data=array(
        //   'idVol' =>$_POST['idVol'],
          'LieuDepart' =>$_POST['LieuDepart'],
          'LieuArrivé' => $_POST['LieuArrivé'],
          'DateDepart' =>$_POST['DateDepart'],
          'DateArrive' =>$_POST['DateArrive'],
          'NbPlace' =>$_POST['NbPlace'],
          'Prix' =>$_POST['Prix'],
          'choix' =>$_POST['choix'],
        );
        // die(print_r($data));
        $result=Vol::add($data);
        if($result === 'ok'){
            Session::set('success','Ajouter Vol');
            Redirect::to('home');
        }else{
            echo $result;
        }
    }
}
public function UpdateVol(){
    if(isset($_POST['submit'])){
        $data=array(
          'idVol' =>$_POST['idVol'],
          'LieuDepart' =>$_POST['LieuDepart'],
          'LieuArrivé' => $_POST['LieuArrivé'],
          'DateDepart' =>$_POST['DateDepart'],
          'DateArrive' =>$_POST['DateArrive'],
          'NbPlace' =>$_POST['NbPlace'],
          'Prix' =>$_POST['Prix'],
          'choix' =>$_POST['choix'],
        );
        // die(print_r($data));
        $result=Vol::update($data);
        if($result === 'ok'){
            Session::set('success','Modifier Vol');
            Redirect::to('home');
        }else{
            echo $result;
        }
    }
}
public function deletVol(){
        if(isset($_POST['idVol'])){
            $data['idVol'] = $_POST['idVol'];
            $result = Vol::delete($data);
            if($result === 'ok'){
                Session::set('success','supprimer Vol');
            //header('location:'.BASE_URL);
            Redirect::to('home');
            }else{
            echo $result;
            }
        }
}
}
?>