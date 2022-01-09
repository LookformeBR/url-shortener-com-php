<?php 
    /*se você estiver trabalhando no localhost, não precisa alterar nada
       mas se você está pensando em carregá-lo para o servidor ao vivo, então você precisa editar algo
    1. Cole o url do seu site com uma barra (/) na variável de domínio, você não precisa
       para escrever https: // wwww. antes do nome de domínio se você tiver configuração de redirecionamento de domínio
    2. Altere os valores user, pass e db mencionados nos comentários abaixo
    3. Vá para o arquivo JavaScript e pesquise esta palavra-chave - permitir domínio - e cole seu url lá
    4. Depois de todas as alterações, você deve esperar porque as alterações de salvamento do arquivo javascript podem levar algum tempo para refletir */ 

    $domain = "http://url-shortener.test/"; 
    $host = "localhost";
    $user = "root"; //Database username
    $pass = ""; //Database password
    $db = "urlShortener"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>