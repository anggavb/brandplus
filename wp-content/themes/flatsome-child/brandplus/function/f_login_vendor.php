<?php
class vendor
{

  public function login()
  {
    global $wpdb;

    		$username = $wpdb->escape($_POST['username']);
    		$password = $wpdb->escape($_POST['password']);

    		$login = array(
    			'user_login' => $username,
    			'user_password' => $password
    		);

    		$curl = curl_init();
    		curl_setopt_array($curl,[
    			CURLOPT_RETURNTRANSFER => 1,
    			CURLOPT_URL =>'https://www.google.com/recaptcha/api/siteverify',
    			CURLOPT_POST => 1,
    			CURLOPT_POSTFIELDS => [
    				'secret' => '6LffvY8UAAAAAAkROcThU0V-6uMGKfTLuVzbxV86',
    				'response' => $_POST['g-recaptcha-response'],
    			],
    		]);

    		$response = json_decode(curl_exec($curl));
    		// var_dump($response);
    		// die();

    			if($response->success){

    				$verify = wp_signon($login, true);

    				if ( $verify ) {
    					echo "<script>window.location = '".site_url()."/vendor/'</script>";
    				} else {
    					echo "<script>alert('Username atau Password Salah');</script>";
    				}

    			} else {
    				echo "<script>alert('reCAPTCHA harus diisi');</script>";
    				echo "<script>window.location = '".site_url()."/login-vendor/'</script>";
    			}

  }
}
