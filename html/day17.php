<?php
require_once "bootstrap.php";

if($_POST == false){
	show_source(__FILE__);
	exit;
}

class RealSecureLoginManager {
    private $em;
    private $user;
    private $password;

    public function __construct($user, $password) {
        $this->em = DoctrineManager::getEntityManager();
        $this->user = $user;
        $this->password = $password;
    }

    public function isValid() {
        $pass = md5($this->password, true);
        $user = $this->sanitizeInput($this->user);

        $queryBuilder = $this->em->createQueryBuilder()
            ->select("COUNT(u)")
            ->from("User", "u")
            ->where("u.password = '$pass' AND u.user = '$user'");
        $query = $queryBuilder->getQuery();
        return boolval($query->getSingleScalarResult());
    }

    public function sanitizeInput($input) {
        return addslashes($input);
    }
}

$auth = new RealSecureLoginManager(
    $_POST['user'],
    $_POST['passwd']
);
if (!$auth->isValid()) {
    exit;
}

echo 'Hello, '.$_POST['user'];
