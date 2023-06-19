@include('templates.head')
<div id="main">
            <nav id="navmenu">
                <div class="logo">
                    <img src="/static/images/Zaqlabs_logo_s.png" alt="" srcset="" width="100%">
                </div>
                <div class="content">
                    <a href="https://blog.zaqlabs.com/" target="_blank">
                        Blog
                    </a>
                    <a href="https://www.youtube.com/@zaql" target="_blank">
                        Videos
                    </a>
                    <a href="#contact">
                        Contact
                    </a>

                    <ul class="center contact-list h-lists nav-contact" id="contactz">
                        <li><a href="https://twitter.com/zaqtl" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li id="dot">&nbsp;</li>
                        <li><a href="https://github.com/sheunl" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li id="dot">&nbsp;</li>
                        <li><a href="https://www.linkedin.com/in/ao-lawani/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li id="dot">&nbsp;</li>
                        <li><a href="https://www.instagram.com/zaqlabs/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div id="resp-ham">
                    <i class="fa-regular fa-bars"></i>
                </div>
            </nav>
        
        <div id="banner-bg">
            <div class="banner">
                Abdulrasaq Lawani
            </div>
            <div class="banner-text">I build software to solve problems for businesses and developers on Web & OS.</div>
            <div class="projects-action-div">
                <a href="#projects">
                <button class="projects-action">Projects</button>
                </a>
            </div>
        </div>

        <div class="section" id="projects">
            <h2>
                PROJECTS
            </h2>
            <ol class="projects-list center v-lists">
                <li>Great Projects Coming Up</li>
            </ol>
        </div>

        <div class="section " id="contact">
            <h2>
                CONTACT
            </h2>
            <p>Send me an email</p>
            <form action="" id="contact-form">
                <input type="text" name="name" id="" placeholder="Name"><br>
                <input type="email" name="email" id="" placeholder="Email"><br>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
                </textarea>
                <button class="form-action">Send</button>
            </form>
            <ul class="center contact-list h-lists" id="contactz">
                <li><a href="https://twitter.com/zaqtl" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://github.com/sheunl" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://www.linkedin.com/in/ao-lawani/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li id="dot">·</li>
                <li><a href="https://www.instagram.com/zaqlabs/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

@include('templates.foot')