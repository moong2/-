var backgroundImg = new Array();
backgroundImg[0] = "1.jpg";
backgroundImg[1] = "2.jpg";
backgroundImg[2] = "3.jpg";
backgroundImg[3] = "4.jpg";
backgroundImg[4] = "5.jpg";
backgroundImg[5] = "6.jpg";
backgroundImg[6] = "7.jpg";
backgroundImg[7] = "8.jpg";
backgroundImg[8] = "9.jpg";
backgroundImg[9] = "10.jpg";

function showImage(){
    var imgNum = Math.round(Math.random()*9);
    var objImg = document.getElementById("introImg");
    objImg.src = backgroundImg[imgNum];

    setTimeout("showImage()", 5000);
}