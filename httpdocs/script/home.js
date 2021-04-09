//--------------------------------------------SCRIPT HOME--------------------------------------------------
var infosMoi = document.querySelector('#btn-infos-moi');
var myInfos = document.querySelector('#myInfos');
var aboutDev = document.querySelector('#about-dev');
var btnDev = document.querySelector('#btnDev');


// Request AJAX html CONTENT TEXT MORE ABOUT ME
function pullMyinfos(e) {
    e.preventDefault();
    var httprequest = new XMLHttpRequest();
    if (!httprequest) {
        alert("La requête à été avorté");
        return false
    }
    httprequest.onreadystatechange = alertContents;
    httprequest.open('GET', 'elements/additionnal-content/about-me.html', true);
    httprequest.send();

    function alertContents() {
        if (httprequest.readyState === XMLHttpRequest.DONE) {
            if (httprequest.status === 200) {
                myInfos.innerHTML = this.responseText;
                console.log(myInfos);
                infosMoi.classList.add('display-none');
            } else {
                alert("Impossible d'éxecuter la requete");
            }
        } else {
            console.log("requete n'a pas été executée")
        }
    }
}

// Request AJAX html CONTENT TEXT MORE ABOUT ME
function pullAboutDev(e) {
    e.preventDefault();
    var httprequest = new XMLHttpRequest();
    if (!httprequest) {
        alert("La requête à été avorté");
        return false
    }
    httprequest.onreadystatechange = alertContents;
    httprequest.open('GET', 'elements/additionnal-content/about-dev.html', true);
    httprequest.send();

    function alertContents() {
        if (httprequest.readyState === XMLHttpRequest.DONE) {
            if (httprequest.status === 200) {
                aboutDev.innerHTML = this.responseText;
                btnDev.classList.add('display-none');
            } else {
                alert("Impossible d'éxecuter la requete");
            }
        } else {
            console.log("requete n'a pas été executée")
        }
    }
}
btnDev.addEventListener('click', pullAboutDev);
infosMoi.addEventListener('click', pullMyinfos);
