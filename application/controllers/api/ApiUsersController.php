<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
 
class ApiUsersController extends RestController{
    public function __construct()
	{
			parent::__construct();
			$this->load->model('UsersModel');
			

			
			
	}



    public function index_get(){
        //echo "I am Employee index function";
        $users = new UsersModel;
        $result_users = $users->get_users();
        $this->response($result_users, 200);
        }


        public function storeUser_post(){
            $users = new UsersModel;

            $data = [
                'name'=> $this->input->post('name'),
                'surname'=> $this->input->post('surname'),
                'email_address'=> $this->input->post('email_address'),

            ];

            $result = $users->insertUser($data);
            if($result > 0){
                $this->response([
                    'status'=> true,
                    'message'=> 'New User created'
                ],RestController::HTTP_OK);

            }
            else{
                $this->response([
                    'status'=> false,
                    'message'=> 'Failed to create a new User'
                ],RestController::HTTP_BAD_REQUEST);

            }

        }

        public function findUser_get($id){
            $users = new UsersModel;
            $result = $users->findUser($id);
            $this->response($result, 200);


        }


        public function updateUser_put($id){
            $users = new UsersModel;
            $resp = $users->user_exists($id);
            if($resp){
                $data = [
                    'name'=> $this->put('name'),
                    'surname'=> $this->put('surname'),
                    'email_address'=> $this->put('email_address'),
    
                ];
    
                $update_result = $users->update_User($id, $data);
                if($update_result > 0){
                    $this->response([
                        'status'=> true,
                        'message'=> 'User updated'
                    ],RestController::HTTP_OK);
    
                }
                else{
                    $this->response([
                        'status'=> false,
                        'message'=> 'Failed to update User'
                    ],RestController::HTTP_BAD_REQUEST);
    
                }
            }
            else{
                $this->response([
                    'status'=> false,
                    'message'=> 'User does not exist'
                ],RestController::HTTP_BAD_REQUEST);

            }

        }

        public function deleteUser_delete($id){
            $users = new UsersModel;
            $resp = $users->user_exists($id);
            if($resp){
                $result = $users->delete_User($id);
            if($result > 0){
                $this->response([
                    'status'=> true,
                    'message'=> 'User deleted'
                ],RestController::HTTP_OK);

            }
            else{
                $this->response([
                    'status'=> false,
                    'message'=> 'Failed to delete User'
                ],RestController::HTTP_BAD_REQUEST);

            }
            }
            else{
                $this->response([
                    'status'=> false,
                    'message'=> 'User does not exist'
                ],RestController::HTTP_BAD_REQUEST);

            }

        }

}

?>