var square = document.createElement("div");
      square.textContent = "BLOW";
      document.body.appendChild(square);
    

      let size = 100;
      let fontSize = size * 0.1;

      square.style.width = size + "px";
      square.style.height = size + "px";
      square.style.backgroundColor = "#FFCBA4";
      square.style.borderRadius = "50%";
      square.style.textAlign = "center";
      square.style.lineHeight = size + "px";
      square.style.fontFamily = "Fredoka One";
      square.style.fontSize = fontSize * 2.5 + "px";
      square.style.display = "inline";

      document.body.style.backgroundImage =
        "url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')";

      var beginText = document.createElement("h3");
      beginText.textContent = "Scrool and help me blow the baloon!";
      beginText.style.fontFamily = "Fredoka One";

      document.body.appendChild(beginText);
      beginText.style.marginTop = "0px";
      beginText.style.color = " #f81af8";

      window.addEventListener("scroll", function () {
        size++;
        fontSize++;
        if (size < window.innerWidth / 1.5) {
          square.style.width = size + "px";
          square.style.height = size + "px";
          square.style.lineHeight = size + "px";
          square.style.fontSize = fontSize * 0.3 + "px";
        }

        if (size == window.innerWidth / 1.5) {
          square.style.backgroundColor = "red";
          square.innerText = "PARTY!";
          document.body.style.backgroundImage =
            "url('https://images.pexels.com/photos/3419691/pexels-photo-3419691.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500')";
          beginText.textContent = "";
        }
      });

      //maksymalna wielkosc kwadratu:
      //window.innerWidth* 0.5;
      //window.innerHeight* 0.5;
    