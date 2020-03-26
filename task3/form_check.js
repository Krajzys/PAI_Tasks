function isWhiteSpaceOrEmpty(some_string) {
	return /^[\s\t\r\n]*$/.test(some_string);
}

function isEmailInvalid(some_string) {
	let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
	if (email.test(some_string)) {
		return false;
	}
	else {
		return true;
	}
}

function checkStringAndFocus(obj, message, valFunc) {
	let str = obj.value;
	let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
	if (valFunc(str)) {
		document.getElementById(errorFieldName).innerHTML = message;
		obj.focus();
		return false;
	}
	else {
		document.getElementById(errorFieldName).innerHTML = "";
		return true;
	}
}

function showElement(e) {
	document.getElementById(e).style.visibility = "visible";
}

function hideElement(e) {
	document.getElementById(e).style.visibility = "hidden";
}

function alterRows(i, e) {
	if (e) {
		if (i % 2 == 1) {
			e.setAttribute("style", "background-color: Aqua;");
		}
		e = e.nextSibling;
		while (e && e.nodeType != 1) {
			e = e.nextSibling;
		}
		alterRows(++i, e);
	}
}

function nextNode(e) {
	while (e && e.nodeType != 1) {
		e = e.nextSibling;
	}
	return e;
}
function prevNode(e) {
	while (e && e.nodeType != 1) {
		e = e.previousSibling;
	}
	return e;
}
function swapRows(b) {
	let tab = prevNode(b.previousSibling);
	let tBody = nextNode(tab.firstChild);
	let lastNode = prevNode(tBody.lastChild);
	tBody.removeChild(lastNode);
	let firstNode = nextNode(tBody.firstChild);
	tBody.insertBefore(lastNode, firstNode);
}

function cnt(form, msg, maxSize) {
	if (form.value.length > maxSize) {
		form.value = form.value.substring(0, maxSize);
	}
	else {
		msg.innerHTML = maxSize - form.value.length;
	}
}

function validate(form) {
	if (checkStringAndFocus(form.elements["f_imie"], "Podaj poprawne imię!", isWhiteSpaceOrEmpty) &&
		checkStringAndFocus(form.elements["f_nazwisko"], "Podaj poprawne nazwisko!", isWhiteSpaceOrEmpty) &&
		checkStringAndFocus(form.elements["f_email"], "Podaj poprawny email!", isEmailInvalid) &&
		checkStringAndFocus(form.elements["f_kod"], "Podaj poprawny kod!", isWhiteSpaceOrEmpty) &&
		checkStringAndFocus(form.elements["f_ulica"], "Podaj poprawną ulicę!", isWhiteSpaceOrEmpty) &&
		checkStringAndFocus(form.elements["f_miasto"], "Podaj poprawne miasto!", isWhiteSpaceOrEmpty)) {
		return true
	}
	
	return false;
}