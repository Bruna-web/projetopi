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
        <p><strong>Data:</strong> <span>{{ \Carbon\Carbon::parse(session('data'))->format('d/m/Y') }}</span></p>
        <p><strong>Horário:</strong> <span>{{ session('hora') }}</span></p>
        <p><strong>Setor:</strong> <span>{{ ucwords(session('especialidade')) }}</span></p>
        <p><strong>Médico:</strong> <span>{{ session('medico') }}</span></p>
        
        <p><strong>Posto de Saúde:</strong> 
          <span>
            {{ 
              session('posto') == 'posto1' ? 'Unidade Básica de Saúde (UBS) Centro' : 
              (session('posto') == 'posto2' ? 'Unidade Básica de Saúde (UBS) do Bairro São João' : 
              'Unidade Básica de Saúde (UBS) do Bairro Novo') 
            }}
          </span>
        </p>
      </div>

      <div class="btn-container">
        <button onclick="window.print()" class="btn-voltar">Imprimir</button>
        <a href="{{ route('home') }}">
          <button class="btn-voltar">Voltar ao Início</button>
        </a>
      </div>
    </div>
    <footer>
        <p>&copy; 2024 CliniCall. Todos os direitos reservados.</p> 
    </footer>
  </main>
</body>
</html>
