<?php 
    class Question {
        public $id_cauhoi;
        public $title;
        public $cau_a;
        public $cau_b;
        public $cau_c;
        public $cau_d;
        public $dap_an;
        private $conn1 ;
        //constructor: function duoc tu dong goi khi tao object tu class
        public function __construct($db) {
            $this->conn1 = $db;
            return $this->conn1;
        }
        public function read() { //phuong thuc GET toan bo du lieu
            $sql = 'SELECT * FROM question'; 
            // $result = $this->conn1->query($sql);
            $result = mysqli_query($this->conn1, $sql);
            return $result;
     
        }
        public function show($idfind) { // get du lieu qua id 
            // echo("id find ben questionphp         ".$idfind);
            $sql1 = 'SELECT * FROM question WHERE id =' .$idfind ;  //id la truong trong co so du lieu
            // echo ($sql1);
            // $result = $this->conn1->query($sql);
            $result = mysqli_query($this->conn1, $sql1);
            return $result;
        }
    }
  
?>