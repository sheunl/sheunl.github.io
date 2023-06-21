@include('templates.head')

<div class="section" id="projects">
            <h2>
                PROJECTS
            </h2>
            <p>&nbsp;</p>
            <ol class="projects-list center v-lists">
            
                <div class="project-cards">
                @foreach ($p as $ap)
                    <div class="a-card">
                        <div class="card-image">
                            <img src="/static/images/projects/{{$ap[0]}}" alt="" srcset="" width="100%">
                        </div>
                        <div class="card-items">
                            <h3 class="card-title">
                                {{$ap[1]}}
                            </h3>
                            <p class="card-text">
                                {{$ap[2]}}
                            </p>
                            <p class="card-links">
                                @foreach ($ap[3] as $key => $value )
                                <a href="{{$value}}">{{$key}}</a> 
                                @endforeach
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </ol>
        </div>


@include('templates.foot')
