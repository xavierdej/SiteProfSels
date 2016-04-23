<?php

function generateNavbar($activeTab)
{
    echo '
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
                        <li ';
                        echo ($activeTab=="index"?'class="active"':"");
                        echo ' ><a href="index.php">Home</a></li>
                        <li ';
                        echo ($activeTab=="members"?'class="active"':"");
                        echo ' ><a href="members.php">Members</a></li>
                        <li ';
                        echo ($activeTab=="research"?'class="active"':"");
                        echo ' ><a href="research.php">Research</a></li>
                        <li ';
                        echo ($activeTab=="publications"?'class="active"':"");
                        echo ' ><a href="publications.php">Publications</a></li>
                        <li ';
                        echo ($activeTab=="contact"?'class="active"':"");
                        echo ' ><a href="contact.php">Contact</a></li>
                        <li ';
                        echo ($activeTab=="profSels"?'class="active"':"");
                        echo ' ><a href="profSels.php">Prof. Sels</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li ';
                        echo ($activeTab=="login"?'class="active"':"");
                        if ($_SESSION['loggedIn'] == 1)
                        {
                            echo ' ><a href="login.php">Logout</a></li>';
                        }
                        else
                        {
                            echo ' ><a href="login.php">Login</a></li>';
                        }
                        echo '
                    </ul>
                </div>
            </div>
        </nav>';
}
?>