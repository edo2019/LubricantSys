@extends('layouts.myapp')

@section('content')
<body>
    <div class="container">
        <div class="card mx-auto" style="width: 800px;">
            <div class="card-body">
             
                    
                    <!-- CSRF Protection -->
                 <!--   <h5 style="text-align: center;">A. COMPANY DETAILS</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ewuraLicense">EWURA Lubricant Wholesale Licence:</label>
                            <select class="form-control" id="ewuraLicense" name="license">
                                <option value="licensed">Licensed</option>
                                <option value="notLicensed">Not Licensed</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyName">Name of the Company:</label>
                            <input type="text" class="form-control" id="companyName" name="company_Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="region">Region:</label>
                            <select class="form-control" id="region" name="region">

                            -->
                                <!-- Add options for regions 
                                <option value="region1">Select Region</option>
                                <option value="region2">Dodoma</option>
                                <option value="region3">Mwanza</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="address">P.O.BOX:</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telephone">Telephone:</label>
                            <input type="text" class="form-control" id="telephone" name="telephone">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <h5 style="text-align: center;">B.DETAILS OF THE CONTACT PERSON</h5>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contactPersonName">Name:</label>
                            <input type="text" class="form-control" id="person_name" name="person_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contactPersonTitle">Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contactPersonPOBox">P.O Box:</label>
                            <input type="text" class="form-control" id="address2" name="address2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contactPersonCellPhone">Cell Phone:</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contactPersonAltPhone">Alternative Phone:</label>
                            <input type="tel" class="form-control" id="altern_phone_Number" name="altern_phone_Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contactPersonEmail">Email:</label>
                            <input type="email" class="form-control" id="email2" name="email2">
                        </div>
                    </div>
                    <h5 style="text-align: center;">C. LUBRICANT DETAILS</h5>
                    <div class="form-group">
                        <label for="lubricantTable">Lubricant Details:</label>
                        <table class="table" id="lubricantTable">
                            <thead>
                                <tr>
                                    <th>S/No</th>
                                    <th name>Lubricant Name</th>
                                    <th>Lubricant Type</th>
                                    <th>Lubricant Performance Level</th>
                                    <th>Lubricant Brand </th>
                                    <th>No & Certification Name</th>
                                </tr>
                            </thead>
                            <tbody>

                            -->
                                <!-- Dynamically add rows for lubricant details 
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" id="addLubricantRow">Add Lubricant</button>
                    </div>

                    -->
                    <!-- D. SUPPORTING DOCUMENTS 

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 style="text-align: center;">D. SUPPORTING DOCUMENTS</h5>
                        <table class="table" name="doc_table" style="margin: 0 auto;">
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
                                    <td><input type="text" class="form-control" name="number_NameOfCertification"></td>
                                    <td><input type="file" class="form-control-file" name="attachment"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" class="form-control" name="number_NameOfCertification2"></td>
                                    <td><input type="file" class="form-control-file" name="Attachment2"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" class="form-control" name="number_NameOfCertification3"></td>
                                    <td><input type="file" class="form-control-file" name="Attachment3"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" class="form-control" name="number_NameOfCertification4"></td>
                                    <td><input type="file" class="form-control-file" name="Attachment4"></td>
                                </tr>
                           
                            </tbody>
                        </table>
                      

                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                       -->
                       @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif

                       <form method="POST" action="{{ route('submit_form_route') }}" enctype="multipart/form-data">
                        @csrf

                        <table class="table" name="doc_table" style="margin: 0 auto;">
                            <thead>
                                <tr>
                                    <th>S/No</th>
                                    <th>No & Name of Certification</th>
                                    <th>Upload Certification</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 4; $i++)
                           <tr>
                            <td>{{ $i }}</td>
                            <td><input type="text" class="form-control" name="certification[]"></td>
                            
                            
                            <td>

                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <input type="file" id="file" class="form-control-file @error('file') is-invalid @enderror" name="file[]">

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </td>
                           </tr>

                           @endfor
                            </tbody>
                        </table>

                        <!--naongeza hapa-->
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>
    </div>
</body>
@endsection
