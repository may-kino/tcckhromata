<?php
class HomeController extends AppController {
	
	var $name = 'Home';
	var $uses = array('FacebookUsers');
	var $config_fb = array(
		'baseUrl' => 'http://localhost:8888/OOO/project/',
		'appId' => '499704533395101',
		'secret' => 'f4fb024d233f9cd651274cb15e593892',
		'cookie' => false
	);


	function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index' ,'_checkUserSession','loginFacebook');
		//$this->_checkUserSession(); 
	}

	function loginFacebook(){
		$this->autoRender = false;
		$this->_checkUserSession(); 

	}



	
	function _checkUserSession() {
		// Verifica a conexão com o Facebook
		App::import('Vendor', 'Facebook', array('file' => '/facebook/php-sdk/src/facebook.php'));

		$this->_facebook = new Facebook($this->config_fb);
	
		$accessToken = $this->_facebook->getAccessToken();
		
		$user = $this->_facebook->getUser();
		
		
		if($user != 0) {
			try {
				$profile = $this->_facebook->api('/me');
				$profile['facebook_uid'] = $profile['id'];
				unset($profile['id']);
				
				if($usr_game = $this->FacebookUsers->find('first', array('conditions' => array('facebook_uid' => $profile['facebook_uid'])))){
					$this->Session->write('UserFb', $usr_game['FacebookUsers']);
				}else{
					$data['FacebookUsers'] = $profile;
					if($this->FacebookUser->save($data['FacebookUsers'])){
						$profile['id'] = $this->FacebookUser->id;
						$this->Session->write('UserFb', $data['FacebookUsers']);
					}
				}

			}catch(FacebookApiException $e) {
				//carrega a pagina e o js instala o app
			}   
		}else{
			$login_url = $this->_facebook->getLoginUrl( array( 'scope' => 'publish_stream,email,user_photos,friends_photos' ) );
			header("Location:$login_url");

		}
		var_dump($_SESSION);
	}

	public function index() {
		
		//$this->autoRender = false;
		
	}

}
?>