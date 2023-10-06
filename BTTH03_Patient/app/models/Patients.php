<?php 
class Patients{
    private $idP;
    private $patientName;
    private $date;
    private $symptom; // trieu chung
    private $doctorName;
    public function __construct($idP, $patientName, $date, $symptom, $doctorName){
        $this->idP = $idP;
        $this->patientName = $patientName;
        $this->date = new DateTime($date);
        $this->symptom = $symptom;
        $this->doctorName = $doctorName;
    }

	public function getIdP() {
		return $this->idP;
	}
	
	public function setIdP($idP){
		$this->idP = $idP;
		
	}

	public function getPatientName() {
		return $this->patientName;
	}
	
	public function setPatientName($patientName) {
		$this->patientName = $patientName;
		
	}

	public function getDate() {
		return $this->date;
	}
	
	public function setDate($date) {
		$this->date = $date;
		
	}

	public function getSymptom() {
		return $this->symptom;
	}
	
	public function setSymptom($symptom) {
		$this->symptom = $symptom;
		
	}

	public function getDoctorName() {
		return $this->doctorName;
	}
	
	public function setDoctorName($doctorName) {
		$this->doctorName = $doctorName;
		
	}
}
?>