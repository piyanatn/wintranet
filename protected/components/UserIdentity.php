<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

        public function authenticate()
                
	{
//		$users=array(
//			// username => password
//			'demo'=>'demo',
//			'admin'=>'admin',
//		);
                                $username = strtolower($this->username);  
                                $user = HosinfoUser::model()->find('LOWER(idcard)=?',array($username));
                            // UserLogin ชื่อ Model ที่เราสร้างไว้
                                if(!isset($user)){ // === NULL
                                      $this->errorCode = self::ERROR_USERNAME_INVALID;
                                  }else if(!$user->validatePassword($this->password)){ // !== Password
                                       $this->errorCode = self::ERROR_PASSWORD_INVALID;
                                  }else{           
                                      $this->username = $user->idcard;
                                      //$this->_fullname=$user->fullname;
                                   
                                       $this->setState('fullname', $user->fullname);
                                       $this->setState('level', $user->level);
                                      // $user->name; name ชื่อ Field :: name ในตาราง user
                                      $this->errorCode = self::ERROR_NONE;
                                  }

                                  return $this->errorCode == self::ERROR_NONE;
    
	}
       
}