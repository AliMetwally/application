'use strick'

$(function () {
    
    loginForm.onsubmit = function (e){
        e.preventDefault();
        // get form values 
        var username = $('#loginForm [name="username"]').val();
        var password = $('#loginForm [name="password"]').val();
        var authMsg = $('#errMsg');

        // validate form values 
        if(!username || !password)
        {
            var errMsg = !username ? 'Enter Your User Name' : 'Enter Your Password';
            authMsg.html(htmlString);
        }
        else{
            authMsg.html('Authanticating ...');

            handleLogin(username, password, function(returnedData){
                if(returnedData.status === 1){
                    authMsg.html('Authenticated. Redirecting....');
                    loginRedirect();
                }
                else{
                    // display error msg 
                    authMsg.html(returnedData.msg);
                }
            });
        }
    } // end of onsubmit

    function loginRedirect()
    {
        window.location.replace(appRoot + 'dashboard');
    }

}); // end of jQuery