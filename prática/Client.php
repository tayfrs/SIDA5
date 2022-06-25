<?php
class Client {
    private $instace;
    public function __construct(){
        //$params = array('location' => 'http://localhost/pos/backII/aula3/server.php',
        //                'uri' => 'urn://localhost/pos/backII/aula3/server.php',
        //                'trace' => 1);
	 $params = array('location' => 'http://www.larback.com.br/soap/server.php',
                        'uri' => 'urn://www.larback.com.br/soap/server.php',
                        'trace' => 1);
        $this->instance = new SoapClient(NULL, $params);
    }

    public function getName($aluno) {
        return $this->instance->__soapCall('getStudentName', $aluno);
    }
}
?>
