<!DOCTYPE html>
<html>
    <head>
        <style>
            label
            {
                font-size: 25px;
            }
           
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:skyblue;
}

* {
  box-sizing: border-box;
}


input[type=text], textarea,input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
font-size: 20px;
}

input[type=text]:focus,textarea:focus,input[type=tel]:focus{
  background-color: #ddd;
  outline: none;
  
}


textarea
{
    resize: none;
}


button {
    background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size: 25px;
  
}
form{
    padding-left:20px;
    padding-right:20px;
    
}
</style>
       
    </head>
    <body>
        <div style="height:100px;"></div>
<div>
        <div style="width:300px;float:left;height:560px"></div>

<div style="width500px;float:left;border:solid green" >
    <h1 style="text-align:center;font-size:50px">User profile</h1>
        <form action="{{ route('userprofile') }}" method="POST">
            @csrf
          
            <label for="Contact">Contact:</label><br>
            <input type="tel" id="Contact" name=Contact size="60" placeholder="Contact (Format: 123-456-7890)" autocomplete="off"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
            
           
            
                <label for="Address">Address:</label><br>
                <input type="text" id="Address" name=Address size="60" placeholder="Address" autocomplete="off" maxlength="20" pattern="[A-Za-z]{5,},[A-Za-z]{5,}" ><br>
                
                
                    <label for="Bio">Bio:</label><br>
                <textarea id="Bio" name="Bio" cols="60" rows="4" placeholder="Write Something About You"></textarea><br>
                @error('Contact') {{$message}} @enderror<br>
                @error('Address') {{$message}} @enderror<br>
                 @error('Bio') {{$message}} @enderror
            <div style="text-align:center"> <button type="Submit" id="signin">Submit</button></div>
          </form>
          
          
</div>
<div style="width:200px;float:left;height:560px"></div>
</div>
    </body>
</html>