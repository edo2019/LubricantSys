@extends('layouts.myapp')

@section('content')

<body>
    <div class="container">
        <div class="card mx-auto" style="width: 800px;">
            <div class="card-body">

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

</div>
</div>
</div>
</body>
@endsection
