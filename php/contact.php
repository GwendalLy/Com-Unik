<?php


 if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['mess'])){

        echo '<p>'.'Merci '.$_GET['name'].' !'.'</p>';

    } else {

           echo '
                <form action="test.php" method="get">
                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="name" required/>
                    </div>
                    <div>
                        <label for="courriel">Courriel :</label>
                        <input type="email" id="courriel"  name="email" required/>
                    </div>
                    <div>
                        <label for="message">Message :</label>
                        <textarea id="message" name="mess" required></textarea>
                    </div>

                   <button type="submit" > SEND </button>
                </form> ';

    }

?>