<?php

namespace App\Controllers;

use App\Models\ImportPermitModel;
// email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$session;
$view;
$request;


class Home extends BaseController
{
	const SMPP_MAIL = "kiaceducation@gmail.com";
	const SMPP_PASSWORD = "devgabruxtnvlynm";

	private $data = array();

	public function __construct()
	{
		helper('qonics');
		service('request')->setLocale(isset($_COOKIE['lang']) ? $_COOKIE['lang'] : "en");

		$this->db = \Config\Database::connect();

	}


	public function import_permit()
	{
		return view("landingPage/import_permit.php");
	}


	function import_permit_service()
	{
		$studentAppModel = new ImportPermitModel();

		$citizenship = $this->request->getPost('citizenship');
		$nid = $this->request->getPost('nid');
		$passport = $this->request->getPost('passport');
		$other_names = $this->request->getPost('other_names');
		$surname = $this->request->getPost('surname');
		$nationality = $this->request->getPost('nationality');
		$phone = $this->request->getPost('phone');
		$email = $this->request->getPost('email');
		$location = $this->request->getPost('location');
		$business_type = $this->request->getPost('business_type');
		$company_name = $this->request->getPost('company_name');
		$tin_number = $this->request->getPost('tin_number');
		$reg_date = $this->request->getPost('reg_date');
		$business_location = $this->request->getPost('business_location');
		$purpose = $this->request->getPost('purpose');
		$specify_purpose = $this->request->getPost('specify_purpose');
		$product_category = $this->request->getPost('product_category');
		$product_name = $this->request->getPost('product_name');
		$weight = $this->request->getPost('weight');
		$description = $this->request->getPost('description');
		$measurement = $this->request->getPost('measurement');
		$quantity = $this->request->getPost('quantity');

		$studentData = [
			"citizenship" => $citizenship,
			"nid" => $nid,
			"passport" => $passport,
			"other_names" => $other_names,
			"surname" => $surname,
			"nationality" => $nationality,
			"phone" => $phone,
			"email" => $email,
			"location" => $location,
			"business_type" => $business_type,
			"company_name" => $company_name,
			"tin_number" => $tin_number,
			"reg_date" => $reg_date,
			"business_location" => $business_location,
			"purpose" => $purpose,
			"specify_purpose" => $specify_purpose,
			"product_category" => $product_category,
			"product_name" => $product_name,
			"weight" => $weight,
			"description" => $description,
			"measurement" => $measurement,
			"quantity" => $quantity,
		];
		try {
			$existingRecord = $studentAppModel
				->where('email', $email)
				->where('nid', $nid)
				->first();

			if ($existingRecord) {
				echo '<div style="background-color: #f3f3f3; padding: 10px; border: 1px solid #ccc;">';
				echo '<p style="color: #333; text-align:center; font-size: 18px; font-family:Helvetica; font-weight: bold;">Your have already Applied!</p>';
				echo '</div>';
			} else {
				$studentData = $studentAppModel->insert($studentData);
				if ($studentData) {

					$mail = new PHPMailer(true);
					try {
						$mail->isSMTP();
						$mail->Host = 'smtp.gmail.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'kiaceducation@gmail.com';
						$mail->Password = self::SMPP_PASSWORD;
						$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
						$mail->Port = 587;


						$mail->setFrom('kiaceducation@gmail.com', 'RICA Import Permit');
						$mail->addAddress($email, $surname);


						$mail->isHTML(true);
						$mail->Subject = 'RICA - Import Permit';
						$mail->Body = '<div style=" padding: 10px;">
							Applicant citizenship: ' . $citizenship . ',<br/>
							Identification Document Number : ' . $nid . ',<br/>
						    Passport number: ' . $passport . ',<br/>
							Other names: ' . $other_names . ',<br/>
							Surname: ' . $surname . ',<br/>
							Nationality: ' . $nationality . ',<br/>
							Phone number: ' . $phone . ',<br/>
							E-mail address: ' . $email . ',<br/>
							Location: ' . $location . ',<br/>
							Business type: ' . $business_type . ',<br/>
							Company name: ' . $company_name . ',<br/>
							TIN number: ' . $tin_number . ',<br/>
							Registration date: ' . $reg_date . ',<br/>
							Business location: ' . $business_location . ',<br/>
							Purpose of importation: ' . $purpose . ',<br/>
							Specify purpose of importation: ' . $specify_purpose . ',<br/>
							Product category: ' . $product_category . ',<br/>
							Product name: ' . $product_name . ',<br/>
							Weight(kg): ' . $weight . ',<br/>
							Description of product: ' . $description . ',<br/>
							Unit of measurement: ' . $measurement . ',<br/>
							Quantity of product(s): ' . $quantity . '<br/>
							</div>';

						$mail->send();
						return redirect()->to(base_url("import_permit"))->with('success', 'Your application successfully submitted, We have sent you an email!');
					} catch (Exception $e) {
						return redirect()->to(base_url("import_permit"))->with('error', 'Email sending failed: ' . $mail->ErrorInfo);
					}


				} else {
					echo 'Failed to insert student data.';
				}
			}


		} catch (\Exception $e) {
			return $this->response->setJSON(["error" => "Error: " . $e->getMessage()]);
		}
	}
}