<style>
    .landing{
     
    }
  .right{
        display: flex;
        flex-direction: column;
        height: 90vh;
        width: 100%;
        align-items: center;
        justify-content: center;
        background-image: url(img/bg.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
      
    }
    .right h1{
        font-weight: 600
    }
    .right h5{
        font-weight: 200;
    }
    
    .right .btn{
        background: #fa5a45;
        color: #ffff;
        transition: all ease-in-out 0.5s;
        cursor: pointer;
    }
    .right .btn:hover{
        color: #ffff;
        opacity: 75%;
    }
    
    

</style>

@extends('layouts.app')
@section('content')
<section>
    
    
       
        <div class="right">
         
            <h1>Welcome to Resume Builder</h1>
            <h5>Build resume Easier and Faster</h5>

            <a href="user_detail/create" class="btn btn-lg">Build Resume</a>
       </div>
       
       
   
   
</section> 
@endsection
