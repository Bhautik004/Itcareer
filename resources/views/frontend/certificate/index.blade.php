<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$data->student_name}}</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
      #header, #nav, .noprint
      {
      display: none;
      }
       .table>tbody>tr>.no-line {
            border-top: none;
        }

        .table>thead>tr>.no-line {
            border-bottom: none;
        }

        .table>tbody>tr>.thick-line {
            border-top: 2px solid;
        }
    </style>
</head>
<body>

<div class="container mt-3">          
  <p><img src="/certificate_img/2.png"  alt="" width="100%" height="200px"></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="5" class="text-center">Student Verification</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="13"><img src="/certificate_img/{{$data->photo_name}}" width="150px" height="200px" alt=""></td>
        <td>Registration No : </td>
        <td>{{$data->register_no}}</td>
      </tr>
      <tr>
        <td>Student Name : </td>
        <td>{{$data->student_name}}</td>
      </tr>
      <tr>
        <td>Son of / Daughter of / Wife of : </td>
        <td>{{$data->son_of_dauther_of_wife_of}}</td>
      </tr>
      <tr>
        <td>Center Name : </td>
        <td>{{$data->center_name}}</td>
      </tr>
      <tr>
        <td>Center Address : </td>
        <td>{{$data->center_address}}</td>
      </tr>
      <tr>
        <td>Area : </td>
        <td>{{$data->area}}</td>
      </tr>
      <tr>
        <td>Center District :  </td>
        <td>{{$data->center_district}}</td>
      </tr>
      <tr>
        <td>Exam Date : </td>
        <td>{{$data->exam_date}}</td>
      </tr>
        
      <tr>
        <td>Certificate Issue :  </td>
        <td>YES</td>
      </tr>

      <tr>
        <td>Issue Date :  </td>
        <td>{{$data->issue_date}}</td>
      </tr>
      <tr>
        <td>Certificate No :  </td>
        <td>{{sprintf('%04d', $data->certificate_no);}}</td>
      </tr>
      <tr>
        <td>Grade :</td>
        <td>{{$data->grade}}</td>
      </tr>
      
    </tbody>
  </table>
  <p class="fw-bold">Note : Student Verification print does not required Signature.</p>
  <div class="text-end">
    <img src="/web_img/verify_img.png" alt="" width="150px" height="150px">
</div>
</div>

<script>
    $(document).ready(function()
    {
       window.print();   
       onafterprint = function () {
                window.location.href = "/";
        } 
    });
</script>

</body>
</html>
