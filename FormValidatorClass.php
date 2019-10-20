<?php
	class validations {
	
		public function __construct() {
			//empty constructor
		}
	

		
public function filterSpecialCharacters($inFieldValue) {
			$inFieldValue = htmlspecialchars($inFieldValue);
			$inFieldValue = filter_var($inFieldValue, FILTER_SANITIZE_SPECIAL_CHARS);
			return $inFieldValue;
		}
		
		//check if value is not empty 
public function cannotBeEmpty($inFieldValue) {
			$inFieldValue = trim($inFieldValue);
			if( empty($inFieldValue) ) {
				return true;
			}
		}
		
public function cannotBeNullOrUndefined($inFieldValue) {
			if(preg_match("/undefined|null/i", $inFieldValue) ) {
				return true;
			}
		}
public function isNumber($inFieldValue) {
			if( !$inFieldValue == "" && !is_numeric($inFieldValue) ) {
				return true;
			}
		}
		
public function validatePhoneCharacters($inFieldValue) {
			if( preg_match("/[-\(\)]/", $inFieldValue) ) {
				return true;
			}
		}
		
public function validatePhoneLength($inFieldValue) {
			if( strlen($inFieldValue) > 0 && strlen($inFieldValue) < 10 ) {
				return true;
			}
		}
	
public function validateEmail($inEmail) {			
			$inEmail = filter_var($inEmail, FILTER_SANITIZE_EMAIL);	//clean entered value
			$inEmail = filter_var($inEmail, FILTER_VALIDATE_EMAIL);	//validate format
			if(!$inEmail) {
				return true;
			}
		}
		
public function selectionRequired($inFieldValue) {
			if(!$inFieldValue) {
				return true;
			}
		}
		
public function characterLengthLessThan200($inFieldValue) {
			if( strlen($inFieldValue) > 200 ) {
				return true;
			}
		}
	}
?>
