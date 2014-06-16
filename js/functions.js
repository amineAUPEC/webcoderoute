/**
 * Created by franckmazzolo on 16/06/2014.
 */

/**
 * Create an XHR object
 * @returns {*} an xhr instance
 */
function getXMLHttpRequest() {
    var xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return xhr;
}

function getAnswer(idAnswer, sync){
    var answer ='';
    var xhr = getXMLHttpRequest();
    xhr.open("GET", "getAnswer.php?idAnswer="+idAnswer, sync);
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            answer = xhr.responseText;
        }
    };
    xhr.send(null);
    return answer;
}

function getQuestion(idQuestion, sync){
    var question ='';
    var xhr = getXMLHttpRequest();
    xhr.open("GET", "getQuestion.php?idQuestion="+idQuestion, sync);
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            question = xhr.responseText;
        }
    }
    xhr.send(null);
    return question;
}