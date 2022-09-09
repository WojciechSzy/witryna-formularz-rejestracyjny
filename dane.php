<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- Kodowanie znaków -->
    <meta charset="utf-8">
    <!--Biblioteki bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Tytuł -->
    <title>Odbieranie danych z formularza</title>
    <!-- Autor -->
    <meta name="author" content="Wojciech Szylkiewicz">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $passwd=$_POST['password'];
    @$newsletter=$_POST['newsletter'];
    $name2=$_POST['name2'];
    $surname2=$_POST['surname2'];
    $company=$_POST['company'];
    $street=$_POST['street'];
    $postcode=$_POST['postcode'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $addrname=$_POST['addrname'];

    // Instrukcje dla newslettera

    if(isset($_POST['newsletter'])){
        $newsletter = "Zapisz mnie do newslettera";
    }
    else{
        $newsletter = "Nie zapisuj mnie do newslettera";
    }
    ?>
    
    <table id="table">
        <tr class="dark-background">
            <td colspan="2">
                <p>Dane osobowe</p>
            </td>
            
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Imię</p>
            </td>
            <td>
                <?php
                    echo"$name";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
            <p>Nazwisko</p>
            </td>
            <td>
                <?php
                    echo"$surname";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>E-mail</p>
            </td>
            <td>
                <?php
                    echo"$email";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Hasło</p>
            </td>
            <td>
                <?php
                    echo"$passwd";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Newsletter</p>
            </td>
            <td>
                <?php
                    echo"$newsletter";
                ?>
            </td>
        </tr>
        <tr class="dark-background">
            <td colspan="2">
                <p>Adres</p>
            </td>
            
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Imię</p>
            </td>
            <td>
                <?php
                    echo"$name2";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Nazwisko</p>
            </td>
            <td>
                <?php
                    echo"$surname2";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Firma</p>
            </td>
            <td>
                <?php
                    echo"$company";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Ulica i numer</p>
            </td>
            <td>
                <?php
                    echo"$street";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Kod pocztowy</p>
            </td>
            <td>
                <?php
                    echo"$postcode";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Miasto</p>
            </td>
            <td>
                <?php
                    echo"$city";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Kraj</p>
            </td>
            <td>
                <?php
                    echo"$country";
                ?>
            </td>
        </tr>
        <tr class="lgrey-background">
            <td>
                <p>Nr telefonu</p>
            </td>
            <td>
                <?php
                    echo"$phone";
                ?>
            </td>
        </tr>
        <tr class="dgrey-background">
            <td>
                <p>Nazwa własna adresu</p>
            </td>
            <td>
                <?php
                    echo"$addrname";
                ?>
            </td>
        </tr>
    </table>
        

</body>
</html>