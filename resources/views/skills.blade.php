<html>
    <head>
        <title>Skills</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
  <script>
      $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
       
        var x = 1; //initlal text box count
      
      
       $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; 
             //text box increment
                $(wrapper).append('<div><textarea class="form-control" rows="5" id="description" name="description[]"></textarea><a href="#" class="remove_field"><button class="btn btn-danger">Remove</button></a></div>'); //add description box
               
        }
        });
       
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
           
        e.preventDefault(); 
        $(this).parent('div').remove(); 
        x--;
        })
    });
  </script>
  <body>
    <div class="container">
    <h2>Skills</h2>
    <form action="/skills.php" method="post">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
      <div class="form-group">
        <div class="input_fields_wrap">
          <label for="description">Description:</label>
          <textarea class="form-control" rows="5" id="description" name="description[]"></textarea>
        </div>
      <button class=" add_field_button btn btn-success">Add More Fields</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>