<?php
class Redirect {
    private $websiteHost = 'www.vulnspy.com';

    private function setHeaders($url) {
        $url = urldecode($url);
        header("Location: $url");
    }

    public function startRedirect($params) {
        $parts = explode('/', $_SERVER['PHP_SELF']);
        $baseFile = end($parts);
        $url = sprintf(
            "%s?%s",
            $baseFile,
            http_build_query($params)
        );
        $this->setHeaders($url);
    }
}

if ($_GET['redirect']) {
    (new Redirect())->startRedirect($_GET['params']);
}
show_source(__FILE__);
