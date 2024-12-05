<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendamento</title>
  <link rel="stylesheet" href="assets/css/estilosAgendamento.css">
</head>
<body>
  <header>
    <h1>Agende Sua Consulta</h1>
    <p>Escolha o melhor horário e médico para sua consulta. É rápido e fácil!</p>
  </header>

  <main>
    <div class="btn-container">
      <a href="{{ route('home') }}">
        <button onclick="window.history.back()" class="btn-voltar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
        </button>
      </a>
    </div>

    <form class="agendamento-form">
      <!-- Passo 1: Especialidade -->
      <label for="especialidade">Setores:</label>
      <select id="especialidade" name="especialidade" required>
        <option value="" disabled selected>Selecione...</option>
        <option value="atendimento-medico">Atendimento Médico</option>
        <option value="enfermagem">Enfermagem</option>
        <option value="farmacia">Farmácia</option>
        <option value="exames-laboratorio">Exames (Laboratório)</option>
        <option value="vacina">Vacinação</option>
        <option value="odontologia">Saúde Bucal (Odontologia)</option>
        <option value="psicologia">Psicologia e Saúde Mental</option>
        <option value="fisioterapia">Fisioterapia</option>
        <option value="nutricao">Nutrição</option>
        <option value="controle-doencas-cronicas">Controle de Doenças Crônicas</option>
        <option value="triagem">Sala de Triagem (Recepção e Classificação de Risco)</option>

      </select>

      <!-- Passo 2: Médico -->
      <label for="medico">Médico:</label>
      <select id="medico" name="medico" required>
        <option value="" disabled selected>Selecione...</option>
        <option value="medico-1">Dr. João Silva</option>
        <option value="medico-2">Dra. Maria Oliveira</option>
        <option value="medico-3">Dr. Carlos Santos</option>
      </select>

      <!-- Passo 3: Data e Hora -->
      <label for="data">Data:</label>
      <input type="date" id="data" name="data" required>

      <label for="hora">Horário:</label>
      <select id="hora" name="hora" required>
        <option value="" disabled selected>Selecione...</option>
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
      </select>

      <!-- Passo 4: Dados Pessoais -->
      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>

      <button type="submit">Agendar Consulta</button>
    </form>
  </main>

  <footer>
    <p><h1>Chegue ao posto 15 minutos antes do horário marcado.</h1></p>
    <p><h2>É necessário apresentar documento de identificação no dia da consulta.</h2></p>
  </footer>
</body>
</html>
