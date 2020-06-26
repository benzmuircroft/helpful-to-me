var a=location.href.split('?')[1];
var z="";
for(var i=0;i<a.length;i++){
    if((a.charCodeAt(i)>64&&a.charCodeAt(i)<78)||(a.charCodeAt(i)>96&&a.charCodeAt(i)<110)){
        z=z+String.fromCharCode(a.charCodeAt(i)+13);
        }
    else if((a.charCodeAt(i)>77&&a.charCodeAt(i)<91)||(a.charCodeAt(i)>109&&a.charCodeAt(i)<123)){
        z=z+String.fromCharCode(a.charCodeAt(i)-13);
        }
    else{
        z=z+a[i];
        }
    }
document.write(z);
