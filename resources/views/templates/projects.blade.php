<div class="section" id="projects">
    <h2>
        PROJECTS
    </h2>
    <ol class="projects-list center v-lists">
        
        <div class="project-cards">
        @foreach ($projects as $project)
            <div class="a-card">
                <div class="card-image">
                    <img src="/static/images/projects/{{$project['logo']}}" alt="" srcset="" width="100%">
                </div>
                <div class="card-items">
                    <h3 class="card-title">
                        {{$project['title']}}
                    </h3>
                    <p class="card-text">
                        {{$project['desc']}}
                    </p>
                    <p class="card-links">
                        @foreach ($project['links'] as $name=>$links)
                        <a href="{{$links}}">{{$name}}</a>
                        @endforeach
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        
    </ol>
</div>
