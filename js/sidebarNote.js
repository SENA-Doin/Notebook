const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      dash = body.querySelector(".dash"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

      dash.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
      });

      /*modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
          modeText.innerText = "Modo Claro";
        }else{
          modeText.innerText = "Modo Oscuro";
        }
      });*/




