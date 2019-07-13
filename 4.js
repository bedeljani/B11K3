function BilPrima(bil){
    for(let i=2; i<bil; i++){
        if(bil % i == 0){
            return false;
        }
    }
  return bil > 1;
}

function buyEgg(tanggal, uang){
    var harga = 2000;
    var telur = Math.floor(uang/harga);
    if(tanggal % 5 == 0){
        if(BilPrima(tanggal)){
            bonus = Math.floor(telur/12);
            if(bonus % 2 == 0){
                bonus = bonus*10;
                telur = telur + bonus;
                console.log(telur);
            } else{
                bonus = bonus * 5;
                telur = telur+bonus;
                console.log(telur);
            }
        }else{
            bonus = Math.floor(telur/20);
            bonus = bonus*3;
            if(bonus % 2 == 0){
                bonus = bonus * 10;
                telur = telur + bonus;
                console.log(telur);
            } else{
                bonus = bonus * 5;
                telur = telur+bonus;
                console.log(telur);
            }
        }
    }else{
        if(BilPrima(tanggal)){
            bonus = Math.floor(telur/12);
            telur = telur + bonus;
            console.log(telur);
        }else{
            bonus = Math.floor(telur/20);
            telur = telur + bonus;
            console.log(telur);
        }
    }
}



buyEgg(25, 50000);
