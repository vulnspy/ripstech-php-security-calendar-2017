<?php
class LanguageManager
{
    public function loadLanguage()
    {
        $lang = $this->getBrowserLanguage();
        $sanitizedLang = $this->sanitizeLanguage($lang);
        if(file_exists("/lang/$sanitizedLang")){
        	require_once("/lang/$sanitizedLang");
        }
    }

    private function getBrowserLanguage()
    {
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en';
        return $lang;
    }

    private function sanitizeLanguage($language)
    {
        return str_replace('../', '', $language);
    }
}

(new LanguageManager())->loadLanguage();
show_source(__FILE__);
