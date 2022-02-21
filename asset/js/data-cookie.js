function createCookie(name, value){
    document.cookie = name+'='+value+';path=/';
}

function readCookie(name){
    let nameAndEgal = name + '=';
    let cTable = document.cookie.split(';');

    for(let i = 0; i<cTable.length; i++){
        let c = cTable[i];
        while (c.charAt(0)==' '){
            c= c.substring(1, c.length);
        }
        if (c.indexOf(nameAndEgal)== 0){
            return c.substring(nameAndEgal.length, c.length);
        }
    }
    return null
}

function supprCookie(name){
    createCookie(name, '');
}
