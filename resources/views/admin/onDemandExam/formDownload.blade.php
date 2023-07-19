<!DOCTYPE html>
<html  lang="" xml:lang="">
  <head>
    <title>{{$data['m_name']}} Exam Form</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <br />
    <style type="text/css">
     #header, #nav, .noprint
      {
      display: none;
      }
	*{
		margin: 0 auto;
		background-color: white;
	}
	#page1-div{
    border-style: solid;
    border-color: black;
	border-width: 1px;
	}
      p {
        margin: 0;
        padding: 0;
      }
      .ft10 {
        font-size: 19px;
        font-family: Helvetica;
        color: #000000;
      }
      .ft11 {
        font-size: 16px;
        font-family: Helvetica;
        color: #000000;
      }
      .ft12 {
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
        color: #000000;
      }
      .ft13 {
        font-size: 16px;
        font-family: Helvetica;
        color: #000000;
      }
      .ft14 {
        font-size: 13px;
        line-height: 15px;
        font-family: Helvetica;
        color: #000000;
      }
    </style>
  </head>
  <body bgcolor="#A0A0A0" vlink="blue" link="blue" style="text-align: center;" >
    <div
      id="page1-div"
      style="position: relative; width: 892px; height: 1180px"
    >
      <img
        width="850"
        height="150"
        src="/certificate_img/2.png"
        alt="background image"
		style="margin-top: 10px;"
      />
      <p
        style="position: absolute; top: 193px; left: 353px; white-space: nowrap"
        class="ft10"
      >
        <b>ADMISSION FORM</b>
      </p>
      <p
        style="position: absolute; top: 223px; left: 301px; white-space: nowrap"
        class="ft11"
      >
        <b>This is Computer Generated Copy</b>
      </p>
      <p
        style="position: absolute; top: 266px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Form No :
      </p>
	  <img src="/images/{{$data['profile_pic']}}" width="150" height="200" style="margin-left: 65%; margin-top: 5%;">
      <p
        style="position: absolute; top: 266px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['register_no']}}
      </p>
      <p
        style="position: absolute; top: 299px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Admission Date :
      </p>
      <p
        style="position: absolute; top: 299px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['created_at']}}
        
      </p>
      <p
        style="position: absolute; top: 332px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Center Name :
      </p>
      <p
        style="position: absolute; top: 332px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['branch_name']['name']}}
        
      </p>
      <p
        style="position: absolute; top: 400px; left: 356px; white-space: nowrap"
        class="ft10"
      >
        <b>:- Student Detail :-</b>
      </p>
      <p
        style="position: absolute; top: 429px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Surname :
      </p>
      <p
        style="position: absolute; top: 429px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['f_name']}}
      </p>
      <p
        style="position: absolute; top: 462px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Name :
      </p>
      <p
        style="position: absolute; top: 462px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['m_name']}}
      </p>
      <p
        style="position: absolute; top: 495px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Son of / Daughter of /<br />Wife of :
      </p>
      <p
        style="position: absolute; top: 495px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['l_name']}}
      </p>
      <p
        style="position: absolute; top: 543px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Birth Date :
      </p>
      <p
        style="position: absolute; top: 543px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['dob']}}
      </p>
      <p
        style="position: absolute; top: 576px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Course Name :
      </p>
      <p
        style="position: absolute; top: 576px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['course_name']['name']}}
      </p>

      <p
        style="position: absolute; top: 642px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Address :
      </p>
      <p
        style="position: absolute; top: 642px; left: 251px; white-space: nowrap"
        class="ft12"
      >
       {{$data['address']}}
      </p>
      <p
        style="position: absolute; top: 675px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        City :
      </p>
      <p
        style="position: absolute; top: 675px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['city']}}
      </p>
      <p
        style="position: absolute; top: 708px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Pin Code :
      </p>
      <p
        style="position: absolute; top: 708px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['pincode']}}
      </p>
      <p
        style="position: absolute; top: 741px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Mobile No :
      </p>
      <p style="position: absolute; top: 741px; left: 251px; white-space: nowrap" class="ft12" >
        {{ $data['phone'] }}
      </p>
      <p
        style="position: absolute; top: 774px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        E-mail Address :
      </p>
      <p
        style="position: absolute; top: 771px; left: 251px; white-space: nowrap"
        class="ft12"
      >
        {{$data['email']}}
      </p>
      <p
        style="position: absolute; top: 822px; left: 127px; white-space: nowrap"
        class="ft12"
      >
        Qualification
      </p>
      <p
        style="position: absolute; top: 822px; left: 314px; white-space: nowrap"
        class="ft12"
      >
        School/Board/University
      </p>
      <p
        style="position: absolute; top: 822px; left: 574px; white-space: nowrap"
        class="ft12"
      >
        Passing Year
      </p>
      <p
        style="position: absolute; top: 822px; left: 704px; white-space: nowrap"
        class="ft12"
      >
        %age/Grade
      </p>
      <p
        style="position: absolute; top: 855px; left: 110px; white-space: nowrap"
        class="ft12"
      >
        {{$data['last_qualification']}}
      </p>
      <p
        style="position: absolute; top: 855px; left: 320px; white-space: nowrap"
        class="ft12"
      >
       {{$data['board_name']}}
      </p>
      <p
        style="position: absolute; top: 855px; left: 600px; white-space: nowrap"
        class="ft12"
      >
        {{$data['passing_year']}}
      </p>
      <p
        style="position: absolute; top: 855px; left: 730px; white-space: nowrap"
        class="ft12"
      >
        {{$data['percentage']}}
      </p>
      <p
        style="position: absolute; top: 909px; left: 250px; white-space: nowrap; text-align: center"
        class="ft12"
      >
        DECLARATION BY THE APPLICANT &amp; PARENT/GUARDIAN
      </p>
      <p
        style="position: absolute; top: 951px; left: 103px; white-space: nowrap"
        class="ft12"
      >
        We have read all the rules &amp; regulation of the institute. We declare
        that all the information given by us is
      </p>
      <p
        style="position: absolute; top: 966px; left: 102px; white-space: nowrap"
        class="ft12"
      >
        true and correct as per our knowledge. If any of this is incorrect then
        all the liability is of Applicant and of
      </p>
      <p
        style="position: absolute; top: 981px; left: 124px; white-space: nowrap"
        class="ft12"
      >
        Parent/Gaurdian. I also understand that this admission will be not
        cancelled or transferable in any
      </p>
      <p
        style="position: absolute; top: 996px; left: 414px; white-space: nowrap"
        class="ft12"
      >
        condition.
      </p>
      <p
        style="position: absolute; top: 1109px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        ----------------------------
      </p>
      <p
        style="
          position: absolute;
          top: 1109px;
          left: 326px;
          white-space: nowrap;
        "
        class="ft12"
      >
        ------------------------------------------
      </p>
      <p
        style="
          position: absolute;
          top: 1109px;
          left: 651px;
          white-space: nowrap;
        "
        class="ft12"
      >
        -----------------------------
      </p>
      <p
        style="position: absolute; top: 1130px; left: 97px; white-space: nowrap"
        class="ft12"
      >
        Center Seal &amp; Sign
      </p>
      <p
        style="
          position: absolute;
          top: 1130px;
          left: 334px;
          white-space: nowrap;
        "
        class="ft12"
      >
        Signature of Parent/Guardian
      </p>
      <p
        style="
          position: absolute;
          top: 1130px;
          left: 649px;
          white-space: nowrap;
        "
        class="ft12"
      >
        Signature of Applicant
      </p>
    </div>
  </body>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

  <script>
    $(document).ready(function()
    {
       window.print();   
       onafterprint = function () {
                window.location.href = "/admin/onDemandExams";
        } 
    });
</script>
</html>
