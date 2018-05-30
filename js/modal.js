var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];

function newsModal(){
    var cookies = document.cookie.split(";");
    for(var i = 0; i < cookies.length; i++){
        console.log(cookies[i]);
        var c = cookies[i]
        while(c.charAt(0) == ' '){
            c = c.substring(1);
        }
        if(/^email=/.test(c) || c == "noPopUp=true"){            
            return;
        }
    }
    modal.style.display = "block";
}

span.onclick = function(){
    modal.style.display = "none";
    noPopUp();
}

window.onclick = function(event){
    if(event.target == modal) {
        modal.style.display = "none";
        noPopUp();
    }
}
window.gsignin = function(){
    var auth2 = gapi.auth2.getAuthInstance();

    auth2.signIn()
    .then(changeProfile);
};

gapi.load('auth2', function(){

    gapi.auth2.init().then(function(auth2) {
        if(auth2.isSignedIn.get()){
            var googleUser = auth2.currentuser.get();

            changeProfile(googleUser);
        }
    });
});

function getEmail(googleUser){
    var profile = googleUser.getBasicProfile();
    var email = profile.getEmail();
    return email;
}

function setCookie(googleUser){
    var d = new Date();
    d.setTime(d.getTime() + (7*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    var email = getEmail(googleUser);
    document.cookie = "email=" + email + ";" + expires + ";path=/";
}

function noPopUp(){
    var d = new Date();
    d.setTime(d.getTime() + (7*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "noPopUp=true;" + expires + ";path=/";
}

function closeModal(){
    modal.style.display = "none";
    noPopUp();
}

function onSignIn(googleUser) {
    var cookie = document.cookie;
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    console.log(cookie);
    setCookie(googleUser);
}


