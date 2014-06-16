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

function getAnswer(idAnswer){
    var xhr = getXMLHttpRequest();
    xhr.open("GET", "")
}