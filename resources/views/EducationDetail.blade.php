<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<form method="post" id="dynamic_form" action="{{ asset('user/addEducationalDetails') }}">
                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
              <thead>
               <tr>
                   <th width="20%">Institute Name:</th>
                   <th width="20%">Degree/ Academic Qualification:</th>
                   <th width="20%">Attended Date::</th>
                   <th width="20%">Graduation Date:</th>

                   <th width="30%">Action</th>
               </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
               <tr>
                               <td colspan="2" align="right">&nbsp;</td>
                               <td>
                 @csrf
                 <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                </td>
               </tr>
            </thead>
          </table>
               </form>
   
    {{-- <form method="POST" action="{{ asset('user/addEducationalDetails') }}">
        <div id="sections">
          <div class="section">
            <fieldset>
                <legend>Input your Education Details</legend>
                <p>
                    <label for="EducationalInstitute">Institute Name:</label>
                    <input name="institute" id="institute" value="" type="text" />
                </p>
                <p>
                    <label for="EducationalDegree">Degree/ Academic Qualification:</label>
                    <input name="degree" id="degree" value="" type="text" />
                </p>
                <p>
                    <label for="StartedDate">Attended Date:</label>
                    <input name="started_date" id="started_date" value="" type="text" placeholder="Type 'In Progress' id not completed"/>
                </p>
                <p>
                    <label for="EndDate">Graduation Date:</label>
                    <input name="end_date" id="end_date" value="" type="text" />
                </p>
                {{-- <p><a href="#" class='remove'>Remove Section</a></p> --}}
               
            {{-- </fieldset>
            <button type="submit">Add</button>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>        
        <p><a href="#" class='addsection'>Add Section</a></p>
        </form>     --}} 

</body>
</html>
<script>
    $(document).ready(function(){
    
     var count = 1;
    
     dynamic_field(count);
    
     function dynamic_field(number)
     {
      html = '<tr>';
            html += '<td><input type="text" name="institute[]" class="form-control" /></td>';
            html += '<td><input type="text" name="degree[]" class="form-control" /></td>';
            html += '<td><input type="text" name="started_date[]" class="form-control" /></td>';
            html += '<td><input type="text" name="end_date[]" class="form-control" /></td>';
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                $('tbody').html(html);
            }
     }
    
     $(document).on('click', '#add', function(){
      count++;
      dynamic_field(count);
     });
    
     $(document).on('click', '.remove', function(){
      count--;
      $(this).closest("tr").remove();
     });
    
     $('#dynamic_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url:"{{ asset('/user/addEducationalDetails') }}",
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#save').attr('disabled','disabled');
                },
                success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>'+data.error[count]+'</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                    }
                    else
                    {
                        dynamic_field(1);
                        $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                    }
                    $('#save').attr('disabled', false);
                }
            })
     });
    
    });
    </script>
    