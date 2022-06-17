@section('experience')
<div id="C5">
   <h3 class="display-6 fw-bold" style="text-align: center; margin-bottom: 50px; margin-top: 100px;">Job experience</h3>
   <ul id="job_history">
      @if($experiences->count())
      @foreach($experiences as $experience)
      <li>
         <h5 style="font-weight: bold; margin-left: 70px;">{{ $experience -> title }}</h5>
         <div class="circle"></div>
         <div class="triangle"></div>
         <div class="moment_box">
		 {{ $experience -> time_period }}
         </div>
         <div class="moment_box company">
		 {{ $experience -> description }}
         </div>
         <div class="moment_box position">
		 {{ $experience -> major }}
         </div>
      </li>
      @endforeach
      @else
      <p>technology stack;
software engineering;
English language;
UNIX n Linux;
integrated development environment;
version control;
fundamentals of computer networks;
blockchain;
UX design;
cloud technologies;
sorting algorithms;
unit testing;
debugging the program;
design patterns.</p>
      @endif
   </ul>
</div>
