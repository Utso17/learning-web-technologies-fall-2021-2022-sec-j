var number = document.getElementsByClassName("number");
    for(var i =0;i<number.length;i++){
        number[i].addEventListener('click',function(){
        var output=reverseNumberFormat(getOutput());
            if(output!=NaN){ 
                output=output+this.id;
                printOutput(output);
                }