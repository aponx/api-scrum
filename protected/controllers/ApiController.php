<?php
class ApiController extends CBJsonController
{
    public function actionList($token,$model)
    {
        // buat ambil all data misal list product, list promo
        $result; 
        try {
            $method = $_SERVER['REQUEST_METHOD'];
            $validate = Api::validate($token,$model,$method, $param = 0);
            if($validate == 1){
                //code untuk method disini
                $model = strtolower($method) . '_' . $model ; 
                if(method_exists(get_class(), $model)){
                    $result = $this->$model();

                }
                //code selesai
                
            }else if($validate = 2){
                $result = array('success' => 2, 'message' => 'token expired or forbidden');    
            }else{
                $result = array('success' => 3, 'message' => 'forbidden');    
            }      
        } catch (Exception $e) {
            print_r($e);
            $result = array('success' => 0, 'message' => 'unknown error');    
        }
        
        return $result;
    }
    public function actionView($token, $model, $id)
    {
        $result; 
        try {
            $method = $_SERVER['REQUEST_METHOD'];
            $validate = Api::validate($token,$model,$method, $param = 1);
            if($validate == 1){
                //code untuk method disini
                $model = strtolower($method) . '_' . $model . '_id' ; 

                if(method_exists(get_class(), $model)){
                    $result = $this->$model($id);

                }
                //code selesai
                
            }else if($validate = 2){
                $result = array('success' => 2, 'message' => 'token expired or forbidden');    
            }else{
                $result = array('success' => 3, 'message' => 'forbidden');    
            }      
        } catch (Exception $e) {
            //print_r($e);
            $result = array('success' => 0, 'message' => 'unknown error');    
        }
        
        return $result;
    }
    public function actionCreate($token, $model)
    {
        try {
            $method = $_SERVER['REQUEST_METHOD'];
            $validate = Api::validate($token,$model,$method, $param = 0);
            if($validate == 1){

                //code untuk method disini
                $model = strtolower($method) . '_' . $model; 
                if(method_exists(get_class(), $model)){
                    $post = $_POST;
                    $result = $this->$model($post);
                }
                //code selesai
                
            }else if($validate = 2){
                $result = array('success' => 2, 'message' => 'token expired or forbidden');    
            }else{
                $result = array('success' => 3, 'message' => 'forbidden');    
            
            }     
        } catch (Exception $e) {
            print_r($e);
            $result = array('success' => 0, 'message' => 'unknown error');    
        }
        
        return $result;
    }
    //public function actionUpdate($token, $model, $id)
    public function actionUpdate($token, $model, $id)
    {
        $method = $_SERVER['REQUEST_METHOD'];            

        try {
            $method = $_SERVER['REQUEST_METHOD'];
            //print_r($token . "  ". $model . " " . "PUT");
            $validate = Api::validate($token,$model,$method, $param = 1);
            
            if($validate == 1){
                //code untuk method disini
                $model = strtolower($method) . '_' . $model . '_id'; 
                if(method_exists(get_class(), $model)){
                    $post = $_POST;
                    $result = $this->$model($id, $post);
                }
                //code selesai
                
            }else if($validate = 2){
                $result = array('success' => 2, 'message' => 'token expired or forbidden');    
            }else{
                $result = array('success' => 3, 'message' => 'forbidden');    
            
            }     
        } catch (Exception $e) {
            print_r($e);
            $result = array('success' => 0, 'message' => 'unknown error');    
        }
        
        return $result;
    }
    public function actionDelete($token)
    {

        echo $_SERVER['REQUEST_METHOD'];
    }

    public function post_user_login($post){
        if(isset($post['username'])
        && isset($post['password'])){
            $username = $post['username'];
            $password = $post['password'];

            $res = Api::login($username, $password);
            if($res['success'] == true){
                $result = array('success' => 1, 'user_id' => $res['user_id']);            
            }else{
                $result = array('success' => 2, 'message'=>$res['message']);            
            }

        }else{
            $result = array('success' => 0, 'message'=>'error');            
        }
        //code selesai
        
        return $result;
    }

}
?>