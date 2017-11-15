<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_mt extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->library(array('template','upload','fpdf'));
        $this->load->helper(array('url','form'));
        $this->load->model('m_balepustaka');

        if($this->session->userdata('login') != "TRUE"){
    			redirect(base_url("index.php/c_login"));
    		}
    }

    function index(){
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
  		$this->template->display('v_mt/v_mt',$data);
  	}

    function buku_baru(){
      $where=$this->input->post('buku_baru');
      //$cek=$this->m_balepustaka->qry("SELECT * from buku where DATE_FORMAT(tanggal,'%m')='$date'");
      $date=date("m", strtotime($where));
      $cek = $this->db->query("SELECT * from buku where DATE_FORMAT(tanggal,'%m')='$date'");
      $res['data'] = $this->m_balepustaka->qry("SELECT * from buku where DATE_FORMAT(tanggal,'%m')='$date'");
      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_buku_baru',$res);
      }else{
        echo "<script>alert('Tidak Ada Buku Baru')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }
    }

    function buku_terbanyak(){
      $where=$this->input->post('buku_terbanyak');
      $date=date("m", strtotime($where));
      $cek = $this->db->query("SELECT detail_peminjaman.kode_buku, buku.judul_buku, buku.penulis, head_peminjaman.tanggal,
        Count(detail_peminjaman.kode_buku) AS Jumlah FROM detail_peminjaman join buku on detail_peminjaman.kode_buku=buku.kode_buku join
        head_peminjaman ON detail_peminjaman.kode_peminjaman=head_peminjaman.kode_peminjaman where mid(detail_peminjaman.kode_peminjaman,5,2)='$date' GROUP BY
        detail_peminjaman.kode_buku ORDER BY JUMLAH DESC LIMIT 9999999 OFFSET 1");
      $res['data'] = $this->m_balepustaka->qry("SELECT detail_peminjaman.kode_buku, buku.judul_buku, buku.penulis, head_peminjaman.tanggal,
        Count(detail_peminjaman.kode_buku) AS Jumlah FROM detail_peminjaman join buku on detail_peminjaman.kode_buku=buku.kode_buku join
        head_peminjaman ON detail_peminjaman.kode_peminjaman=head_peminjaman.kode_peminjaman where mid(detail_peminjaman.kode_peminjaman,5,2)='$date' GROUP BY
        detail_peminjaman.kode_buku ORDER BY JUMLAH DESC LIMIT 9999999 OFFSET 1");
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_buku_terbanyak',$res);
      }else{
        echo "<script>alert('Tidak Ada Peminjaman Buku')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }

    }

    function dvd_baru(){
      $where=$this->input->post('dvd_baru');
      $date=date("m", strtotime($where));
      $cek = $this->db->query("SELECT * from dvd where DATE_FORMAT(tanggal,'%m')='$date'");
      $res['data'] = $this->m_balepustaka->qry("SELECT * from dvd where DATE_FORMAT(tanggal,'%m')='$date'");

      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_dvd_baru',$res);
      }else{
        echo "<script>alert('Tidak Ada DVD Baru')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }
    }

    function dvd_terbanyak(){
      $where=$this->input->post('dvd_terbanyak');
      $date=date("m", strtotime($where));
      $cek = $this->db->query("SELECT detail_peminjaman.kode_dvd, dvd.judul_dvd, dvd.tahun, head_peminjaman.tanggal,
        Count(detail_peminjaman.kode_dvd) AS Jumlah FROM detail_peminjaman join dvd on detail_peminjaman.kode_dvd=dvd.kode_dvd join
        head_peminjaman ON detail_peminjaman.kode_peminjaman=head_peminjaman.kode_peminjaman where mid(detail_peminjaman.kode_peminjaman,5,2)='$date' GROUP BY
        detail_peminjaman.kode_dvd ORDER BY JUMLAH DESC LIMIT 9999999 OFFSET 1");
      $res['data'] = $this->m_balepustaka->qry("SELECT detail_peminjaman.kode_dvd, dvd.judul_dvd, dvd.tahun, head_peminjaman.tanggal,
        Count(detail_peminjaman.kode_dvd) AS Jumlah FROM detail_peminjaman join dvd on detail_peminjaman.kode_dvd=dvd.kode_dvd join
        head_peminjaman ON detail_peminjaman.kode_peminjaman=head_peminjaman.kode_peminjaman where mid(detail_peminjaman.kode_peminjaman,5,2)='$date' GROUP BY
        detail_peminjaman.kode_dvd ORDER BY JUMLAH DESC LIMIT 9999999 OFFSET 1");
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();

      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_dvd_terbanyak',$res);
      }else{
        echo "<script>alert('Tidak Ada Peminjaman DVD')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }
    }

    function anggota_baru(){
      $where=$this->input->post('anggota_baru');
      $date=date("m", strtotime($where));
      $cek= $this->db->query("SELECT * from anggota where DATE_FORMAT(tanggal_daftar,'%m')='$date'");
      $res['data'] = $this->m_balepustaka->qry("SELECT * from anggota where DATE_FORMAT(tanggal_daftar,'%m')='$date'");

      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_anggota_baru',$res);
      }else{
        echo "<script>alert('Tidak Ada Anggota Baru')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }
    }

    function pengembalian() {
      $where=$this->input->post('transaksi');
      $date=date("m", strtotime($where));
      $cek = $this->db->query("SELECT * from pengembalian join head_peminjaman on head_peminjaman.kode_peminjaman
      =pengembalian.kode_peminjaman join anggota on head_peminjaman.kode_anggota=anggota.kode_anggota where DATE_FORMAT(pengembalian.tanggal,'%m')='$date'");
      $res['data'] = $this->m_balepustaka->qry("SELECT * from pengembalian join head_peminjaman on head_peminjaman.kode_peminjaman
      =pengembalian.kode_peminjaman join anggota on head_peminjaman.kode_anggota=anggota.kode_anggota where DATE_FORMAT(pengembalian.tanggal,'%m')='$date'");
      if ($cek->num_rows()>0){
      //$data['data']=$this->db->query("select * from buku where DATE_FORMAT(tanggal,'%m')='$date'")->result();
        $this->load->view('v_mt/v_laporan',$res);
      }else{
        echo "<script>alert('Tidak Ada Transaksi')</script>";
        echo '<script type="text/javascript">window.location = "../c_mt"</script>';
      }
    }

    public  function backupdb(){
      // Load Clas Utilitas Database
      $this->load->dbutil();

      // nyiapin aturan untuk file backup
      $aturan = array(
              'format'      => 'zip',
              'filename'    => 'my_db_backup.sql'
            );

      $backup =& $this->dbutil->backup($aturan);

      $nama_database = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
      $simpan = '/backup'.$nama_database;

      $this->load->helper('file');
      write_file($simpan, $backup);


      $this->load->helper('download');
      force_download($nama_database, $backup);
    }

    function restore(){
      $config['upload_path'] = './backup/database/';
      $config['allowed_types'] = '*';

      $this->upload->initialize($config);
      if(!$this->upload->do_upload('restore')){
        echo "<script>alert('Restore Gagal')</script>";
      }else{
        $backup=$this->upload->file_name;
        $isi_file = file_get_contents("./backup/database/$backup");
        $string_query = rtrim( $isi_file, "\n;" );
        $array_query = explode(";", $string_query);
        foreach($array_query as $query)
        {
          $this->db->query($query);
        }
        echo "<script>alert('Restore Berhasil')</script>";
      }

	}


}
