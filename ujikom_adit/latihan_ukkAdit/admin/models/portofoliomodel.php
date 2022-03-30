<?php

class portofoliomodel{
    private$host =DB_HOST;
    private$user =DB_USER;
    private$pass =DB_PASS;
    private$db_name=DB_NAME;

    private$dbh;
    private$stmt;
    function _construct()
{
    //data source name
    $dsn = 'mysql:host='.$this->host.';dbname='.this->db_name;
    $option =
       PDO::ATTR_PERSISTENT => true,
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
TRY{
    $this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
}catch(PDOException $e){
    die($e->getMessage());
}
public function getprofile()
{
    $this->stmt = $this->dbh->prepare('SRLECT*FROM user');
    $this->stmt->execute();
    return $this->stmt->fecthAll(PDO::FETCH_ASSOC);
}
public function index()
{
    $data['profile'] = $this->model('portofolioModel')->getprofile();

    $data['profile'] = $this->model('portofolioModel')->getabout();

    $data['profile'] = $this->model('portofolioModel')->getproject();


    $this->view('portofolio/index',$data);                             
}
public function getabout()
$this->stmt = $this->dbh->prepare('SRLECT*FROM about');
    $this->stmt->execute();
    return $this->stmt->fecthAll(PDO::FETCH_ASSOC);
}
public function getaproject()
$this->stmt = $this->dbh->prepare('SRLECT*FROM project');
    $this->stmt->execute();
    return $this->stmt->fecthAll(PDO::FETCH_ASSOC);

}