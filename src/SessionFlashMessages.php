<?php

namespace Suvarivaza\SFM;

class SessionFlashMessages
{

    /*
     * if the session is not running, start it.
     */
    function __construct()
    {
        if (session_id() === "") { session_start(); }
    }

    /*
     * addMessage method
     *
     * @param  $name|string
     * @param  $message|string/array
     */
    public function addMessage($name, $message)
    {
        $_SESSION[$name] = $message;
    }


    /*
     * existMessage method
     *
     * @param  $name|string
     */
    public function existMessage($name)
    {
        return isset($_SESSION[$name]) ? true : false;
    }



    /*
     * getMessage method
     *
     * Display the message from the session and clear it after display
     * @return string
     */
    public function getMessage($name)
    {
        if(isset($_SESSION[$name])){
            $message = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $message;
        } else {
            return '';
        }
    }


}