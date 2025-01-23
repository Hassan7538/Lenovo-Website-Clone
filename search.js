function openTab() {
    $input =  $("#searchInp").val();

    if($input == 'bios'){
        window.open("bios.html", "_blank");
    }

    else if($input == 'home' || $input == 'main page' || $input == 'mainpage' || $input == 'homepage' || $input == 'home page'){
        window.open("fyp.html", "_blank");
    }
    
    else if($input == 'driver' || $input == 'drivers'){
        window.open("driver.html", "_blank");
    }

    else if($input == 'vantage' || $input == 'ventage'){
        window.open("vantage.html", "_blank");
    }

    else if($input == 'window' || $input == 'windows'){
        window.open("window.html", "_blank");
    }

    else if($input == 'social media' || $input == 'youtube' || $input == 'insta' || $input == 'instagram' || $input == 'facebook' || $input == 'x' || $input == 'contact' || $input == 'contacts' || $input == 'twitter' || $input == 'linkedin'){
        window.open("fypContacts.html", "_blank");
    }

    else if($input == 'support' || $input == 'tech' || $input == 'technical' || $input == 'technical support' || $input == 'tech support' ){
        window.open("fypSupport.html", "_blank");
    }

    else if($input == 'register' || $input == 'signup' || $input == 'sign up' || $input == 'create account'  || $input == 'createaccount'){
        window.open("fypSignup.html", "_blank");
    }
    
    else if($input == 'log in' || $input == 'login' || $input == 'signin' || $input == 'sign in'){
        window.open("fypSignin.html", "_blank");
    }

    else if($input == 'review' || $input == 'feedback' || $input == 'opinion'){
        window.open("feedback.html", "_blank");
    }

}