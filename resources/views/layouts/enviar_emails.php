<?php 

$nome;
$email;
$data;
$data;
$hora;
$serviço;
$local;

$assunto_confirmacao = "Confirmação de Agendamento";
$message_confirmacao = "Olá $nome, 

Seu agendamento foi realizado com sucesso! Confira os detalhes abaixo:

Serviço: $servico
Data: $data
Horário: $hora
Local: $local

Atenciosamente, CliniCall!";

$cabecalho_confirmacao = "De: clinicall@gmail.com \r\n";

if (mail($email, $assunto_confirmacao, $message_confirmacao, $cabecalho_confirmacao)) {
    echo "E-mail de confirmação enviado para $email. <br>";
} 

else {
    echo "Erro ao enviar e-mail de confirmação. <br>";
}

$assunto_lembrete = "Lembrete de Consulta";
$mensagem_lembrete = "Olá $nome, 

Este é um lembrete para a sua consulta marcada:

Serviço: $servico;
Data: $data;
Horário: $hora;
Local: $local;

Atenciosamente, CliniCall!";

$cabecalho_lembrete = "De: clinicall@gmail.com \r\n";

if (mail($email, $assunto_lembrete, $mensagem_lembrete, $cabecalho_lembrete)){
    echo "E-mail de lembrete enviado para $email. <br>";
}

else{
    echo "Erro ao enviar e-mail de lembrete. <br>";
}


?>