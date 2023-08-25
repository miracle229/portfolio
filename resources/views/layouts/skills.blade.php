@extends('layouts.app')

@section('content')
<div id="skills" class="skills container-fluid">
    <div class="row">
        <div class="col-md-6 skii-div tech-skill">
            <div class="title">
                <h2>Technical Skill</h2>
                <p>There are many variations available but the majority</p>
            </div>
            
            <ul>
                <li>
                    <label for="">UI/UX Designer</label>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                </li>
                 <li>
                    <label for="">JavaScript</label>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                </li>
                 <li>
                    <label for="">HTML5</label>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                </li>
                 <li>
                    <label for="">PHP / MYSQL</label>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                </li>
                 
            </ul>
        </div>
        <div class="col-md-6 skii-div pro-skill">
            <div class="title">
                <h2>Technical Skill</h2>
                <p>Professional Skills</p>
            </div>
             <ul>
                <li>
                    <label for="">Photoshop</label>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                 <li>
                    <label for="">Illustrator</label>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                 <li>
                    <label for="">AngularJS</label>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                 <li>
                    <label for="">PHP</label>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div> 
@endsection