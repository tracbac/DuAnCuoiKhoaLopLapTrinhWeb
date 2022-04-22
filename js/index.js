function getvalue(id) {
    return document.getElementById(id).valua.trim()
    
}function showError(key,mess) {
    document.getElementById(key + '_error').innerHTML = mess
    
}function validate() {
    var flag = true ;
    var username = getvalue('username')
;
if (username===''||username.length > 5 ||!/^[a-zA-Z0-9] +$/.test(username)) {
    flag= flag;
    showError('username','vui long kiem tra lai')
    }
}
