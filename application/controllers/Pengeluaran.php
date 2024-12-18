<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

	public function index()
	{

		$this->db->from('pengeluaran')->order_by('tanggal','DESC');
		$pengeluaran = $this->db->get()->result_array();

		$data = [
			'judul' => 'Pengeluaran',
			'pengeluaran' =>$pengeluaran
		];
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('pengeluaran', $data);
		$this->load->view('layout/footer.php');
	}

	public function addPengeluaran(){
		$data = [
			'nominal' => $this->input->post('nominal'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => $this->input->post('tanggal'),
			'username' => $this->session->userdata('username'),
			'metode' => $this->input->post('metode'),
			'status' => 'Lunas',
		];
		$this->db->insert('pengeluaran',$data);

		$insert_id = $this->db->insert_id();

		$sisaTagihan = $this->input->post('nominal') - $this->input->post('tagihan');

		if($data['metode'] == 'Credit'){
			$kerdit = [
				'status' => 'Belum Lunas' 
			];
			$this->db->update('pengeluaran',$kerdit,['id_pengeluaran'=>$insert_id]);

			$dataLogCicilan = [
				'bayar' => $this->input->post('nominal'),
				'tagihan' => $this->input->post('tagihan'),
				'sisa_tagihan' => $sisaTagihan,
				'tanggal' => date('Y-m-d'),
				'id_pengeluaran' => $insert_id
			];
			$this->db->insert('log_cicilanpengeluaran',$dataLogCicilan);
		}

		if($data['metode'] == 'Cash'){
			$dataLogCicilan = [
				'bayar' => $this->input->post('nominal'),
				'tagihan' =>$this->input->post('nominal'),
				'sisa_tagihan' => 0,
				'tanggal' => date('Y-m-d'),
				'id_pengeluaran' => $insert_id
			];
			$this->db->insert('log_cicilanpengeluaran',$dataLogCicilan);
		}

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
			');
		redirect('pengeluaran');
	}

	public function updatePengeluaran(){
		$whereId = ['id_pengeluaran' => $this->input->post('id_pengeluaran')];
		$data = [
			'nominal' => $this->input->post('nominal'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => $this->input->post('tanggal'),
		];
		$this->db->update('pengeluaran',$data,$whereId);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil ditambahkan! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
		redirect('pengeluaran');
	}

	public function deletePengeluaran($idPengeluaran){

		$this->db->from('pengeluaran a')
				->join('log_cicilanpengeluaran b','a.id_pengeluaran=b.id_pengeluaran')
				->where('a.id_pengeluaran',$idPengeluaran);
		$getId = $this->db->get()->row();
		
		$whereId = ['id_pengeluaran' => $getId->id_pengeluaran ];
		$this->db->delete('log_cicilanpengeluaran',$whereId);
		$this->db->delete('pengeluaran',$whereId);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>Data berhasil dihapus! <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
		');
		redirect('pengeluaran');
	}

	public function detailPengeluaran($id){

		$this->db->select('*')
		->from('log_cicilanpengeluaran a')
		->join('pengeluaran b', 'a.id_pengeluaran = b.id_pengeluaran')
		->where('a.id_pengeluaran', $id)
		->order_by('a.id_cicilanpengeluaran', 'DESC');
		$getLogCicilanHutang = $this->db->get()->result_array();

		// Data untuk dikirim ke view
		$data = [
		'judul' => 'Detail Pengeluaran',
		'getLogCicilanHutang' => $getLogCicilanHutang
		];
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navbar.php',$data);
		$this->load->view('log_cicilanPengeluaran', $data);
		$this->load->view('layout/footer.php');	
	}

	public function pembayaran(){
		$idPengeluaran = $this->input->post('id_pengeluaran');
		$bayar = $this->input->post('bayar');
	
		$this->db->select('*')
				 ->from('log_cicilanpengeluaran a')
				 ->join('pengeluaran b', 'a.id_pengeluaran = b.id_pengeluaran')
				 ->order_by('a.sisa_tagihan','ASC')
				 ->where('a.id_pengeluaran', $idPengeluaran);
		$getTagihan = $this->db->get()->result_array();
	
		foreach ($getTagihan as $getData) {
			$nominalTetap = $getData['nominal'];
			$sisaTagihan = $getData['sisa_tagihan'];
	
			// Jika pembayaran melebihi sisa tagihan
			if ($bayar > $sisaTagihan) {
				$this->session->set_flashdata('notif', 
					'<div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
						<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> 
						Jumlah pembayaran melebihi sisa tagihan! 
						<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
							<i data-lucide="x" class="w-4 h-4"></i>
						</button>
					</div>'
				);
				redirect($_SERVER['HTTP_REFERER']);
			}
	
			// Jika pembayaran sama dengan sisa tagihan (LUNAS)
			if ($bayar == $sisaTagihan) {
				$data = [
					'tagihan' => $bayar,
					'id_pengeluaran' => $idPengeluaran,
					'tanggal' => date('Y-m-d'),
					'bayar' => $nominalTetap,
					'sisa_tagihan' => 0
				];
				$this->db->insert('log_cicilanpengeluaran', $data);
	
				$pengeluaran = ['status' => 'Lunas'];
				$this->db->where('id_pengeluaran', $idPengeluaran)
						 ->update('pengeluaran', $pengeluaran);
	
				$this->session->set_flashdata('notif', 
					'<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
						<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
						Kredit sudah lunas! 
						<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
							<i data-lucide="x" class="w-4 h-4"></i>
						</button>
					</div>'
				);
				redirect($_SERVER['HTTP_REFERER']);
			}
	
			// Jika pembayaran kurang dari sisa tagihan (BELUM LUNAS)
			$sisaTagihanBaru = $sisaTagihan - $bayar;
			$data = [
				'tagihan' => $bayar,
				'id_pengeluaran' => $idPengeluaran,
				'tanggal' => date('Y-m-d'),
				'bayar' => $nominalTetap,
				'sisa_tagihan' => $sisaTagihanBaru
			];
			$this->db->insert('log_cicilanpengeluaran', $data);
	
			$pengeluaran = ['status' => 'Belum Lunas'];
			$this->db->where('id_pengeluaran', $idPengeluaran)
					 ->update('pengeluaran', $pengeluaran);
	
			$this->session->set_flashdata('notif', 
				'<div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
					<i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
					Kredit belum lunas! 
					<button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
						<i data-lucide="x" class="w-4 h-4"></i>
					</button>
				</div>'
			);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function ExporToExel(){

		$tanggal1 = $this->input->post('tgl1');
		$tanggal2 = $this->input->post('tgl2');
		$this->db->from('pengeluaran')
				->order_by('tanggal','DESC')
				->where('tanggal >=',$tanggal1)
				->where('tanggal <=',$tanggal2);
		$laporan =$this->db->get()->result_array();


		$data = [
			'laporan' => $laporan,
			'tanggal1' => $tanggal1,
			'tanggal2' => $tanggal2,
		]; 

		$this->load->view('layout/header.php',$data);
		$this->load->view('exporPengeluaranToExcel.php', $data);
		$this->load->view('layout/footer.php');
	}
	
}
