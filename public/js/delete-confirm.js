
var confirm_delete = document.getElementsByClassName('confirm');
for(i=0;i<confirm_delete.length;i++){
    confirm_delete[i].onsubmit=function(e){
        var sure=confirm('Are You Sure?');
        if(!sure){
            e.preventDefault();
        }
    }
}