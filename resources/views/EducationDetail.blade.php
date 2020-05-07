<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ asset('user/addEducationalDetails') }}">
        <span>Fill in your Education Details</span>
        <div class="EducationalInstitute">
            <span>Institute Name: </span>
            <input type="text" name="institute">
        </div>
        <div class="EducationalDegree">
            <span>Degree: </span>
            <input type="text" name="degree">
        </div>
        <div class="StartedDate">
            <span>Started At: </span>
            <input type="text" name="started_date">
        </div>
        <div class="EndDate">
            <span>End At: </span>
            <input type="text" name="end_date">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <button>Continue</button>
        
    </form>
</body>
</html>