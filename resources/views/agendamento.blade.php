<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendamento</title>
  <link href="assets/css/estilosAgendamento.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
    <h1>Agende Sua Consulta</h1>
    <p>Escolha o melhor horário e médico para sua consulta. É rápido e fácil!</p>
  </header>

  <main>
    <div class="btn-container">
      <a href="{{ route('home') }}">
        <button class="btn-voltar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
        </button>
      </a>
    </div>

    <form class="agendamento-form" method="POST" action="{{ route('agendamento.store') }}">
      @csrf

      <label for="posto">Escolha o Posto de Saúde:</label>
      <select id="posto" name="posto" required>
        <option value="" disabled selected>Selecione...</option>
        <option value="posto1">Unidade Básica de Saúde (UBS) Centro</option>
        <option value="posto2">Unidade Básica de Saúde (UBS) do Bairro São João</option>
        <option value="posto3">Unidade Básica de Saúde (UBS) do Bairro Novo</option>
      </select>

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

      <div id="exames-container" style="display:none;">
        <label for="exames">Escolha o Exame:</label>
        <select id="exames" name="exames">
          <option value="" disabled selected>Selecione...</option>
          <option value="exame1">Exame de Sangue</option>
          <option value="exame2">Raio-X</option>
          <option value="exame3">Ultrassonografia</option>
        </select>
      </div>

      <label for="medico">Especialista:</label>
      <select id="medico" name="medico" required>
        <option value="" disabled selected>Selecione...</option>
      </select>

      <label for="data">Data:</label>
      <input type="date" id="data" name="data" required>

      <label for="hora">Horário:</label>
      <select id="hora" name="hora" required>
        <option value="" disabled selected>Selecione...</option>
        <option value="08:00">08:00</option>
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
      </select>

      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required pattern="\(\d{2}\) \d{5}-\d{4}">

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

      <button type="submit">Agendar Consulta</button>
    </form>
  </main>

  <script>
    $(document).ready(function() {
      const medicosPorPosto = {
        "posto1": {
          "atendimento-medico": ["Dr. Roberto Costa", "Dra. Simone Oliveira"],
          "enfermagem": ["Enf. Pedro Lima", "Enf. Julia Soares"],
          "farmacia": ["Farm. Beatriz Almeida", "Farm. Marcos Henrique"],
          "exames-laboratorio": ["Dr. Carla Souza", "Dr. Luiz Silva"],
          "vacina": ["Enf. Paula Mendes", "Enf. Alice Rodrigues"],
          "odontologia": ["Dr. Alan Pereira", "Dra. Raquel Nunes"],
          "psicologia": ["Psic. Gabriela Lima", "Psic. Daniel Pires"],
          "fisioterapia": ["Fisio. Letícia Alves", "Fisio. Rafael Costa"],
          "nutricao": ["Nut. Bianca Santos", "Nut. Fábio Martins"],
          "controle-doencas-cronicas": ["Dr. Alexandre Silva", "Dra. Fernanda Costa"],
          "triagem": ["Enf. Renato Gomes", "Enf. Camila Pereira"]
        },
        "posto2": {
          "atendimento-medico": ["Dr. André Dias", "Dra. Helena Costa"],
          "enfermagem": ["Enf. Gabriel Silva", "Enf. Lívia Fernandes"],
          "farmacia": ["Farm. Rodrigo Silva", "Farm. Carolina Pinto"],
          "exames-laboratorio": ["Dr. Fernanda Martins", "Dr. Tiago Rocha"],
          "vacina": ["Enf. Letícia Souza", "Enf. Mariana Santos"],
          "odontologia": ["Dr. Eduardo Moreira", "Dra. Natália Ferreira"],
          "psicologia": ["Psic. Roberto Oliveira", "Psic. Carolina Pires"],
          "fisioterapia": ["Fisio. Lucas Rocha", "Fisio. Silvia Gomes"],
          "nutricao": ["Nut. Andréia Silva", "Nut. João Lima"],
          "controle-doencas-cronicas": ["Dr. Lucas Barbosa", "Dra. Priscila Lima"],
          "triagem": ["Enf. Juliana Ramos", "Enf. Felipe Santos"]
        },
        "posto3": {
          "atendimento-medico": ["Dr. Rafael Costa", "Dra. Fernanda Oliveira"],
          "enfermagem": ["Enf. Paulo Soares", "Enf. Camila Ramos"],
          "farmacia": ["Farm. Mariana Oliveira", "Farm. Rodrigo Souza"],
          "exames-laboratorio": ["Dr. Roberto Almeida", "Dr. Tânia Lima"],
          "vacina": ["Enf. Larissa Pereira", "Enf. José Carlos"],
          "odontologia": ["Dr. Marcos Almeida", "Dra. Paula Silva"],
          "psicologia": ["Psic. Adriana Costa", "Psic. Bruno Nascimento"],
          "fisioterapia": ["Fisio. Valéria Oliveira", "Fisio. Rodrigo Martins"],
          "nutricao": ["Nut. Karla Almeida", "Nut. Eduardo Souza"],
          "controle-doencas-cronicas": ["Dr. Caio Lima", "Dra. Simone Rocha"],
          "triagem": ["Enf. João Almeida", "Enf. Fernanda Nunes"]
        }
      };

      const feriados = ["2024-12-25", "2024-01-01"];

      function validarData(date) {
        const day = date.getDay();
        const dateString = date.toISOString().split('T')[0];
        return day !== 0 && day !== 6 && !feriados.includes(dateString);
      }

      $('#data').on('input', function() {
        const inputDate = new Date($(this).val());
        if (!validarData(inputDate)) {
          alert("A data selecionada não pode ser em um final de semana ou feriado.");
          $(this).val('');
        }
      });

      $('#posto, #especialidade').on('change', function() {
        const posto = $('#posto').val();
        const especialidade = $('#especialidade').val();

        if (posto && especialidade) {
          const medicos = medicosPorPosto[posto][especialidade] || [];
          const medicoSelect = $('#medico');
          medicoSelect.empty();
          medicoSelect.append('<option value="" disabled selected>Selecione...</option>');
          medicos.forEach(medico => {
            medicoSelect.append(`<option value="${medico}">${medico}</option>`);
          });
        }
      });

      $('#especialidade').on('change', function() {
        if ($(this).val() === 'exames-laboratorio') {
          $('#exames-container').show();
        } else {
          $('#exames-container').hide();
        }
      });
    });
  </script>
</body>
</html>
