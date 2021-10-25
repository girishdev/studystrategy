<nav class="navbar navbar-inverse">
    <!-- navbar-default -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="main_page.php" class="home navbar-brand">StudyStrategy</a>
    </div>

    <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programming<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=php">Php</a></li>
                    <li><a href="main_page.php?module=python">Python</a></li>
                    <li><a href="main_page.php?module=javascript">JavaScript</a></li>
                    <li><a href="main_page.php?module=languagec">C</a></li>
                    <li><a href="main_page.php?module=languagec++">C++</a></li>
                    <li><a href="main_page.php?module=java">Java</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Database<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=mysql">Msql/DBMS</a></li>
                    <li><a href="main_page.php?module=postgresql">Postgresql</a></li>
                    <li><a href="main_page.php?module=mongo_db">MongoDB</a></li>
                    <li><a href="main_page.php?module=maria_db">MariaDB</a></li>
                    <li><a href="main_page.php?module=elastic_search">Elastic Search</a></li>
                    <li><a href="main_page.php?module=redis">Redis</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Framework<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=wordpress">Wordpress</a></li>
                    <li><a href="main_page.php?module=symfony">Symfony</a></li>
                    <li><a href="main_page.php?module=laravel">Laravel</a></li>
                    <li><a href="main_page.php?module=yii2">Yii2</a></li>
                    <li><a href="main_page.php?module=codeigniter">Codeigniter</a></li>
                    <li><a href="main_page.php?module=django">Django</a></li>
                    <li><a href="main_page.php?module=reactjs">ReactJs</a></li>
                    <li><a href="main_page.php?module=vuejs">VueJs</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Operating System<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=ubuntu">Ubuntu</a></li>
                    <li><a href="main_page.php?module=windows">Windows</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Wed Developer<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=html">HTML</a></li>
                    <li><a href="main_page.php?module=css">CSS</a></li>
                    <li><a href="main_page.php?module=jquery">jQuery</a></li>
                    <li><a href="main_page.php?module=ajax">Ajax</a></li>
                    <li><a href="main_page.php?module=bootstrap">Bootstrap</a></li>
                    <li><a href="main_page.php?module=admin_lt">AdminLT</a></li>
                    <li><a href="main_page.php?module=material_ui">Material UI</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Tools<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=vs_code">VS Code</a></li>
                    <li><a href="main_page.php?module=sublime">Sublime</a></li>
                    <li><a href="main_page.php?module=jira">JIRA</a></li>
                    <li><a href="main_page.php?module=jmeter">Jmeter</a></li>
                    <li><a href="main_page.php?module=docker">Docker</a></li>
                    <li><a href="main_page.php?module=postman">Postman</a></li>
                    <li><a href="main_page.php?module=git">Git</a></li>
                    <li><a href="main_page.php?module=agile_metho">Agile Metho</a></li>
                    <li><a href="main_page.php?module=aws">AWS</a></li>
                    <li><a href="main_page.php?module=google_cloude">google_cloude</a></li>
                    <li><a href="main_page.php?module=azur">Azur</a></li>
                    <li><a href="main_page.php?module=networking">Networking</a></li>
                    <li><a href="main_page.php?module=algorithm">Algorithm</a></li>
                    <li><a href="main_page.php?module=data_structures">Data structures</a></li>
                    <li><a href="main_page.php?module=big_data">Big Data</a></li>
                    <li><a href="main_page.php?module=info">Info</a></li>
                    <li><a href="main_page.php?module=readme">Readme</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Personal Development<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="main_page.php?module=job">Job profile</a></li>
                    <li><a href="main_page.php?module=imp_links">Imp Links</a></li>
                    <li><a href="main_page.php?module=imp_noted">Imp Noted</a></li>
                    <li><a href="main_page.php?module=doubts">Doubts</a></li>
                    <li><a href="main_page.php?module=english">English</a></li>
                    <li><a href="main_page.php?module=aptitude">Aptitude</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a class="pull-right" href="main_page.php?module=add_topic">Add Topics</a></li>
            <li><a class="pull-right" id="logout" href="main_page.php?module=logout">Log out</a></li>
        </ul>

        <form class="navbar-form navbar-left" action="#">
            <div class="input-group">
                <input type="text" class="search-query form-control" name="search_for" placeholder="Search" />
                <div class="input-group-btn">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" id="search_button" type="button">Search</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</nav>