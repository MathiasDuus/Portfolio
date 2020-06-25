
function getheader() {
    if (window.XMLHttpRequest)
        xmlhttp = new XMLHttpRequest();
    else
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200)
            document.getElementById("header").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "../php/bin/header.php", true);
    xmlhttp.send();
    CreateSocial();
    getfooter();
}



function CreateSocial() {
        var imgSrc = ["../images/social/linkedin.png", "../images/social/github.png", "../images/social/twitter.png", "../images/social/facebook.png"];

        for (i = 0; i < imgSrc.length; i++) {
            var img = document.createElement("img");
            img.src = imgSrc[i];
            img.id = "social" + i;

            //switch til at lave links på de sociale iconer
            switch (i) {

                //Linkedin
                case 0:
                    img.onclick = function () {
                        window.location.href = 'https://www.linkedin.com/in/mathias-hasseltoft-duus-nielsen-1aa90017b/';
                    };
                    break;

                //GitHub
                case 1:
                    img.onclick = function () {
                        window.location.href = 'https://github.com/MathiasDuus';
                    };
                    break;

                //twitter
                case 2:
                    img.onclick = function () {
                        window.location.href = 'https://twitter.com/mathiasduus1234';
                    };
                    break;

                //Facebook
                case 3:
                    img.onclick = function () {
                        window.location.href = 'https://da-dk.facebook.com/MathiasDuusNielsen';
                    };
                    break;
            }
            document.getElementById("target").appendChild(img);
            document.getElementById("social" + i).className = "social";
        }
activeNavItem();
}

function activeNavItem() {
     setTimeout(function () {
    if (document.URL.includes("index")) {
        document.getElementById("forside").className += " active";
    }
    else if (document.URL.includes("opgaver")||document.URL.includes("fuldbeskrivelse")) {
        document.getElementById("opgaver").className += " active";
    }
    else if (document.URL.includes("kontakt")) {
        document.getElementById("kontakt").className += " active";
    }
        if (document.URL.includes("send=true")) {
        alert("Tak for din mail :)");
    }
        if (document.URL.includes("send=false")) {
        alert("Hov der gik noget galt");
    }
    }, 100);
}
