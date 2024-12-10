<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmação de Agendamento</title>
  <link href="assets/css/estilosConfirmacao.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main>
    <div class="confirmacao-container">
      <div class="informacoes-agendamento">
        <header><h1>CliniCall</h1></header>
        <p><strong>Nome:</strong> <span>{{ session('nome') }}</span></p>
        <p><strong>CPF:</strong> <span>{{ session('cpf') }}</span></p>
        <p><strong>Telefone:</strong> <span>{{ session('telefone') }}</span></p>
        <p><strong>Data:</strong> <span>{{ session('data') }}</span></p>
        <p><strong>Horário:</strong> <span>{{ session('hora') }}</span></p>
        <p><strong>Setor:</strong> <span>{{ session('especialidade') }}</span></p>
        <p><strong>Médico:</strong> <span>{{ session('medico') }}</span></p>
      </div>

      <div class="btn-container">
        <button onclick="window.print()" class="btn-voltar">Imprimir</button>
        <a href="{{ route('agendamento.create') }}">
          <button class="btn-voltar">Voltar para Agendamentos</button>
        </a>
      </div>
    </div>
    <header>
        <p>&copy; 2024 CliniCall. Todos os direitos reservados.</p> 
    </header>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('confirmaEspecialidade').innerText = "{{ session('especialidade') }}";
      document.getElementById('confirmaMedico').innerText = "{{ session('medico') }}";
      document.getElementById('confirmaData').innerText = "{{ session('data') }}";
      document.getElementById('confirmaHora').innerText = "{{ session('hora') }}";
      document.getElementById('confirmaNome').innerText = "{{ session('nome') }}";
      document.getElementById('confirmaCPF').innerText = "{{ session('cpf') }}";
      document.getElementById('confirmaTelefone').innerText = "{{ session('telefone') }}";
    });
  </script>
</body>
</html>
