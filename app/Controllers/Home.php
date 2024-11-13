<?php

namespace App\Controllers;
use CodeIgniter\Models\Controller;
use App\Models\M_z;
class Home extends BaseController
{

	private function log_activity($activity)
    {
		$model = new M_z();
        $data = [
            'id_user'    => session()->get('id'),
            'activity'   => $activity,
			'timestamp' => date('Y-m-d H:i:s'),
			'delete' => Null
        ];

        $model->tambah('activity', $data);
    }

	public function index()
	{
		$model = new M_z();
        $where5 = array('id_setting' => 1);
        $data['setting'] = $model->getwhere('setting', $where5);
		$where6 = array('level' => session()->get('level'));
    $this->log_activity('User membuka Dashboard');
        $data['menu'] = $model->getwhere('menu', $where6);
		echo view('header',$data);
		echo view('menu', $data);
		echo view('dashboard');
		echo view('footer');
		
	}

	public function TambahCatatan()
	{
		$model = new M_z();
        $where5 = array('id_setting' => 1);
        $data['setting'] = $model->getwhere('setting', $where5);
		$where6 = array('level' => session()->get('level'));
    $this->log_activity('User membuka Form Tambah Catatan');
        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->catatan == 1) {
		echo view('header',$data);
		echo view('menu', $data);
		echo view('catatan');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function Catatan()
	{
		$model = new M_z();
        $where5 = array('id_setting' => 1);
		$where = array('id_user' => session()->get('id'));
		$where2 = array('deleted' => Null);
        $data['setting'] = $model->getwhere('setting', $where5);
		$data['catatan'] = $model->tampilwhere2('catatan', $where, $where2);
		$this->log_activity('User membuka Data Catatan');
		$where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->catatan == 1) {
		echo view('header',$data);
		echo view('menu', $data);
		echo view('dcatatan', $data);
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}


	public function RCatatan()
	{
		$model = new M_z();
        $where5 = array('id_setting' => 1);
		$where = array('id_user' => session()->get('id'));
		$where2 = 'deleted is not null';
        $data['setting'] = $model->getwhere('setting', $where5);
		$data['catatan'] = $model->tampilwhere2('catatan', $where, $where2);
		$this->log_activity('User membuka Data Catatan');
		$where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->catatan == 1) {
		echo view('header',$data);
		echo view('menu', $data);
		echo view('rcatatan', $data);
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_catatan_perjalanan() {
		$model = new M_z();  // Assuming M_z is your model; adjust if necessary
	
		// Retrieve data from form submission
		$tanggal = $this->request->getPost('tanggal');
		$waktu = $this->request->getPost('jam');
		$lokasi = $this->request->getPost('lokasi');
		$suhuTubuh = $this->request->getPost('suhu_tubuh');
	
		// Prepare the data array to insert into the database
		$data = [
			'tanggal' => $tanggal,
			'waktu' => $waktu,
			'lokasi' => $lokasi,
			'suhu_tubuh' => $suhuTubuh,
			'id_user' => session()->get('id')
		];
	
		// Insert the data into the 'catatan_perjalanan' table (adjust the table name as necessary)
		if ($model->tambah('catatan', $data, )) {
			$model->tambah('catatan_backup', $data);
			// Set a success message if data is successfully added
			session()->setFlashdata('message', 'Data perjalanan berhasil disimpan!');
		} else {
			// Set an error message if there is a problem
			session()->setFlashdata('error', 'Gagal menyimpan data perjalanan.');
		}
	
		// Redirect back to a page, e.g., the form page or a list of entries
		return redirect()->to('home/Catatan');
	}

	public function login(){
        $model = new M_z();
        $where5 = array('id_setting' => 1);
        $data['setting'] = $model->getwhere('setting', $where5);
		echo view('header',$data);
		echo view('login');
	}

	public function generateCaptcha()
	{
		// Create a string of possible characters
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$captcha_code = '';
		
		// Generate a random CAPTCHA code with letters and numbers
		for ($i = 0; $i < 6; $i++) {
			$captcha_code .= $characters[rand(0, strlen($characters) - 1)];
		}
		
		// Store CAPTCHA code in session
		session()->set('captcha_code', $captcha_code);
		
		// Create an image for CAPTCHA
		$image = imagecreate(120, 40); // Increased size for better readability
		$background = imagecolorallocate($image, 200, 200, 200);
		$text_color = imagecolorallocate($image, 0, 0, 0);
		$line_color = imagecolorallocate($image, 64, 64, 64);
		
		imagefilledrectangle($image, 0, 0, 120, 40, $background);
		
		// Add some random lines to the CAPTCHA image for added complexity
		for ($i = 0; $i < 5; $i++) {
			imageline($image, rand(0, 120), rand(0, 40), rand(0, 120), rand(0, 40), $line_color);
		}
		
		// Add the CAPTCHA code to the image
		imagestring($image, 5, 20, 10, $captcha_code, $text_color);
		
		// Output the CAPTCHA image
		header('Content-type: image/png');
		imagepng($image);
		imagedestroy($image);
	}
	
	
	public function aksi_login()
	{
		// Periksa koneksi internet
		if (!$this->checkInternetConnection()) {
			// Jika tidak ada koneksi, cek CAPTCHA gambar
			$captcha_code = $this->request->getPost('captcha_code');
			if (session()->get('captcha_code') !== $captcha_code) {
				session()->setFlashdata('toast_message', 'Invalid CAPTCHA');
				session()->setFlashdata('toast_type', 'danger');
				return redirect()->to('home/login');
			}
		} else {
			// Jika ada koneksi, cek Google reCAPTCHA
			$recaptchaResponse = trim($this->request->getPost('g-recaptcha-response'));
			$secret = '6LeKfiAqAAAAAFkFzd_B9MmWjX76dhdJmJFb6_Vi'; // Ganti dengan Secret Key Anda
			$credential = array(
				'secret' => $secret,
				'response' => $recaptchaResponse
			);
	
			$verify = curl_init();
			curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($verify, CURLOPT_POST, true);
			curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
			curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($verify);
			curl_close($verify);
	
			$status = json_decode($response, true);
	
			if (!$status['success']) {
				session()->setFlashdata('toast_message', 'Captcha validation failed');
				session()->setFlashdata('toast_type', 'danger');
				return redirect()->to('home/login');
			}
		}
	
		// Proses login seperti biasa
		$u = $this->request->getPost('username');
		$p = $this->request->getPost('password');
	
		$where = array(
			'NIK' => $u,
			'nama_lengkap' => $p,
		);
		$model = new M_z;
		$cek = $model->getWhere('user', $where);
	
		if ($cek) {
			// $this->log_activitys('User Mel$where5 = array('id_setting' => 1);
			session()->set('nama', $cek->nama_lengkap);
			session()->set('id', $cek->id_user);
			session()->set('level', $cek->level);
			session()->set('nik', $cek->NIK);
			return redirect()->to('home/');
		} else {
			session()->setFlashdata('toast_message', 'Invalid login credentials');
			session()->setFlashdata('toast_type', 'danger');
			return redirect()->to('home/login');
		}
	}
	
	public function checkInternetConnection()
	{
		$connected = @fsockopen("www.google.com", 80);
		if ($connected) {
			fclose($connected);
			return true;
		} else {
			return false;
		}
	}

	public function EditCatatan($id){
		$model = new M_z;
		$where5 = array('id_setting' => 1);
		$where = array('id_catatan' => $id);
		$where2 = array('deleted' => Null);
		$data['catatan'] = $model->tampilwhere2Rows('catatan', $where, $where2);
		$data['setting'] = $model->getwhere('setting', $where5);
		$where6 = array('level' => session()->get('level'));
		$this->log_activity('User membuka Form Edit Catatan');
        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->catatan == 1) {
		echo view('header',$data);
		echo view('menu', $data);
		echo view('e_catatan', $data);
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_edit_catatan() {
		$model = new M_z();
	
		// Retrieve form data
		$id = $this->request->getPost('id'); // Get the ID from form input
		$tanggal = $this->request->getPost('tanggal');
		$jam = $this->request->getPost('jam');
		$lokasi = $this->request->getPost('lokasi');
		$suhu_tubuh = $this->request->getPost('suhu_tubuh');
	
		// Additional validation
		if (empty($tanggal) || empty($jam) || empty($lokasi) || empty($suhu_tubuh)) {
			return redirect()->back()->with('error', 'All fields are required.');
		}
	
		// Prepare data array for update
		$data = [
			'tanggal' => $tanggal,
			'waktu' => $jam,
			'lokasi' => $lokasi,
			'suhu_tubuh' => $suhu_tubuh,
		];
	
		// Set the condition for updating the specific record
		$where = ['id_catatan' => $id];
	
		// Update the record in the 'catatan' table
		if ($model->edit('catatan', $data, $where)) {
			return redirect()->to('home/catatan')->with('message', 'Catatan updated successfully.');
		} else {
			return redirect()->back()->with('error', 'Failed to update catatan.');
		}
	}
	
	public function BackupCatatan($id)
{
    $model = new M_z();


    // Restore product data from backup
    $this->log_activity('User Restore Update Catatan');
    $model->restoreProduct('catatan_backup', 'id_catatan', $id);

    return redirect()->to('home/Catatan');
}

	public function setting(){
		$model = new M_z();
    $data['menus'] = $model->tampil('menu');
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Setting Website');
		$where6 = array('level' => session()->get('level'));

        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->setting == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('setting', $data);
    echo view('footer');
}else{
	return redirect()->to('home/login');
}
	}

	public function aksi_edit_website()
{
    // Load the model that interacts with your settings
    $model = new M_z(); // Replace M_p with the actual model name

    // Retrieve the settings from the database
    $where5 = array('id_setting' => 1);
    $setting = $model->getwhere('setting',$where5); // Assuming you have a method to get current settings

    // Get the name from the request
    $name = $this->request->getPost('name');

    $icon = $this->request->getFile('icon');
    $menu = $this->request->getFile('menu');

    // Array to hold image names
    $images = [];

    // Check and upload icon
    if ($icon && $icon->isValid()) {
        $images['icon'] = $icon->getName();
        $model->uploadimages($icon); // Call uploadimages from the model
    } else {
        // Keep the existing icon name if no new file is uploaded
        $images['icon'] = $setting->icon;
    }

    // Check and upload menu image
    if ($menu && $menu->isValid()) {
        $images['menu'] = $menu->getName();
        $model->uploadimages($menu); // Call uploadimages from the model
    } else {
        // Keep the existing menu image name if no new file is uploaded
        $images['menu'] = $setting->menu;
    }



    // Update the settings in the database with the new image names and the new name
    $model->updateSettings($name, $images['icon'], $images['menu']); // Corrected parameter usage

    return redirect()->to('home/Setting'); // Redirect after processing
}

public function ManageMenu(){
    $model = new M_z();
    $data['menus'] = $model->tampil('menu');
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Manage Menu');
        if ($data['menu']->setting == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('menu_manage', $data);
    echo view('footer');
}else{
    return redirect()->to('home/login');
}
}

public function updateMenuVisibilityAjax()
{
    // Get data from the AJAX request
    $menu = $this->request->getPost('menu'); // e.g., 'data', 'dashboard'
    $level = $this->request->getPost('level'); // e.g., 1, 2, 3
    $visibility = $this->request->getPost('visibility'); // 1 or 0

    // Logging the data received from AJAX request
    log_message('debug', 'Received data from AJAX - Menu: ' . $menu . ', Level: ' . $level . ', Visibility: ' . $visibility);

    // Prepare data for the update
    $updateData = [$menu => $visibility];
    $whereCondition = ['level' => $level];

    // Logging the prepared data for the update
    log_message('debug', 'Update Data: ' . json_encode($updateData));
    log_message('debug', 'Where Condition: ' . json_encode($whereCondition));

    // Initialize the model
    $menuModel = new M_z();

    // Call the model method to update the menu visibility
    $result = $menuModel->updateMenuVisibility('menu', $updateData, $whereCondition);

    // Check if the update was successful and log the result
    if ($result) {
        log_message('debug', 'Menu visibility updated successfully.');
        return $this->response->setJSON(['status' => 'success', 'message' => 'Menu visibility updated successfully.']);
    } else {
        log_message('error', 'Failed to update menu visibility.');
        return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to update menu visibility.']);
    }
}

public function User(){
	$model = new M_z();
    $data['menus'] = $model->tampil('menu');
	$where = array('user.deleted' => Null);
	$data['user'] = $model->join1where1('user', 'level','user.level = level.id_level',$where);
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Storage User');
        if ($data['menu']->data == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('user', $data);
    echo view('footer');
	// print_r($data['user']);
}else{
    return redirect()->to('home/login');
}
}

public function RUser(){
	$model = new M_z();
    $data['menus'] = $model->tampil('menu');
	$where = "user.deleted is not null";
	$data['user'] = $model->join1where1('user', 'level','user.level = level.id_level',$where);
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Recycle Bin User');
        if ($data['menu']->data == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('ruser', $data);
    echo view('footer');
	// print_r($data['user']);
}else{
    return redirect()->to('home/login');
}
}


public function SDCatatan($id){
    $model = new M_z();
    $data = [
        'deleted' => date('Y-m-d H:i:s')
    ];
    $where = array('id_catatan' => $id);
    $model->edit('catatan', $data, $where);
    return redirect()->to('home/Catatan');
}

public function RDCatatan($id){
    $model = new M_z();
    $data = [
        'deleted' => Null
    ];
    $where = array('id_catatan' => $id);
    $model->edit('catatan', $data, $where);
    return redirect()->to('home/RCatatan');
}

public function SDLog($id){
    $model = new M_z();
    $data = [
        'deleted' => date('Y-m-d H:i:s')
    ];
    $where = array('id_activity' => $id);
    $model->edit('activity', $data, $where);
    return redirect()->to('home/LogActivity');
}

public function RDLog($id){
    $model = new M_z();
    $data = [
        'deleted' => Null
    ];
    $where = array('id_activity' => $id);
    $model->edit('activity', $data, $where);
    return redirect()->to('home/RLogActivity');
}

public function SDuser($id){
    $model = new M_z();
    $data = [
        'deleted' => date('Y-m-d H:i:s')
    ];
    $where = array('id_user' => $id);
    $model->edit('user', $data, $where);
    return redirect()->to('home/User');
}

public function RDuser($id){
    $model = new M_z();
    $data = [
        'deleted' => Null
    ];
    $where = array('id_user' => $id);
    $model->edit('user', $data, $where);
    return redirect()->to('home/RUser');
}

public function EditUser($id){
	$model = new M_z();
    $data['menus'] = $model->tampil('menu');
	$where = array('id_user' => $id);
	$data['user'] = $model->getwhere('user',$where);
	$data['level'] = $model->tampil('level');
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Form Edit User');
        if ($data['menu']->data == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('e_user', $data);
    echo view('footer');
	// print_r($data['user']);
}else{
    return redirect()->to('home/login');
}
}

public function aksi_edit_user() {
    $model = new M_z();

    // Retrieve form data
    $NIK = $this->request->getPost('NIK');
    $nama_lengkap = $this->request->getPost('nama_lengkap');
    $level = $this->request->getPost('level');
	$id = $this->request->getPost('id');
    // Additional validation
    if (empty($NIK) || empty($nama_lengkap) || empty($level)) {
        return redirect()->back()->with('error', 'All fields are required.');
    }

    // Prepare data array for update
    $data = [
        'NIK' => $NIK,
        'nama_lengkap' => $nama_lengkap,
        'level' => $level,
    ];

    // Specify the condition to find the user by id
    $where = array('id_user' => $id);

    // Update the user in the 'user' table
    if ($model->edit('user', $data, $where)) {
        return redirect()->to('home/User')->with('message', 'User updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update user.');
    }
}

public function LogActivity(){
    $model = new M_z();
    $where1 = array('activity.delete' => '0');
    $data['log'] = $model->join1where1('activity','user','activity.id_user = user.id_user',$where1);
    $data['menus'] = $model->tampil('menu');
    $data['users'] = $model->tampil('user');
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Setting Website');
        if ($data['menu']->data == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('activitylog', $data);
    echo view('footer');
}else{
    return redirect()->to('home/login');
}
}

public function filteruserlog() {
    $model = new M_z(); // Make sure to replace with your actual model for logs
    $idUser = $this->request->getGet('id_user'); // Get the selected user ID from the query string

    // Fetch users for the filter dropdown
    $data['users'] = $model->tampil('user'); // Adjust this method based on how you retrieve users

    // Get logs based on user filter
    if ($idUser) {
        $where = array('activity.id_user' => $idUser, 'activity.delete' => Null);
        $data['log'] = $model->join1where1('activity','user','activity.id_User = user.id_user',$where); // Method to get logs for a specific user
    } else {
        $data['log'] = $model->join1('activity','user','activity.id_User = user.id_user'); // Fetch all logs if no user is selected
    }
    $data['logss'] = $model->join1('activity','user','activity.id_User = user.id_user'); // Fetch all logs if no user is selected
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        if ($data['menu']->data == 1) {
    echo view('header',$data);
    echo view('menu',$data);
    echo view('activitylog', $data);
    echo view('footer');
}else{
    return redirect()->to('home/login');
}
}

public function RLogActivity(){
    $model = new M_z();
    $where1 = 'activity.delete is not null';
    $data['log'] = $model->join1where1('activity','user','activity.id_user = user.id_user',$where1);
    $data['menus'] = $model->tampil('menu');
    $data['users'] = $model->tampil('user');
    $where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
    $where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Setting Website');
        if ($data['menu']->data == 1) {
    echo view('header', $data);
    echo view('menu', $data);
    echo view('ractivitylog', $data);
    echo view('footer');
}else{
    return redirect()->to('home/login');
}
}

public function TambahUser(){
	$model = new M_z();
	$data['level'] = $model->tampil('level');
	$where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
	$where6 = array('level' => session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where6);
        $this->log_activity('User membuka Setting Website');
        if ($data['menu']->data == 1) {
	echo view('header', $data);
    echo view('menu', $data);
    echo view('t_user', $data);
    echo view('footer');
}else{
    return redirect()->to('home/login');
}
}

public function aksi_tambah_user() {
    $model = new M_z();

    // Retrieve form data
    $NIK = $this->request->getPost('nik');
    $nama_lengkap = $this->request->getPost('nama_lengkap');
    $level = $this->request->getPost('level');

    // Additional validation
    if (empty($NIK) || empty($nama_lengkap) || empty($level)) {
        return redirect()->back()->with('error', 'All fields are required.');
    }

    // Prepare data array for insert
    $data = [
        'NIK' => $NIK,
        'nama_lengkap' => $nama_lengkap,
        'level' => $level,
    ];

    // Insert the new user into the 'user' table
    if ($model->tambah('user', $data)) {
        return redirect()->to('home/User')->with('message', 'User added successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add user.');
		// print_r($data);
    }
}

public function logout()
{
    // $this->log_activity('User Logout');
    session()->destroy();
    return redirect()->to('home/login');
}

public function signup(){
	$model = new M_z();
	$data['level'] = $model->tampil('level');
	$where5 = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where5);
	echo view('header', $data);
    echo view('signup', $data);

}

public function aksi_signup_user() {
    $model = new M_z();

    // Retrieve form data
    $NIK = $this->request->getPost('nik');
    $nama_lengkap = $this->request->getPost('nama_lengkap');

    // Additional validation
    if (empty($NIK) || empty($nama_lengkap)) {
        return redirect()->back()->with('error', 'All fields are required.');
    }

    // Prepare data array for insert
    $data = [
        'NIK' => $NIK,
        'nama_lengkap' => $nama_lengkap,
        'level' => 2,
    ];

    // Insert the new user into the 'user' table
    if ($model->tambah('user', $data)) {
        return redirect()->to('home/login')->with('message', 'Signup successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add user.');
		// print_r($data);
    }
}
}
