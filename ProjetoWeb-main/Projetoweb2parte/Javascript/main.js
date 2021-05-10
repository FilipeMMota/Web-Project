
var isLogged = false; //Variable to check if the user is logged in or not

/* JQuery */
$( "#home_button" ).click(function() //When you click the object with the id "home_button"
{
    hideAllSections();
    $("#home").show();//actiavte the display

});

$( "#movies_button" ).click(function()
{
    hideAllSections();
    $("#movies").show();

});

$( "#series_button" ).click(function()
{
    hideAllSections();
    $("#series").show();

});

$( "#realizadores_button" ).click(function()
{
    hideAllSections();
    $("#realizadores").show();

});
$( "#atores_button" ).click(function()
{
    hideAllSections();
    $("#atores").show();
});

$( "#estudios_button" ).click(function()
{
    hideAllSections();
    $("#estudios").show();
});

$( "#favoritos_button" ).click(function()
{
    hideAllSections();
    $("#favoritos").show();
});

$( "#perfil_button" ).click(function()
{
   hideAllSections();
    $("#perfil").show();
});

$('.reminder').click(function(){
    alert("Receberá uma notificação quando estrear");
})



$("#buttonNome").click(function()//Function to change name
{
    username = $("#usernamePerfil").val();
    if (username == "") {
        alert("Username necessário");

    }else if (username == usernameArray[0].username){
        alert("O username " + username + " já está em uso");
    }else{
        alert("Username alterado com sucesso");
    }
});

$("#buttonPassword").click(function()//Function to change the password
{
    passwordExistente = $("#passwordPerfilExistente").val();
    passwordNova = $("#passwordPerfil1").val();
    passwordConfirm = $("#passwordPerfil2").val();
    if (passwordExistente == "") {
        alert("Password necessária");
    }else if(passwordNova == ""){
        alert("Password necessária");
    }else if (passwordConfirm == ""){
        alert("Password necessária");
    }else if(passwordExistente != passwordArray[0].password){
        alert("A password atual está incorreta");
    }else if (passwordNova != passwordConfirm){
        alert("As passwords não coincidem");
    }else{
        alert("Password alterada com sucesso");
    }
});

$("#buttonEmail").click(function()//Funtion to change the email
{
    email = $("#emailPerfil").val();
    if(email == ""){
        alert("Email necessário");
    }else if(email == emailArray[0].email){
        alert(email + " já está em uso.");
    }else{
        alert("Email alterado com  sucesso");
    }
});

function hideAllSections()//Function that hides everything so we can use it later
{
    $("#home").hide();
    $("#movies").hide();
    $("#series").hide();
    $("#realizadores").hide();
    $("#atores").hide();
    $("#estudios").hide();
    $("#favoritos").hide();
    $("#perfil").hide();
}


function addFav(movieID, buttonIDFav, buttonIDRemove){//Function that adds to the favorite list
    if(isLogged){//if the user is logged on

        const newFav = document.getElementById(movieID);//Get the object that will be added to the favorites
        const destination = document.getElementById("insertFav");//Get the location of where we are inserting our new favorite (in the favorite page)
         
        $('#' + buttonIDFav).hide();//hide the "Adicionar aos Favoritos"
        $('#' + buttonIDRemove).show();//show the "Remover dos Favoritos"

        fav = newFav.cloneNode(true)//Cloning the original
        destination.appendChild(fav)//Applying it to the location 

        fav.id = movieID + '_fav';//change the id of the object that is in the favorite page
    }
}

function removeFav(movieID, buttonIDRemove, buttonIDFav){//Function that removes from the favorite list
    if(isLogged){

        const element = document.getElementById(movieID + '_fav')//get the object we're removing
        element.remove();//remove it

        $('#' + buttonIDRemove).hide();//hide the "Remover aos favoritos"
        $('#' + buttonIDFav).show();//show the "Adicionar aos favoritos"

    }
}


$("#login_button").click(function( event ) {
    event.preventDefault();

    username = $("#username").val();

    password = $("#password").val();

    login(username, password);

});


function login(username, password)
{
    isLogged=true
    //cria array para enviar para php
    var formdata =
        {
            'user': username,
            'pass': password
        };

    $.ajax({
        type: 'POST',
        data: formdata,
        url: 'login.php',
        success: function (data)
        {
            if(data == '1')
            {
                alert('Preencha os dados de login');
            }
            else if(data == '2')
            {
                alert('Dados de login incorrectos');
                clearDataLogin();
            }
            else
            {
                activarLogin();

                $("#user_welcome").html('Welcome back, ' + data +  '😎');
                $("#change_user").html(data);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('There was an unknown error');
            location.reload();
        }

    });
}

function clearDataLogin()
{
    $("#username").val('');

    $("#password").val('');
}

function activarLogin()
{
    $('#semlogin').css("display", "none");
    $('#comlogin').css("display", "block");
}

