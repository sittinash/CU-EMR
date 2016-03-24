<?php

	class SpecialNurseFetchVitalSignReport extends Controller 
	{

		function SpecialNurseFetchVitalSignReport() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialNurseFetchVitalSignReport');

			$nationalId = $_POST['natIdToFetchAppmt'];
			$hospitalId = $_POST['hosIdToFetchAppmt'];

			if(empty($nationalId) && empty($hospitalId)) {

				header('location: ./declareQueryAppointmentFailsEmptyParam');

			} else {

				if(!empty($nationalId))
					$appointmentArr = $this->model->getAppointmentListByNationalId($nationalId);
				else if(!empty($hospitalId))
					$appointmentArr = $this->model->getAppointmentListByHospitalId($hospitalId);
				
				if(empty($appointmentArr))
					header('location: ./declareQueryAppointmentFails');
				else {
					Session::set('appointmentArr', $appointmentArr);
					header('location: ./nurseVitalSignReport');
				}
				
			}

		}

	}

?>