function Cadastrar() {
var Nome = document.getElementById('idNome');
var Email = document.getElementById('idEmail');
var Senha = document.getElementById('idSenha');
var ConfSenha = document.getElementById('idConfSenha');

if(Nome.value.length < 7){
    Nome.style.backgroundColor = "#ff6459";
    alert('obrigatório informar o seu nome completo !!');
    Nome.focus();
    return false
}

else if(Email.value.indexOf("@") == -1 || Email.value.indexOf(".") == -1){
    Email.style.backgroundColor = "#ff6459";
    Estado.style.backgroundColor = "#ffffff";
    alert('obrigatório informar um e-mail válido !!');
    Email.focus();
    return false;
}

else if(Senha.value.length < 6){
    Senha.style.backgroundColor = "#ff6459";
    alert('obrigatório criar uma senha de no mínimo 6 digitos !!');
    Senha.focus();
}

else if(Senha.value != ConfSenha.value){
    ConfSenha.style.backgroundColor = "#ff6459";
    Senha.style.backgroundColor = "#ffffff";
    alert('Os campos senha e confirmar senha devem ser identicos !!');
    ConfSenha.focus();
    return false;
}

else{
     return true;
}   
}