<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
       
        <div class="mt-4" style="display: flex; justify-content: space-between" >
            <a class="btn btn-secondary" href="{{route('user_detail.index')}}">Back</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                Preview Resume
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Preview Resume</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                          <div class="modal-body">
                              <iframe src="{{route('resume.index')}}" width="100%" height="900"></iframe>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <a href="{{route('resume.download')}}" class="btn btn-primary">Download</a>
                          </div>
                      </div>
                  </div>
            </div>
           
         </div>
         <hr>
        <div class="header mt-2">
            <div class="info">
                <h2>{{$user->details->fullname}}</h2>
                <p>Address:  {{$user->details->address}}</p>
                <p>Contact: {{$user->details->phone}}</p>
                <p>Email:  {{$user->details->email}}</p>
            </div>
            <div class="profile">
    
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
                <p>School Name: {{$edu->school_name}}</p>
                <p>School Address: {{$edu->school_location}}</p>
                <p>School Year:  {{$edu->sy_start}} - {{$edu->sy_end}}</p>
            @endforeach
            </div>
        </section>
        <hr>
        <section>
            <div class="experience">
                <h2>Experience</h2>
                @foreach ($user->experiences as $exp)
               
                <p>Job Title: {{$exp->job_title}}</p>
                <p>Employer: {{$exp->employer}}</p>
                <p>Start Date: {{$exp->sy_start}}</p>
                <p>End Date: {{$exp->sy_end}}</p>
                <br>
                @endforeach
                
            </div>
        </section>
        <hr>
        <section>
            <div class="skill">
                <h2>Skills</h2>
                @foreach ($user->skills as $skill)
                <p>Skill Name: {{$skill->name}}</p>
                <p>Rating: {{$skill->rating}}</p>
                @endforeach
               
            </div>
        </section>
        <hr>
       
    </div>
    
</body>
</html>