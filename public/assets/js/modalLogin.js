      //untuk multiple modal

      // change ke input email dan pass waktu login
      const signin = document.getElementById('signin')
      signin.addEventListener('click', function(){
        $('#exampleModal').modal('hide'); 
        $('#exampleModal2').modal('show');  
      });

      // change to sign up
      const signup = document.getElementById('signup')
      signup.addEventListener('click', function(){
        $('#exampleModal').modal('hide'); 
        $('#exampleModal3').modal('show');  
      });

       // back to signin menu
      const bsignin = document.getElementById('back-signin')
      bsignin.addEventListener('click', function(){
        $('#exampleModal3').modal('hide'); 
        $('#exampleModal').modal('show');  
      });

      // change ke input email dan pass waktu register
      const signup2 = document.getElementById('signup-2')
      signup2.addEventListener('click', function(){
        $('#exampleModal3').modal('hide'); 
        $('#exampleModal4').modal('show');  
      });
      // back to signup menu
      const bsignup = document.getElementById('back-signup')
      bsignup.addEventListener('click', function(){
        $('#exampleModal4').modal('hide'); 
        $('#exampleModal3').modal('show');  
      });
      // continue login
      const continueSignin = document.getElementById('go-signin')
      continueSignin.addEventListener('click', function(){
        $('#exampleModal4').modal('hide'); 
        $('#exampleModal2').modal('show');  
      });