<link rel="stylesheet" href="assets/css/estilosRegistro.css">

<div class="wrapper">
<div  style="display: absolut; margin-left: -360px">
    <a href="{{ route('home') }}">
        <button class="btn-voltar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg>
        </button>
    </a>
</div>

    <div class="logo">
        <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/7296443-user-icon-person-icon-client-symbol-profile-icon-vetor.jpg" alt="">
    </div>
    <div class="text-center mt-4 name">
        Criar conta
    </div>

    <form class="p-3 mt-3">
    <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="userName" id="userName" placeholder="Nome Completo" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="userCPF" id="userCPF" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-calendar-alt"></span>
        <input type="date" name="userNasc" id="userNasc" placeholder="Data de Nascimento" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="fas fa-phone"></span>
        <input type="tel" name="userTelefone" id="userTel" placeholder="Celular (00) 0 0000-0000" pattern="\(\d{2}\) \d{5}-\d{4}" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-envelope"></span>
        <input type="email" name="userEmail" id="userEmail" placeholder="E-mail" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Senha" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-building"></span>
        <input type="text" name="userEndereco" id="userEnd" placeholder="Rua" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-building"></span>
        <input type="text" name="userBairro" id="userBairro" placeholder="Bairro" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="far fa-map"></span>
        <input type="text" name="userCep" id="userCep" placeholder="CEP" pattern="\d{5}-\d{3}" required>
    </div>
</form>
    
    <a href="{{ route('home') }}"> 
        <button type="submit" class="btn mt-3">Criar conta</button>
    </a>

</div>
