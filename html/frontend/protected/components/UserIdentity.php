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
    const ERROR_COULD_NOT_CONNECT = 101;
    const ERROR_PASSORD_EXPIRED = 102;

    public function authenticate()
    {
        $users = array(
            // username => password
            'demo' => 'demo',
            'admin' => 'admin',
        );


//        if (!isset($users[$this->username]))
//            $this->errorCode = self::ERROR_USERNAME_INVALID;
//        elseif ($users[$this->username] !== $this->password)
//            $this->errorCode = self::ERROR_PASSWORD_INVALID;
//        else
//            $this->errorCode = self::ERROR_NONE;


        return $this->validateLDAP($this->username, $this->password);
    }

    public function validateLDAP($username, $password)
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        //define('DOMAIN_FQDN', 'bandeirantes.com.br');
        //define('LDAP_SERVER', '1.1.3.54');
        $username = strtolower($username);
        $username = str_replace('bandeirantes\\', '', $username);
        $username = str_replace('@band.com.br', '', $username);
        $username = str_replace('@bandeirantes.com.br', '', $username);

        $user = strip_tags($username) . '@' . Yii::app()->params['DOMAIN_FQDN'];
        $pass = stripslashes($password);
        //echo $user;
        //echo '<br>';
        //echo $pass;
        //echo '<br>';
        $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;

        $conn = ldap_connect("ldap://" . Yii::app()->params['LDAP_SERVER'] . "/");

        if (!$conn) {
            $this->errorCode = self::ERROR_COULD_NOT_CONNECT;
            //echo 'nao conectiou';
            //echo '<br>';
        } else {
            define('LDAP_OPT_DIAGNOSTIC_MESSAGE', 0x0032);

            ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($conn, LDAP_OPT_REFERRALS, 0);

            $bind = @ldap_bind($conn, $user, $pass);
            //echo ' $bind = '.$bind;

            //echo '<br>';
            ldap_get_option($conn, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);

            if (!empty($extended_error)) {
                $errno = explode(',', $extended_error);
                $errno = $errno[2];
                $errno = explode(' ', $errno);
                $errno = $errno[2];
                $errno = intval($errno);

                if ($errno == 532) {
                    $this->errorCode = self::ERROR_PASSORD_EXPIRED;
                    //echo ' ERROR_PASSORD_EXPIRED';
                    //echo '<br>';
                }

            } elseif ($bind) {
                //echo ' dinbbbb';
                //echo '<br>';
                $base_dn = array("CN=Users,DC=" . join(',DC=', explode('.', Yii::app()->params['DOMAIN_FQDN'])),
                    "OU=Users,OU=People,DC=" . join(',DC=', explode('.', Yii::app()->params['DOMAIN_FQDN'])));

                $result = ldap_search(array($conn, $conn), $base_dn, "(cn=*)");
                //echo '$result <br><br>';
                //var_dump ($result);
                //echo '<br>';
                if (!count($result)) {
                    $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
                    //$this->errorCode  = 'Unable to login: ' . ldap_error($conn);
                    //echo ' ERROR_UNKNOWN_IDENTITY';
                    //echo '<br>';
                } else {
                    $this->errorCode = self::ERROR_NONE;
//                    foreach ($result as $res) {
//                        $info = ldap_get_entries($conn, $res);
//
//                        // die();
//                        for ($i = 0; $i < $info['count']; $i++) {
//                            //var_dump ($info[$i]);
//
//                            if (isset($info[$i]['userprincipalname']) AND strtolower($info[$i]['userprincipalname'][0]) == strtolower($user)) {
//                                //session_start();
//
//                                //$username = explode('@', $user);
//                                //$_SESSION['foo'] = 'bar';
//
//                                // set session variables...
//                                $this->errorCode = self::ERROR_NONE;
//                                //echo ' ERROR_NONE';
//                                //echo '<br>';
//                                break;
//                            }
//                        }
//                    }
                }
            }
        }
        //  die();
        // session OK, redirect to home page
//            if (isset($_SESSION['foo'])) {
//                header('Location: /');
//                exit();
//            } elseif (!isset($err)) $err = 'LOGGED: ' . ldap_error($conn);
//        if (!isset( $this->errorCode )){
//            $this->errorCode  = self::ERROR_NONE;
//            //echo ' ERROR_NONEwww';
//            //echo '<br>';
//        }
        ldap_close($conn);


        return $this->errorCode;
    }
}