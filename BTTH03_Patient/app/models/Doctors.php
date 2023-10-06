<?php 
    class Doctors{
        private $id ;
        private $doctorName;
        private $specialist;
        public function __construct($id, $doctorName, $specialist){
            $this->id = $id;
            $this->doctorName = $doctorName;
            $this->specialist = $specialist;
        }
    
	
	public function getId() {
		return $this->id;
	}
	
	
	public function setId($id) {
		$this->id = $id;
		
	}

	public function getDoctorName() {
		return $this->doctorName;
	}
	
	public function setDoctorName($doctorName) {
		$this->doctorName = $doctorName;
		
	}

	public function getSpecialist() {
		return $this->specialist;
	}
	
	public function setSpecialist($specialist) {
		$this->specialist = $specialist;
		
	}
}
?>