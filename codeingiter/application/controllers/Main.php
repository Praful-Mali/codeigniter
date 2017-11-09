<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function _construct()
	{
		parent::_construct();

	}

	public function index()
	{
		$this->load->view('register');
	}

	public function userRregistered(){
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$mobile = $this->input->post('mobile');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');

		$exits = $this->main_model->check_exists('email','user_register',array('email'=>$email));
		if(!empty($exits)){
			$data = array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'email'=>$email,
				'user_name'=>$username,
				'password'=>md5($password),
				'phone_no'=>$mobile,
				'dob'=>$dob,
				'image'=>isset($imagename)?$imagename:'',
				'gender'=>$gender,
				'message_error'=>'This Email Address already register'
			);
			$this->load->view('register',$data);
		}else{
			if($_FILES['photo']['name'] !='' ){
				$bl = "./assets/Uploaded/";

				if (!is_dir($bl."thumb")) {
					mkdir("./assets/Uploaded/" ."thumb", 0777, TRUE);
				}

				$filename = stripslashes($_FILES['photo']['name']);
				list($txt, $ext) = explode(".", $filename);
				$imagename = time().rand()."_".''.".".$ext;
				$uploaddir = "./assets/Uploaded/"; //a directory inside
				$size = filesize($_FILES['photo']['tmp_name']);
				$ext = strtolower($ext);
				$newname = $uploaddir . $imagename;
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $newname)) {

					$image_config["image_library"] = "gd2";
					$image_config["source_image"] = $newname;
					$image_config['create_thumb'] = FALSE;
					$image_config['maintain_ratio'] = FALSE;
					$image_config['new_image'] = "./assets/Uploaded/thumb/";
					$image_config['quality'] = "100%";
					$image_config['width'] = 200;
					$image_config['height'] = 200;
					$this->load->library('image_lib');
					$this->image_lib->initialize($image_config);
					$this->image_lib->resize();
				} else {
					$msg['logo'] = 'You have exceeded the size limit! so moving unsuccessful!';
				}
				exit;
			}
			$userdata = array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'email'=>$email,
				'user_name'=>$username,
				'password'=>md5($password),
				'phone_no'=>$mobile,
				'dob'=>$dob,
				'image'=>isset($imagename)?$imagename:'',
				'gender'=>$gender,
			);
			$this->main_model->insert_data('user_register',$userdata);
			redirect('login');
		}

	}

	public function login(){
		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function logging(){
		$email = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		$data  = $this->main_model->select_where('','user_register',array('email'=>$email,'password'=>md5($password)));

		if(!empty($data)){
			$user = array(
				'id' => $data[0]['id'],
				'name' => $data[0]['user_name'],
			);
			$this->session->set_userdata($user);
			$msg= array(
				'status'=>'S',
				"redirction"=>'myprofile',
			);
			echo json_encode($msg);
		}else{
			$msg= array(
				'status'=>'F',
				"error"=>'Wrong Username & Password',
			);
			echo json_encode($msg);
		}
	}

	public function myprofile(){
		$data['data']  = $this->main_model->select_where('','user_register',array('id'=>$this->session->userdata('id')));
		$this->load->view('myprofile',$data);
	}





}
