<nav class="navbar navbar-fixed-top menu">
    <div class="container-fluid">
        <ul id="nav" class="nav navbar-nav">
            <li><a id="menu1" class="btn" href="/Projet_Web_Brony">Accueil</a></li>
            <li class="dropdown">
                <a id="menu2" class="btn menu-button" href="achats.php">Achats</a>
                <div class="dropdown-content">
                    <a href="#">Poneys</a>
                    <a href="#">Licornes</a>
                    <a href="#">Pégases</a>
                    <a href="#">Alicornes</a>
                </div>
            </li>
            <li class="dropdown">
                <a id="menu3" class="btn menu-button">Ventes</a>
                <div class="dropdown-content">
                    <a href="#">Revendre</a>
                    <a href="#">Clauses revendeur</a>
                </div>
            </li>
            <li><a id="menu4" class="btn menu-button">Contact</a></li>
            <li class="dropdown">
                <a id="menu5" class="btn menu-button">Mon Compte</a>
                <div class="dropdown-content" style="background: linear-gradient(to right, rgba(85, 26, 130, 0.6),
                                                                                            rgba(0, 144, 208, 0.6),
                                                                                            rgba(60, 178, 64, 0.6),
                                                                                            rgba(255, 238, 85, 0.6),
                                                                                            rgba(254, 126, 48, 0.6),
                                                                                            rgba(235, 0, 33, 0.6));">
                    <?php

                        if ($_SESSION['users']['login']!='')
                        {
                            $user = $_SESSION['users'];
                            if ($user['login']=='Administrateur')
                                echo "<a href='administrateur.php'>";
                            else                                       
                                echo "<a href='utilisateur.php'>";

                            echo "<span class='glyphicon glyphicon-user'></span>    $user[login]</a>";
                            echo '<a href="index.php?deco=true"><span class="glyphicon glyphicon-log-in"></span>    Déconnexion</a>';
                        }
                        else
                        {
                            echo '<form action="index.php" method="POST">
                                    <span style="color: whitesmoke">Identifiant
                                    <br><input type="text" class="form-control" name="identifiant" />
                                    Mot de passe</span>
                                    <br><input type="password" class="form-control" name="mdp" />
                                    <button type="submit" class="btn btn-default" style="min-width: 100%">Connexion</button>
                                  </form>
                                  <a href="ajout_util.php">créer un compte</a>';
                        }
                    ?>
                </div>
            </li>
            <li class="dropdown">
                <a id="menu6" class="btn menu-button">À propos</a>
                <div class="dropdown-content">
                    <a href="#">Le site</a>
                    <a href="#">La team</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
