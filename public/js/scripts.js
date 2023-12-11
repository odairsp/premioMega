let numeros = [];
        let count = 0;

        function clicar(e) {

            let matches = document.querySelectorAll("td");
            let button = document.getElementById(e);

            if ((numeros.length < 60) && (!numeros.includes(button.value))) {
                numeros.push(button.value)
                numeros.sort((a, b) => a - b);
                console.log(numeros);
                button.style.backgroundColor = "green";
                button.style.color = "#fff";

                matches.forEach(function(element) {
                if (element.innerHTML == button.value) {
                    element.style.backgroundColor = "green";
                    element.style.color = "#fff";
                    element.style.fontWeight = "bold"
                }
            });

            } else {
                numeros = numeros.filter((value) => value != button.value);
                console.log(numeros);
                button.style.backgroundColor = "#e9e9e9"
                button.style.color = "#000"

                matches.forEach(function(element) {
                if (element.innerHTML == button.value) {
                    element.style.backgroundColor = "#fff";
                    element.style.color = "#000";
                    element.style.fontWeight = "normal"
                }
            });
            }


            





        }