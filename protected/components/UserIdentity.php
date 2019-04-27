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
    private $_id;

    public function authenticate() {
        $user = Quantri::model()->find('TaiKhoan ="'.$this->username.'" AND Active = 1 ');
    
        if ($user === null) { // No user found!
           
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($user->MatKhau !== md5($this->password)) { // Invalid password! 
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else { // Okay!
            $this->errorCode = self::ERROR_NONE;
            // Store the role in a session:
            $this->setState('Name', $user->HoTen);
            $this->setState('Username', $user->TaiKhoan);
            $this->setState('isAuth', 'true');
            $this->setState('role', $user->idRole);
             $this->setState('iduser', $user->id);
            $this->_id = $user->id;
            //
            
        }
        return !$this->errorCode;
    }
    public function authenticate1() {
        $user = Nguoithue::model()->find('Email ="'.$this->username.'" AND Active = 1 ');
    
        if ($user === null) { // No user found!
           
           return array("email"=>1);
        } else if ($user->MatKhau !== md5($this->password)) { // Invalid password! 
            return array("email"=>1);
        } else { // Okay!
            $this->errorCode = self::ERROR_NONE;
            // Store the role in a session:
            Yii::app()->user->setState('HoTen',$user->HoTen);
            Yii::app()->user->setState('Email',$user->Email);
            Yii::app()->user->setState('isAuth1',1);
            Yii::app()->user->setState('idthanhvien',$user->id);
            return array("success"=>1);
            //
            
        }
    }
    //dangnhapbangfb
        public function authenticate3() {
        $user = Nguoithue::model()->find("Email = '$this->username'");
    
        if ($user === null) { // No user found!
           
           return array("email"=>1);
        } 
         else { // Okay!
            $this->errorCode = self::ERROR_NONE;
            // Store the role in a session:
            Yii::app()->user->setState('HoTen',$user->HoTen);
            Yii::app()->user->setState('isAuth1',1);
            Yii::app()->user->setState('idthanhvien',$user->id);
            return array("success"=>1);
            //
            
        }
    }
    //end dangnhapbangfb
     //dangnhapbangfb
        public function authenticate5() {
        $user = Nguoichothue::model()->find("Email = '$this->username'");
    
        if ($user === null) { // No user found!
           
           return array("email"=>1);
        } 
         else { // Okay!
            $this->errorCode = self::ERROR_NONE;
            // Store the role in a session:
            Yii::app()->user->setState('HoTen',$user->HoTen);
            Yii::app()->user->setState('isAuth2',1);
            Yii::app()->user->setState('idthanhvien',$user->id);
            return array("success"=>1);
            //
            
        }
    }
    //end dangnhapbangfb
    //dangnhapbanggg
        public function authenticate4() {
        $user = Nguoithue::model()->find("Oauth_Uid = $this->username");
    
        if ($user === null) { // No user found!
           
           return array("email"=>1);
        } 
         else { // Okay!
            $this->errorCode = self::ERROR_NONE;
            // Store the role in a session:
            Yii::app()->user->setState('HoTen',$user->HoTen);
            Yii::app()->user->setState('isAuth1',1);
            Yii::app()->user->setState('idthanhvien',$user->id);
            return array("success"=>1);
            //
            
        }
    }
    //end dangnhapbanggg
     public function authenticate2() {
        $user = Nguoichothue::model()->find('Email ="'.$this->username.'" AND Active = 1 ');
    
        if ($user === null) { // No user found!
           
           return array("email"=>1);
        } else if ($user->MatKhau !== md5($this->password)) { // Invalid password! 
            return array("email"=>1);
        } else { // Okay!
           Yii::app()->user->setState('HoTen',$user->HoTen);
            Yii::app()->user->setState('Email',$user->Email);
            Yii::app()->user->setState('isAuth2',1);
            Yii::app()->user->setState('idthanhvien',$user->id);
            return array("success"=>1);
            //
            
        }
        return !$this->errorCode;
    }


    public function getId() {
        return $this->_id;
    }
}