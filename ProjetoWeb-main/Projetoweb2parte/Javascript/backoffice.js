function visualizarfilmes() {
    document.getElementById("cont2").style.display = "none";
    document.getElementById("tabelafilmes").style.display = "block";
}


const loginPeople = [ //array with the credentials
    {
        username:"admin",
        password:"web"
    }
]

function hideAll(){
    $("#cont1").hide();
    $("#main").hide();
    $("#products").hide();
}

function login(username, password) //function to login
{
    if(username == loginPeople[0].username && password == loginPeople[0].password) //if the username and the password match
    {
        hideAll();
        $( "#cont2" ).show();//Show the backoffice page
        $(" #main").show();
    }
    else
    {
        alert("Utilizador ou palavra-passe incorretos")
    }
}



$("#form_login").submit(function(form) //function to insert the credentials
{
    form.preventDefault();//por uma questaão de segurança usamos esta funcao para o user a pass nao aparecerem em modo "get" no url da nossa pagina

    username = $( "#user" ).val();
    password = $( "#pass").val();

    login(username, password);
});

$("#bdb_button").click(function(){
    hideAll();
    $("#products").show();
})

$("#home_button").click(function(){
    hideAll();
    $("#main").show();
})

$('#logout_button').click(function(){
    location.reload();
})