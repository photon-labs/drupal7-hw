<?php
/*Author by {phresco} QA Automation Team

*/
require_once 'DrupalCommonFun.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Login_NewUsers extends DrupalCommonFun
{
	protected function Browser()
	{
		parent::setUp();
	}
	public function testLogin()
	{
		parent::Title();
		
		parent::DoLogin(__FUNCTION__);
		 parent::DoLogout();
	

	}

}
?>