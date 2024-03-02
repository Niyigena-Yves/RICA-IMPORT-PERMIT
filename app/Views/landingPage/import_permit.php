<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RICA - Import permit</title>

  <style>
    body {
      background-color: #f0f2f5 !important;
    }

    :root {
      --primary-color: rgb(11, 78, 179) !important;
    }

    label {
      display: block;
      margin-bottom: 0.1rem;
      width: 100%;
    }

    input[type="text"],
    input[type="file"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    input[type="number"],
    select,
    textarea {
      display: block !important;
      width: 100% !important;
      padding: 0.7rem !important;
      border: 1px solid #ccc !important;
      border-radius: 0.25rem !important;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus,
    select:focus,
    textarea:focus {
      outline: 1px solid #3B82F6;
      border: none !important;
    }

    input[type="radio"] {
      margin-right: 30px;
    }

    input[type="checkbox"] {
      margin-right: 5px;

    }

    input[type="radio"],
    input[type="checkbox"] {
      transform: scale(1);
    }

    span {
      margin-right: 5px;
    }

    .width-50 {
      width: 50%;
    }

    .ml-auto {
      margin-left: auto;
    }

    .text-center {
      text-align: center;
    }

    .progressbar {
      position: relative;
      display: flex;
      justify-content: space-between;
      counter-reset: step;
      margin: 2rem 0 4rem;
    }

    .progressbar::before,
    .progress {
      content: "";
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      height: 4px;
      width: 100%;
      background-color: #dcdcdc;
      z-index: -1;
    }

    .progress {
      background-color: var(--primary-color);
      width: 0%;
      transition: 0.3s;
    }

    .progress-step {
      width: 2.1875rem;
      height: 2.1875rem;
      background-color: #dcdcdc;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .progress-step::before {
      counter-increment: step;
      content: counter(step);
    }

    .progress-step::after {
      content: attr(data-title);
      position: absolute;
      top: calc(100% + 0.5rem);
      font-size: 0.85rem;
      color: #666;
    }

    .progress-step-active {
      background-color: var(--primary-color);
      color: #f3f3f3;
    }

    .form {
      width: clamp(820px, 40%, 430px) !important;
      font-family: Montserrat, "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;
      margin: 10px auto;
      /* border: 1px solid #ccc; */
      border-radius: 0.35rem;
      padding: 1.5rem 2rem;
    }

    .input-group,
    h2 {
      margin: 1rem 0;
      padding: 0 20px;
    }

    h2 {
      padding: 0 20px;
    }

    @keyframes animate {
      from {
        transform: scale(1, 0);
        opacity: 0;
      }

      to {
        transform: scale(1, 1);
        opacity: 1;
      }
    }

    .btns-group {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 1.5rem !important;
    }

    .btn {
      padding: 0.75rem !important;
      display: block !important;
      text-decoration: none !important;
      background-color: var(--primary-color) !important;
      color: #f3f3f3 !important;
      text-align: center !important;
      border-radius: 0.25rem !important;
      cursor: pointer !important;
      transition: 0.3s !important;
    }

    .btn:hover {
      box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color) !important;
    }

    h2.bold {
      color: #000;
    }

    p.fw_400 {
      font-size: 16px;
    }

    @media screen and (max-width: 768px) {
      .text-center {
        width: 95% !important;
      }

      .small-top {
        margin-top: 5rem !important;

      }

      .progressbar {
        margin-bottom: 1rem !important;
      }

      .progress-step[data-title]::after {
        content: "";
        display: none;
      }

      .form label {
        margin-top: 1rem !important;
      }

      .form {
        width: 100% !important;
      }

      .btns-group {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 10px !important;
        width: 100% !important;
      }

      .btn {
        width: 100% !important;
        margin-top: 10px !important;
      }
    }

    .readonly {
      opacity: 0.5;
    }

    fieldset {
      background-color: #eeeeee;
      border: 1px solid lightblue;
      margin-bottom: 20px;
    }

    legend {
      background-color: lightblue;
      color: #000;
      padding: 5px 10px;
    }
  </style>
</head>

<body class="bg-gray-200">

  <div class="mx-auto small-top" style="width: 70%;">
    <h2 class="bold text-black text-center text-3xl">RICA - Import Permit</h2>
  </div>

  <form class="form" id="" enctype="multipart/form-data" method="POST"
    action="<?= base_url('import_permit_service'); ?>">

    <?php if (!empty(session()->getFlashData('error'))): ?>
      <div class="alert alert-danger">
        <?= session()->getFlashData('error'); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashData('success'))): ?>
      <div class="alert alert-success">
        <?= session()->getFlashData('success'); ?>
      </div>
    <?php endif; ?>

    <fieldset>
      <legend>Business Owner Details</legend>

      <h2>Business Owner Details</h2>
      <div class="input-group">
        <label for="citizenship">Applicant citizenship</label>
        <select name="citizenship" id="citizenship" onchange="toggleInputs()">
          <option value="" disabled selected>Select citizenship</option>
          <option value="Rwandan">Rwandan</option>
          <option value="Foreigner">Foreigner</option>
        </select>
      </div>

      <div class="input-group" id="nidGroup" style="display: none;">
        <label for="nid">Identification document number</label>
        <input type="text" name="nid" placeholder="Enter Identification document number">
      </div>

      <div class="input-group" id="passportGroup" style="display: none;">
        <label for="passport">Passport number</label>
        <input type="text" name="passport">
      </div>

      <div class="input-group">
        <label for="other_names">Other names</label>
        <input type="text" name="other_names" required>
      </div>

      <div class="input-group">
        <label for="surname">Surname</label>
        <input type="text" name="surname" required>
      </div>
      <div class="input-group">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" required>
      </div>

      <div class="input-group">
        <label for="phone">Phone number</label>
        <input type="text" name="phone" placeholder="Enter phone number" required>
      </div>

      <div class="input-group">
        <label for="email">E-mail address</label>
        <input type="text" name="email" placeholder="Enter email address" required>
      </div>
      <h2>Business Address</h2>
      <div class="input-group">
        <label for="location">Location</label>
        <input type="text" name="location" placeholder="District: Enter district" required>
      </div>
    </fieldset>

    <fieldset>
      <legend>Business Details</legend>
      <h2>Business Details</h2>
      <div class="input-group">
        <label for="">Business type</label>
        <select name="business_type">
          <option value="" disabled selected>Enter business type</option>
          <option value="Retailer">Retailer</option>
          <option value="Wholesale">Wholesale</option>
          <option value="Manufacturer">Manufacturer</option>
        </select>
      </div>
      <div class="input-group">
        <label for="company_name">Company name</label>
        <input type="text" name="company_name" required>
      </div>
      <div class="input-group">
        <label for="tin_number">TIN number</label>
        <input type="number" name="tin_number" id="tin_number" placeholder="Enter TIN numbe" required>
      </div>
      <div class="input-group">
        <label for="reg_date">Registration Date</label>
        <input type="date" name="reg_date" placeholder="Select date" required>
      </div>
      <h2>Business Address</h2>
      <div class="input-group">
        <label for="business_location">Location</label>
        <input type="text" name="business_location" required>
      </div>
    </fieldset>

    <fieldset>
      <legend>Product Information</legend>
      <h2>Importation details</h2>
      <div class="input-group">
        <label for="">Purpose of importation</label>
        <select name="purpose" id="purpose" onchange="toggleSpecifyPurpose()">
          <option value="" disabled selected>Select the purpose of importation</option>
          <option value="Direct sale">Direct sale</option>
          <option value="Personal use">Personal use</option>
          <option value="Trial use">Trial use</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="input-group" id="specifyPurposeGroup" style="display: none;">
        <label for="specify_purpose">Specify purpose of importation</label>
        <input type="text" name="specify_purpose" id="specify_purpose">
      </div>
      <h2>Product details</h2>
      <div class="input-group">
        <label for="">Product category</label>
        <select name="product_category">
          <option value="" disabled selected>Select Product category</option>
          <option value="General purpose">General purpose</option>
          <option value="Construction materials"> Construction materials</option>
        </select>
      </div>
      <div class="input-group">
        <label for="product_name">Product name</label>
        <input type="text" name="product_name" placeholder=" Enter product name" required>
      </div>
      <div class="input-group">
        <label for="weight">Weight</label>
        <input type="text" name="weight" required>
      </div>
      <div class="input-group">
        <label for="description">Description of products</label>
        <textarea name="description" id="" cols="30"></textarea>
        <!-- <input type="text" name="description" required> -->
      </div>
      <div class="input-group">
        <label for="">Unit of measurement</label>
        <select name="measurement">
          <option value="" disabled selected> Enter unit of measurement</option>
          <option value="Kgs">Kgs</option>
          <option value="Tonnes">Tonnes</option>
        </select>
      </div>
      <div class="input-group">
        <label for="quantity">Quantity of product(s)</label>
        <input type="number" name="quantity" id="quantity" placeholder="Enter quantity" required min="1">
      </div>
    </fieldset>

    <div class="btns-group">
      <input type="submit" value="Submit Application" class="btn btn-submit">
    </div>
    </div>
  </form>

  <script>
    function toggleInputs() {
      var citizenship = document.getElementById("citizenship").value;
      var nidGroup = document.getElementById("nidGroup");
      var passportGroup = document.getElementById("passportGroup");

      if (citizenship === "Rwandan") {
        nidGroup.style.display = "block";
        passportGroup.style.display = "none";
      } else if (citizenship === "Foreigner") {
        nidGroup.style.display = "none";
        passportGroup.style.display = "block";
      } else {
        nidGroup.style.display = "none";
        passportGroup.style.display = "none";
      }
    }
  </script>
  <script>
    function toggleSpecifyPurpose() {
      var purposeSelect = document.getElementById("purpose");
      var specifyPurposeGroup = document.getElementById("specifyPurposeGroup");
      var specifyPurposeInput = document.getElementById("specify_purpose");

      if (purposeSelect.value === "Other") {
        specifyPurposeGroup.style.display = "block";
        specifyPurposeInput.required = true;
      } else {
        specifyPurposeGroup.style.display = "none";
        specifyPurposeInput.required = false;
      }
    }
  </script>
  <script>
    document.getElementById("tin_number").addEventListener("input", function () {
      var inputValue = this.value.trim();
      var isValid = /^\d{9}$/.test(inputValue);

      if (!isValid) {
        this.setCustomValidity("TIN number must be a 9-digit number");
      } else {
        this.setCustomValidity("");
      }
    });
  </script>

</body>

</html>