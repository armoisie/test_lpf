<?php
class Database {
    // ________connexion à la database, renvoie la database
    public function getJson($chemin){
        if(file_exists($chemin)){
            $str_Json = file_get_contents("$chemin");
            $objJson = json_decode($str_Json, true);
            return $objJson;
        }else {
            throw new Exception("La base de données est introuvable");
        }
    }


    // ________gestion des cookies pour pouvoir exploiter la database ensuite en fonction de la langue
    const COOKIE_LANG_KEY = 'lang';
    //récupérer la langue de l'utilisateur à partir des cookies ou des en-têtes HTTP 
    public function getLang(){
        $lang = $this->getCookieLang();
        if(!$lang) {
            $lang = $this->getBrowserLang();
            $this->setCookieLang($lang);
        }
        return $lang;
    }

    // redéfinir la langue en fonction du GET
    public function setLang($newLang){
        $lang = $this->getCookieLang();
        if($lang){
            $lang = $newLang;
        }
        return $lang;
    }

    // récupérer la langue à partir du cookie
    private function getCookieLang(){
        return isset($_COOKIE[self::COOKIE_LANG_KEY]) ? $_COOKIE[self::COOKIE_LANG_KEY] : null;
    }

    // récupérer la langue à partir des en-têtes HTTP
    private function getBrowserLang(){
        return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    // définir le cookie de langue
    private function setCookieLang($lang){
        $expire = 365*24*3600;
        setcookie(self::COOKIE_LANG_KEY, $lang, time() + $expire);
    }

}
?>