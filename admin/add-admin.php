<?php include('partials/menu.php'); // uygdj;hxb
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e5";

// Établir la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
define('SITEURL', 'http://localhost/admin/');

?>

<div class="main-content">
    <div class="wrapper">
         <br><br>
         <h1 class="text-center">Ajouter des utilisateurs</h1> 
         <br><br><br>
         <?php 
             if(isset($_SESSION['add']))
             {
                 echo $_SESSION['add'];
                 unset($_SESSION['add']);
            }
         ?>
         <form action="" method="POST">
            <table class="tbl-35">
             <tr>
                     <td>Prénom Nom</td>
                     <td><input type="text" name="full_name" placeholder="Saisir prénom et nom"></td>
                </tr>

                <tr>
                    <td>Utilisateur</td>
                    <td><input type="text" name="username" placeholder="Saisir utilisateur"></td>
                </tr>

                <tr>
                     <td>Mot de passe</td>
                     <td><input type="password" name="password" placeholder="Saisir mot de passe"></td>
                </tr>

                <!Ajout des boutons>
           
                 <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Ajouter utilisateur" class="btn-secondary2" >
                    </td>
                
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); 
?>
<!Envoi du formulaire vers la base>
<!Récupération des données du formulaire>
<?php
    if (isset($_POST['submit']))
        {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Encryption du mot de passe avec MD5
        $sql ="INSERT INTO tbl_admin SET    
        full_name = '$full_name',
        username = '$username',
        password = '$password'
        ";

        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn)); //Exécution de la requète, la connexion est réalisée dans menu.php

        if ($res==TRUE)        //Vérification de l'insertion dans la base
        {
         $_SESSION['add'] ="<div class='success'>Utilisateur ajouté.</div>";  //Redirection de la page
         header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
         $_SESSION['add'] ="<div class='error'>Echec création utilisateur.</div>";    //Redirection de la page
         header("location:".SITEURL.'admin/add-admin.php');
        }

    }

?>
