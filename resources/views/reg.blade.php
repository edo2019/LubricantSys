@extends('layouts.myapp')

@section('content')
<body>
    <div class="container">
        <div class="card mx-auto" style="width: 800px;">
            <div class="card-body">
    <form>
      <h5 style="text-align: center;">A. COMPANY DETAILS</h5>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="ewuraLicense">EWURA Lubricant Wholesale Licence:</label>
        <select class="form-control" id="ewuraLicense">
          <option value="licensed"></option>
          <option value="licensed">Licensed</option>
          <option value="notLicensed">Not Licensed</option>
        </select>
      </div>

          <div class="form-group col-md-6">
            <label for="companyName">Name of the Company:</label>
            <input type="text" class="form-control" id="companyName" readonly>
          </div>
          <div class="form-row">
        <div class="form-group col-md-3">
          <label for="region">Region:</label>
          <select class="form-control" id="region">
            <!-- Add options for regions -->
            <option value="region1">Select Region</option>
            <option value="region2">Dodoma</option>
            <option value="region3">Mwanza</option>
          </select>
        </div>

        <div class="form-group col-md-3">
           <label for="block">Block:</label>
        <input type="text" class="form-control" id="block">
      </div>

      <div class="form-group col-md-3">
          <label for="block">P.O.BOX:</label>
        <input type="text" class="form-control" id="block">
      </div>

      <div class="form-group col-md-3">
        <label for="block">Telephone:</label>
      <input type="text" class="form-control" id="block">
    </div>

          </div>
          <div class="form-group col-md-12">
            <label for="block">Email:</label>
          <input type="email" class="form-control" id="email">
        </div>
        </div>
        <h5 style="text-align: center;">B.DETAILS OF THE CONTACT PERSON</h5>

<div class="row">
<div class="form-group col-md-6">
  <label for="contactPersonName">Name:</label>
  <input type="text" class="form-control" id="contactPersonName">
</div>
<div class="form-group col-md-6">
  <label for="contactPersonTitle">Title:</label>
  <input type="text" class="form-control" id="contactPersonTitle">
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
  <label for="contactPersonPOBox">P.O Box:</label>
  <input type="text" class="form-control" id="contactPersonPOBox">
</div>
<div class="form-group col-md-6">
  <label for="contactPersonCellPhone">Cell Phone:</label>
  <input type="tel" class="form-control" id="contactPersonCellPhone">
</div>
</div>

<div class="row">
  <div class="form-group col-md-6">
  <label for="contactPersonAltPhone">Alternative Phone:</label>
  <input type="tel" class="form-control" id="contactPersonAltPhone">
</div>
<div class="form-group col-md-6">
  <label for="contactPersonEmail">Email:</label>
  <input type="email" class="form-control" id="contactPersonEmail">
</div>

<h5 style="text-align: center;">C. LUBRICANT DETAILS</h5>
<div class="form-group">
  <label for="lubricantTable">Lubricant Details:</label>
  <table class="table" id="lubricantTable">
    <thead>
      <tr>
        <th>S/No</th>
        <th>Lubricant Name</th>
        <th>Lubricant Type</th>
        <th>Lubricant Performance Level</th>
        <th>Lubricant Brand </th>
        <th>No & Certification Name</th>
      </tr>
    </thead>
    <tbody>
      <!-- Dynamically add rows for lubricant details -->
    </tbody>
  </table>
  <button type="button" class="btn btn-primary" id="addLubricantRow">Add Lubricant</button>
</div>

  <!-- D. SUPPORTING DOCUMENTS -->
  <h5 style="text-align: center;">D. SUPPORTING DOCUMENTS</h5>
  <table class="table" style="margin: 0 auto;">
      <thead>
          <tr>
              <th>S/No</th>
              <th>No & Name of Certification</th>
              <th>Upload Certification</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td><input type="text" class="form-control" name="certification_name[]"></td>
              <td><input type="file" class="form-control-file" name="certification_file[]"></td>
          </tr>

          <tr>
              <td>2</td>
              <td><input type="text" class="form-control" name="certification_name[]"></td>
              <td><input type="file" class="form-control-file" name="certification_file[]"></td>
          </tr>

          <tr>
              <td>3</td>
              <td><input type="text" class="form-control" name="certification_name[]"></td>
              <td><input type="file" class="form-control-file" name="certification_file[]"></td>
          </tr>
      </tbody>
  </table>


       
<div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
       
      </form>
            </div> 
        </div>     
</body>

@endsection