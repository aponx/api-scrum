<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $username = strtolower($this->username);
        // from database... change to suit your authentication criteria
        // -- Nope, I wont include mine --
        $user = User::model()->find('LOWER(user_username)="'.$username.'" and user_status_id = 1');
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else{
            // successful login
            $this->_id = $user->user_id;
            $this->username = $user->user_username;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }
    public function getId()
    {
        return $this->_id;
    }
}

?>