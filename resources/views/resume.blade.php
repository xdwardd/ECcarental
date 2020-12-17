<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="info">
                <h2>{{$user->details->fullname}}</h2>
                <p> <span style="font-weight: bolder; padding-right:1rem">Address:</span>  {{$user->details->address}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">Contact:</span> {{$user->details->phone}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">Email:</span>  {{$user->details->email}}</p>
            </div>
            
        </div>

        <section>
            <div class="objective">
                <h2>Objective</h2>
                <p>{{$user->details->objective}}</p>
            </div>  
        </section>
        <hr>
        
        <section>
            <div class="education">
                <h2>Education</h2>
                @foreach ($user->education as $edu)
                
                <p>
                    <span style="font-weight: bolder; padding-right:1rem">School Name:</span>  {{$edu->school_name}}</p>
                <p>
                    <span style="font-weight: bolder; padding-right:1rem">School Address:</span>  {{$edu->school_location}}</p>
                <p>
                    <span style="font-weight: bolder; padding-right:1rem">School Year:</span>   {{$edu->sy_start}} - {{$edu->sy_end}}</p>
                <br>
                @endforeach
            </div>
        </section>
        <hr>
        <section>
            <div class="experience">
                <h2>Experience</h2>
                @foreach ($user->experiences as $exp)
               
                <p> <span style="font-weight: bolder; padding-right:1rem">Job Title:</span>{{$exp->job_title}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">Employer:</span> {{$exp->employer}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">Start Date:</span> {{$exp->start_date}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">End Date:</span> {{$exp->end_date}}</p>
                <br>
                @endforeach
                
            </div>
        </section>
        <hr>
        <section>
            <div class="skill">
                <h2>Skills</h2>
                @foreach ($user->skills as $skill)
                <p> <span style="font-weight: bolder; padding-right:1rem">Skill Name:</span> {{$skill->name}}</p>
                <p> <span style="font-weight: bolder; padding-right:1rem">Skill Rating:</span>{{$skill->rating}}</p>
                <br>
                @endforeach
               
            </div>
        </section>
        <hr>
       
    </div>
    
</body>
</html>
