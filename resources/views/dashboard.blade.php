@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <hr>
                    
                          @if ($details)
                              <div class="mb-4">
                                 <h4>{{$details->fullname}}</h4> 
                                 <p> {{$details->phone}}
                                    <br>
                                     {{$details->address}}
                                     <br>
                                    {{$details->email}}</p>
                              </div>
                              <hr>
                            <div style="display: flex; justify-content:space-between">
                              <a href="{{route('user_detail.index')}}" class="btn btn-sm btn-success">View Data</a>
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
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
                            
                          @else
                              <P>No Info Found</P>
                              <a href="user_detail/create" class="btn btn-sm btn-success">Create Resume</a>
                          @endif
                     </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
