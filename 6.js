function mrBruno(operasi, n, arr){

    let arr1 = [];
    for(let i=1; i<=n; i++){
        arr1.push(i); 
    }
    
    let arr2 = arr1.toString();
    let rgx = new RegExp(',')
    for(let j=1; j<n; j++){
       arr2 = arr2.replace(rgx, '');
    }
    
    switch(operasi){
        case "SUM":
            let sum = 0;
            for(let i=0; i<arr.length; i++){
                arr[i] = arr2[(arr[i])-1];
                sum = sum + parseInt(arr[i]);
            }
            alert(sum);
            break;

        case "MUL":
            let mul = 1;
                for(let i=0; i<arr.length; i++){
                    arr[i] = arr2[(arr[i])-1];
                    mul = mul * parseInt(arr[i]);
                }
                alert(mul);
            break;

        case "SUB":
            let sub = 0;
            for(let i=0; i<arr.length; i++){
                arr[i] = arr2[(arr[i])-1];
                if(i===0){
                    sub = sub + parseInt(arr[i]);
                }else{
                    sub = sub - parseInt(arr[i]);
                }
                
            }
            alert(sub);
            break;

        case "DIV":
            let div = 0;
            for(let i=0; i<arr.length; i++){
                arr[i] = arr2[(arr[i])-1];
                if(i===0){
                    div = div + parseInt(arr[i]);
                }else{
                    div = div / parseInt(arr[i]);
                }
                
            }
            alert(div);
            break;
    }

}

mrBruno("MUL",20,[12,15,17]);