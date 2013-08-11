
function promptBox()
{
	var txt = 'nothing';
    if (window.getSelection){
        txt = window.getSelection();
    } else if (document.getSelection) {
        txt = document.getSelection();
    } else if (document.selection) {
        txt = document.selection.createRange().text;
    } else return;

    alert(txt);
window.location = "http://localhost/hack/index.php?text="+txt;
}

chrome.extension.onClicked.addListener(promptBox());