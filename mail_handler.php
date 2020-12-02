<?php
  if(issest($_POST['submit'])){
        $Name = $POST['Name'];
        $E-Mail = $POST['Email'];
        $text = $POST['text'];
        $Nachricht = $POST['Nachricht'];

        $to='felix.ruediger@googlemail.com';
        $subject='From Submission'
        $message="Name: ".$Name."\n"."Phone:".$text."\n". "Wrote the following: "."\n\n".$Nachricht;
        $headers="Form: ".$E-mail

        if(mail($to, $subject, $message, $headers)){
        echo "<h1>Send ddsaasda</h1>"
        }else{
          echo "Falsch gelaufen";
        }
    }

  ?>
