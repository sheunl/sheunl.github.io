@include('templates.head')

        
        <div id="banner-bg">
            <div class="banner">
            Hi there!
            </div>
            <div class="banner-text"> I am Abdulrasaq. I am a software developer. You can find some of my work on this website and the links provided. </div>
            <div class="projects-action-div">
                <a href="/projects">
                <button class="projects-action">Projects</button>
                </a>
            </div>
        </div>

        <div class="section" id="tools">
            <h2>
                PLATFORMS & TOOLS
            </h2>
            <ol class="tools-list center h-lists">
                <li>PHP</li>
                <li>C</li>
                <li>Laravel</li>
                <li>WordPress</li>
                <li>Tailwind</li>
                <li>AlpineJS</li>
                <li>Javascript</li>
                <li>Livewire</li>
            </ol>
        </div>

        <div class="section" id="projects">
            <h2>
                PROJECTS
            </h2>
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
                                @foreach ($ap[3] as $key=>$links)
                                <a href="{{$links}}">{{$key}}</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </ol>
        </div>

        <div class="section " id="contact">
            <h2>
                CONTACT
            </h2>
           
            <ul class="center contact-list h-lists" id="contactz">
                <li><a href="https://twitter.com/zaqtl" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://github.com/sheunl" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://stackoverflow.com/users/7276300/abdulrasaq" target="_blank"><i class="fa-brands fa-stack-overflow"></i></a></li>
                <li id="dot">&nbsp;</li>
                <li><a href="https://www.linkedin.com/in/ao-lawani/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://www.instagram.com/zaqlabs/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    

@include('templates.foot')