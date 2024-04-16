@extends('layouts.myapp')

@section('content')
<body>
    <div class="container">
        <div class="card mx-auto" style="width: 800px;">
            <div class="card-body">
             

                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <h5 style="text-align: center;">A. COMPANY DETAILS</h5>
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

                            
                                <!-- Add options for regions -->
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
                            <input type="number" class="form-control" id="telephone" name="telephone">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>




                        <!--naongeza hapa-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                    
            </div>
        </div>
    </div>
</body>
@endsection
