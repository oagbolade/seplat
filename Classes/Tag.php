<?php
	/**
   * Tag
   *
   * This class is used for creation of HTML tags
   * @author      Alabi A. <alabi.adebayo@alabiansolutions.com>
   * @copyright   2017 Alabian Solutions Limited
   * @link        alabiansolutions.com
   */
	class Tag {
		protected $_url;

		/**
     * Setup up Tag by supplying with root url
     * @param string $url the site root url
		 * @return void
     */
    public function __construct(){
      $this->_url = URL;

    }

		/**
		 * Used to create the head tag
		 * @param string $title the page title
		 * @param string $bodyClass the css class for the body tag
		 * @param array $files a 2 dimensional array('css'=>array(), 'js'=>array())
		 * @param array $otherTag an array that contains other tags needed in the head
		 * @return string $tag HTML tags that represent the head tag
		 */
		public function createHead($title, $bodyClass, $files="", $otherTag=""){
			$url=$this->_url;
			$styles="";
			$scripts="";
			$tags="";
			if($files){
				if(isset($files['css'])){
					foreach ($files['css'] as $cssFile) {
						$styles.="<link rel='stylesheet' href='".$url."$cssFile'>";
					}
				}
				if(isset($files['js'])){
					foreach ($files['js'] as $jsFile) {
						$scripts.="<script src='".$url."$jsFile'></script>";
					}
				}
			}
			if($otherTag){
				foreach ($otherTag as $aTag) {
					$tags.=$aTag;
				}
			}
			$tag="
				<!DOCTYPE html>
					<html lang='en'>
					  <head>
					    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
					    <!-- Meta, title, CSS, favicons, etc. -->
					    <meta charset='utf-8'>
					    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
					    <meta name='viewport' content='width=device-width, initial-scale=1'>
					    <title>$title</title>
					    <!-- Bootstrap -->
					    <link href='". $url ."vendors/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
					    <!-- Font Awesome -->
					    <link href='". $url ."vendors/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
					    <!-- NProgress -->
					    <link href='". $url ."vendors/nprogress/nprogress.css' rel='stylesheet'>
					    <!-- Custom Theme Style -->
					    <link href='". $url ."build/css/custom.min.css' rel='stylesheet'>
					    <!-- My CSS-->
					    <link href='". $url ."css/styles.css?ver=". time() ."' rel='stylesheet'>
					    <!-- Favicon -->
					    <link rel='icon shortcut' type='image/x-icon' href='". $url ."images/favicon.ico'>
					    $styles
					    $scripts
					    <!--
						  	Developed by Alabian Solutions Limited for ProIT Limited
						  	Phone: 08034265103
						  	Email: info@alabiansolutions.com
						  	Lead Developer: Alabi A. (facebook.com/alabi.adebayo)
						  -->
					  </head>
					  <body class='$bodyClass'>
			";
			return $tag;
		}

		/**
		 * Used to create the footer section for js inclusion
		 * @param array $js an array that contains js files
		 * @return string $tag HTML tags that represent the scripts tags
		 */
		private function createFooterJS($js=""){
			$url=$this->_url;
			$scripts="";
			if($js){
				foreach ($js as $aJsFile) {
					$scripts.="<script src='".$url."$aJsFile'></script>";
				}
			}
			$tag="
				<script src='".$url."js/jquery.min.js'></script>
				<script src='".$url."js/bootstrap.min.js'></script>
				<script src='".$url."js/fastclick.js'></script>
				<script src='".$url."js/nprogress.js'></script>
				$scripts
			";
			return $tag;
		}

		/**
		 * Used to create the footer section for developer slogan
		 * @return string $tag HTML tags that represent the footer slogan
		 */
		public function createFooterSlogan(){
			$tag="

				<footer>
          <div class='pull-right'>
            Copyright &copy;".date("Y")." Seplat Petroleum Development Company Plc
          </div>
          <div class='clearfix'></div>
        </footer>
			";
			return $tag;
		}

		/**
		 * Used to create the footer section of the document
		 * @param array $js an array that contains js files
		 * @return string $tag HTML tags that represent the footer section
		 */
		public function createFooter($js=""){
			$tag = "";
			$tag .= $this->createFooterJS($js);
			$tag .="</body></html>";
			return $tag;
		}

		/**
		 * Create the  alert box
		 * @param string $heading heading of the alert box
		 * @param string $content content of the alert box
		 * @param string $type determine if the box is success or danger box default is success box
		 * @param boolean $dismissible check if the box should have a dismiss botton
		 * @return string $tag HTML tags that represent the alert box
		 */
		public function createAlert($heading, $content, $type = 'success', $dismissible = true){
			$dismisButton = "";
			if($dismissible){
				$dismisButton = "
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>×</span>
	        </button>
				";
			}
			$icon = "";
			$h4 = "";
			if($heading){
				$icon = ($type == "success") ? "check" : "ban" ;
				$h4 = "<h4><i class='icon fa fa-$icon'></i> $heading</h4>";
			}
			$alert = ($type == "success") ? "success" : "danger" ;
			$tag ="
				<div class='alert alert-$alert alert-dismissible fade in' role='alert'>
					$dismisButton
	        $h4
	        <p>
	        	$content
	        </p>
       	</div>";

			return $tag;
		}

		/**
		 * Used to create the masthead bar
		 * @param PDOHandler $PDO an instance of PDOHandler class
	 	 * @param string $email of the presently login user
		 * @return string $tag HTML tags that represent the masthead
		 */
		public function createMastHead(PDOHandler $PDO, $email = ""){
			$url=$this->_url;
			$DbHandle = new DBHandler($PDO, "login", __FILE__);
			$User = new Users($DbHandle);

			//User's details
			if($email){
				$userDetails = $User->userDetails($email);
				$name = "";
				$passport = "<img src='". $url . "images/passport/profile.png' alt='$name' class=''>";
				if($userDetails){
					if($userDetails['user_type'] == 'logger'){
						$userDetails['f_name'] = ""; $userDetails['m_name'] = ""; $userDetails['s_name'] = "";
						$userDetails['passport'] = "profile.png";
					}
					$name = "{$userDetails['f_name']} {$userDetails['m_name']} {$userDetails['s_name']}";
					$passport = "<img src='". $url . "images/passport/{$userDetails['passport']}' alt='$name' class=''>";
				}
			}
			else {
				$name = "";
				$passport = "<img src='". $url . "images/passport/profile.png' alt='$name' class=''>";
			}

			$tag="
			<!-- top navigation -->
        <div class='top_nav'>
          <div class='nav_menu noPrint'>
            <nav>
              <div class='nav toggle'>
                <a id='menu_toggle'><i class='fa fa-bars'></i></a>
              </div>

              <ul class='nav navbar-nav navbar-right'>
                <li class=''>
                  <a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                    $passport $name
                    <span class=' fa fa-angle-down'></span>
                  </a>
                  <ul class='dropdown-menu dropdown-usermenu pull-right'>
                    <!--<li><a href='javascript:;'> Profile</a></li>
                    <li>
                      <a href='javascript:;'>
                        <span class='badge bg-red pull-right'>50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href='javascript:;'>Help</a></li>-->
                    <li><a href='". URL ."logout.php'><i class='fa fa-sign-out pull-right'></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->";
			return $tag;
		}

		/**
		 * Create the side bar and its menu of the website
		 * @param PDOHandler $PDO an instance of PDOHandler class
	 	 * @param string $email of the presently login user
		 * @param array $activeMenu ['parent'=>'menu name', 'child'=>'menu name'] menu & submenu that is active
		 * @return string $tag HTML tags that represent the masthead
		 */
		public function createSideBar(PDOHandler $PDO, $email = "", $activeMenu = []){
			$url=$this->_url;
			$DbHandle = new DBHandler($PDO, "login", __FILE__);
			$User = new Users($DbHandle);
			$idNo = "";

			//User's details
			if($email){
				$userDetails = $User->userDetails($email);
				$name = "";
				$passport = "<img src='". $url . "images/passport/profile.png' alt='$name' class='img-circle profile_img al_profile_img'>";
				if($userDetails){
					if($userDetails['user_type'] == 'logger'){
						$userDetails['f_name'] = ""; $userDetails['m_name'] = ""; $userDetails['s_name'] = "";
						$userDetails['passport'] = "profile.png";
					}
					if(isset($userDetails['applicant_no'])) $idNo = $userDetails['applicant_no'];
					if(isset($userDetails['member_no'])) $idNo = $userDetails['member_no'];
					$name = "{$userDetails['f_name']} {$userDetails['m_name']} {$userDetails['s_name']}";
					$passport = "<img src='". $url . "images/passport/{$userDetails['passport']}' alt='$name' class='img-circle profile_img al_profile_img'>";
				}
			}
			else {
				$name = "John Doe";
				$passport = "<img src='". $url . "images/passport/profile.png' alt='$name' class='img-circle profile_img'>";
			}

			//Basic side bar content
			$tag="
				<div class='col-md-3 left_col'>
				<div class='left_col scroll-view'>
          <div class='navbar nav_title' style='border: 0;'>
            <a href='". $url ."home' class='site_title'>
            <img src='". $url ."images/logo.png' class='img-circle al_logo_img'>
            <span title='NIM Membership Application Portal'>NIM MAP</span>
          </a>
          </div>
          <div class='clearfix'></div>
          <!-- menu profile quick info -->
          <div class='profile clearfix'>
            <div class='profile_pic'>
              $passport
            </div>
            <div class='profile_info'>
              <span>$idNo</span>
              <h2>$name</h2>
            </div>
            <div class='clearfix'></div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>
            <div class='menu_section active'>
              <h3>Menu</h3>
              <ul class='nav side-menu'>
                <!--<li><a href=". $url ."home><i class='fa fa-home'></i> Home</a></li>-->
                "
      ;

			//Create other menu item if there is login user
			if($email){
				$userMenu = [];
				$logoutMenu = ['url'=>'logout.php', 'fa'=>'power-off', 'sub'=>[]];
				$allStaffMenu = [];
				$allVendorMenu = [];
				switch ($userDetails['user_type']) {
					case 'logger':
						$userMenu = [];
					break;
					case 'vendor':
						$userMenu = [
							'Vendor Menu' => ['url'=>'', 'fa'=>'users', 'sub'=>[
								'Sub Menu I'=>'foldername', 'Sub Menu II'=>'foldername']],
						];
					break;
					case 'vendor requestor':
						$userMenu = [
							'Vendor Request' => ['url'=>'', 'fa'=>'users', 'sub'=>[
								'New Requst'=>'new-request',
								'Rejected Requests'=>'rejected-request',
								'Pending Requests'=>'pending-request',
								]
							],
							'Market Place' => [
								'url'=>'market-place', 'fa'=>'users', 'sub'=>[]
							],
							'Notifications' => [
								'url'=>'vendor-requestor-notifications', 'fa'=>'bell', 'sub'=>[]
							],
						];
					break;
					case 'procurer':
						$userMenu = [
							'Procurer Menu' => ['url'=>'', 'fa'=>'users', 'sub'=>[
								'Sub Menu I'=>'foldername', 'Sub Menu II'=>'foldername']],
						];
					break;
					case 'it':
						$userMenu = [
							'IT Menu' => ['url'=>'', 'fa'=>'users', 'sub'=>[
								'Sub Menu I'=>'foldername', 'Sub Menu II'=>'foldername']],
						];
					break;
					case 'it super':
						$userMenu = [
							'IT Super Menu' => ['url'=>'', 'fa'=>'users', 'sub'=>[
								'Sub Menu I'=>'foldername', 'Sub Menu II'=>'foldername']],
						];
					break;

				}
				$userMenu['Logout'] = $logoutMenu;

				//$userDetails ="";
				if($userMenu){
					$mainMenuActive = ""; //active
					$subMenuActive = ""; //current-page $activeMenu['parent'], $activeMenu['child'];
					$openSubMenu = "";
					foreach ($userMenu as $aMenu => $aMenuAttribute) {
						if($aMenuAttribute['sub']){
							if($activeMenu) $mainMenuActive = ($activeMenu['parent'] == "$aMenu") ? "active" : "";
							if($activeMenu) $openSubMenu = ($activeMenu['parent'] == "$aMenu") ? "style='display:block;'" : "";
							$tag .="
								<li class='$mainMenuActive'>
									<a>
										<i class='fa fa-{$aMenuAttribute['fa']}'></i> $aMenu <span class='fa fa-chevron-down'></span>
									</a>
									<ul class='nav child_menu' $openSubMenu>";
							foreach ($aMenuAttribute['sub'] as $subMenu => $subMenuLink) {
								if($activeMenu) $subMenuActive = ($activeMenu['child'] == "$subMenu") ? "current-page" : "";
								$tag .="<li class='$subMenuActive'><a href='$url$subMenuLink'>$subMenu</a></li>";
							}
							$tag .="</ul></li>";
						}
						else {
							if($activeMenu) $mainMenuActive = ($activeMenu['parent'] == "$aMenu") ? "active" : "";
							$tag .="<li class='$mainMenuActive'><a href='$url{$aMenuAttribute['url']}'><i class='fa fa-{$aMenuAttribute['fa']}'></i> $aMenu</a></li>";
						}
					}
				}
			}

			$tag .= "
					</ul>
         </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class='sidebar-footer hidden-small'>
          <a data-toggle='tooltip' data-placement='top' title='Settings'>
            <span class='glyphicon glyphicon-cog' aria-hidden='true'></span>
          </a>
          <a data-toggle='tooltip' data-placement='top' title='FullScreen'>
            <span class='glyphicon glyphicon-fullscreen' aria-hidden='true'></span>
          </a>
          <a data-toggle='tooltip' data-placement='top' title='Lock'>
            <span class='glyphicon glyphicon-eye-close' aria-hidden='true'></span>
          </a>
          <a href='". URL ."logout.php' data-toggle='tooltip' data-placement='top' title='Logout'>
            <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
          </a>
        </div>
        <!-- /menu footer buttons -->
      	</div>
        </div>
			";

			return $tag;
		}

	}
