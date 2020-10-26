<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sosim_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function ShowData(){
		// lấy dữ liệu
		$this->db->select('*');
		// lấy hết dữ liệu từ bảng so_sim 
		$ketqua = $this->db->get('sosim');
		// đưa kết quả thành 1 mảng dữ liệu
		$ketqua = result_array($ketqua);
	}
	public function insertData($s, $g){
		// tạo mảng dữ liệu
		$dulieu = array(
			'sosim' => $s,
			'giatien' => $g
		);
		$this->db->insert('so_sim', $dulieu);
		// trả về một giá trị chính là id của phần tử được thêm.
		return $this->db->insert_id();
	}

	// lấy và show dữ liệu ra view
	public function getDatabase(){
		//lấy dữ liệu ra
		$this->db->select('*');
		// đưa hết dữ liệu vào 1 biến $ketqua
		$ketqua = $this->db->get('so_sim');
		// chuyển dữ liệu sang dạng mảng
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	// hàm xóa dữ liệu
	public function deleteDataById($id){
		$this->db->where('id', $id);
		return $this->db->delete('so_sim');
		echo 'xóa thành công';
	}

	public function editById($id)
	{
		// hàm editByDId() chủ yếu là chuyển dữ liệu thành mảng.
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('so_sim');
		// đơn giản hóa dữ liệu, chuyển dữ liệu thành dạng mảng.
		$dulieu = $dulieu->result_array();
		return $dulieu;
		// echo '<pre>';
		// var_dump($dulieu);
	}

	public function updateDataById($id, $so, $gia){
		$updatedata = array(
			'id' => $id,
			'sosim' => $so,
			'giatien' => $gia
 		);
 		$this->db->where('id', $id);
 		// update data follow id
 		return $this->db->update('so_sim', $updatedata);
	}


}

/* End of file  */
/* Location: ./application/models/ */