<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sosim_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('Sosim_view');
	}
	public function insertData(){
		//lấy dữ liệu từ form về
		$sosim = $this->input->post('sosim');
		$giatien = $this->input->post('giatien');
		// truyền dữ liệu vào model
		$this->load->model('Sosim_model');
		if($this->Sosim_model->insertData($sosim, $giatien)){
			// echo 'Thành công';
			$this->load->view('thanhcong');
		}
		else{
			echo 'thất bại';
		}
	}

	// show dữ liệu
	public function showData(){
		$this->load->model('Sosim_model');
		// Gọi hàm getDatabase trong model
		$dulieu = $this->Sosim_model->getDatabase();
		// chuyển dữ liệu thành mảng key => value
		$dulieu = array('dulieutucontroller' => $dulieu);
		$this->load->view('Show_Sosim_view', $dulieu, FALSE);
	}

	// hàm xóa dữ liệu
	public function deleteData($idnhanduoc){
		$this->load->model('Sosim_model');
		if($this->Sosim_model->deleteDataById($idnhanduoc)){
			$this->load->view('xoathanhcong');
		}
		else{
			$this->load->view('xoathatbai');
		}
	}

	// hàm lấy dữ liệu từ view.
	public function editSimByID($idlayve)
	{
		$this->load->model('Sosim_model');
		// hàm này chủ yếu là nhận kết quả từ view, là biến $idlayve và chuyển vào hàm...
		// ...editData() trong file model.
		$ketqua = $this->Sosim_model->editById($idlayve);
		$ketqua = array('mangketqua' => $ketqua);
		// Truyền kết quả vào view để sửa dữ liệu.
		$this->load->view('editData_view', $ketqua, FALSE);
	}
	// hàm sửa dữ liệu 
	public function updateData(){
		$id = $this->input->post('id');
		$sosim = $this->input->post('sosim');
		$giatien = $this->input->post('giatien');

		// echo  "Id nhận được là: $id";
		// echo  "Số nhận được là: $sosim";
		// echo  "Giá nhận được là: $giatien";
		// truyền dữ liệu vào bảng
		$dulieu = $this->db->get('so_sim');
		// lấy hàm trong Sosim_model ra
		$this->load->model('Sosim_model');
		// sử dụng hàm update trong model để giao tiếp với dữ liệu
		if($this->Sosim_model->updateDataById($id, $sosim, $giatien)){
			echo 'update success';
		}
		else{
			echo 'update false';
		}

	}

}

/* End of file Sosim_controller.php */
/* Location: ./application/controllers/Sosim_controller.php */