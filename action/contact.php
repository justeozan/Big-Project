<?php 
require "../cfg/config.php"; 
    
        if(!empty($_POST['pseudo']) AND !empty($_POST['message']))
        {
            $sql = "INSERT INTO guestbook (pseudo, message) VALUES (:pseudo, :message)";
            $pre = $pdo->prepare($sql);
            $pre->bindParam("pseudo", htmlspecialchars($_POST['pseudo']));
            $pre->bindParam("message", htmlspecialchars($_POST['message']));
            $pre->execute();

            header('Location:../index.php#');
        // if (isset($_POST['pseudo'])) {

        //     $to = "osahin@guardiaschool.fr";
        //     $subject = 'Merci pour votre message';
        //     $message = 'Je vous remercie';
        //     $headers = implode("\r\n", array('MIME-Version: 1.0','Content-type: text/html; charset=utf8'));

        //     mail($to, $subject, $message, $headers);
        // }

        } elseif(empty($_POST['pseudo']) AND !empty($_POST['message']))
        {
            echo "Veuillez insérer votre pseudo";
        }
        else {
            echo "Veuillez insérer votre message";
        }
       
    
?>