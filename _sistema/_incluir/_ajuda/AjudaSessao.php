<?php

/**
 * SESSAO
 */
class AjudaSessao {

    private static $sessionin = false;

    static function iniciasessao() {

        if (self::$sessionin == false) {

            session_start();
            self::$sessionin = true;
        }
    }

    static function apagasessao() {
        return session_destroy();
    }

    public static function salva($chave, $valor) {

        $sess = $_SESSION[$chave] = $valor;

        if ($sess = true) {

            return $sess;
        } else {

            $sess;
        }
    }

    public static function mostra($chave, $adicional = false) {

        if ($adicional == true) {
            if (isset($_SESSION[$chave][$adicional]))
                return $_SESSION[$chave][$adicional];
        }else {

            if (isset($_SESSION[$chave]))
                return $_SESSION[$chave];
        }
        return false;
    }

    public static function pre() {

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    }

    public static function laco() {

        return $_SESSION;
    }

}

?>