<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="profSels.php">Bert Sels</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li role="navigation" id="navbar-index"><a href="index.php">Home</a></li>
                <li role="navigation" id="navbar-members"><a href="members.php">Members</a></li>
                <li role="navigation" id="navbar-research"><a href="research.php">Research</a></li>
                <li role="navigation" id="navbar-publications"><a href="publications.php">Publications</a></li>
                <li role="navigation" id="navbar-contact"><a href="contact.php">Contact</a></li>
                <li role="navigation" id="navbar-profSels"><a href="profSels.php">Prof. Sels</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li
                <?php
                echo ($activeTab=="login"?'class="active"':"");
                if ($_SESSION['loggedIn'] == 1)
                {
                    echo ' ><a href="login.php">Logout</a></li>';
                }
                else
                {
                    echo ' ><a href="login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>