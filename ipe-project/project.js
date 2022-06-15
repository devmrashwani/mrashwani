let zoom =  document.getElementById("intro");

setTimeout(() => {
    zoom.style.transform = "scale(1)";
}, 5500);
setTimeout(() => {
    zoom.style.transform = "scale(2)";
}, 5550);
setTimeout(() => {
    zoom.style.transform = "scale(3)";
}, 5600);
setTimeout(() => {
    zoom.style.transform = "scale(4)";
}, 5650);
setTimeout(() => {
    zoom.style.transform = "scale(5)";
}, 5700);
setTimeout(() => {
    zoom.style.display = "none";
}, 5750);


// home page shape 

let circle = document.getElementById('circle');
    let circle2 = document.getElementById('circle2');
    let halfc = document.getElementById('halfc');
    let halfc2= document.getElementById('halfc2');
    let hex = document.getElementById('hex');
    let hex2 = document.getElementById('hex2');
    let sha = document.getElementById('sha');
    let sha2 = document.getElementById('sha2');
    let square = document.getElementById('square');
    let square2 = document.getElementById('square2');


    window.addEventListener('scroll',function(){
        let value = window.scrollY;
        circle.style.top = value * -0.5 + 800 + 'px';
        circle.style.left = value * 0.8 + 100 + 'px';
        
        circle2.style.top = value * -0.25 + 1000 + 'px';
        circle2.style.left = value * 0.8 + 500 + 'px';

        halfc.style.top = value * -0.3 + 900 + 'px';
        halfc.style.left = value * 0.4 + 70 + 'px';

        halfc2.style.top = value * -0.3 + 750 + 'px';
        halfc2.style.left = value * 0.4 + 450 +'px';

        hex.style.top = value * -0.5 + 850 + 'px';
        hex.style.left = value * 0.4 + 200 + 'px';

        hex2.style.top = value * -0.5 + 890 + 'px';
        hex2.style.left = value * 0.4 + 430 + 'px';

        sha.style.top = value * -0.10 + 900 + 'px';
        sha.style.left = value * 0.15 + 250 + 'px';

        sha2.style.top = value * -0.10 + 950 + 'px';
        sha2.style.left = value * 0.15 + 150 + 'px';

        square.style.top = value * -0.8 + 950 + 'px';
        square.style.left = value * 0.18 + 150 + 'px';
        
        square2.style.top = value * -0.8 + 1000 + 'px';
        square2.style.left = value * 0.18 + 20 + 'px';

    });


// home page shape 

    let b_circle = document.getElementById('b_circle');
    let b_circle2 = document.getElementById('b_circle2');
    let b_halfc = document.getElementById('b_halfc');
    let b_halfc2= document.getElementById('b_halfc2');
    let b_hex = document.getElementById('b_hex');
    let b_hex2 = document.getElementById('b_hex2');
    let b_sha = document.getElementById('b_sha');
    let b_sha2 = document.getElementById('b_sha2');
    let b_square = document.getElementById('b_square');
    let b_square2 = document.getElementById('b_square2');


    window.addEventListener('scroll',function(){
        let value = window.scrollY;
        b_circle.style.top = value * -0.5 + 1800 + 'px';
        b_circle.style.left = value * 0.8 + 100 + 'px';
        
        b_circle2.style.top = value * -0.25 + 1100 + 'px';
        b_circle2.style.left = value * 0.8 + 500 + 'px';

        b_halfc.style.top = value * -0.3 + 1900 + 'px';
        b_halfc.style.left = value * 0.4 + 70 + 'px';

        b_halfc2.style.top = value * -0.3 + 1750 + 'px';
        b_halfc2.style.left = value * 0.4 + 450 +'px';

        b_hex.style.top = value * -0.5 + 1850 + 'px';
        b_hex.style.left = value * 0.4 + 200 + 'px';

        b_hex2.style.top = value * -0.5 + 1890 + 'px';
        b_hex2.style.left = value * 0.4 + 430 + 'px';

        b_sha.style.top = value * -0.10 + 1900 + 'px';
        b_sha.style.left = value * 0.15 + 250 + 'px';

        b_sha2.style.top = value * -0.10 + 1950 + 'px';
        b_sha2.style.left = value * 0.15 + 150 + 'px';

        b_square.style.top = value * -0.8 + 1950 + 'px';
        b_square.style.left = value * 0.18 + 150 + 'px';
        
        b_square2.style.top = value * -0.8 + 1100 + 'px';
        b_square2.style.left = value * 0.18 + 20 + 'px';

    });




// Program page shape 

    let p_circle = document.getElementById('p_circle');
    let p_circle2 = document.getElementById('p_circle2');
    let p_halfc = document.getElementById('p_halfc');
    let p_halfc2= document.getElementById('p_halfc2');
    let p_hex = document.getElementById('p_hex');
    let p_hex2 = document.getElementById('p_hex2');
    let p_sha = document.getElementById('p_sha');
    let p_sha2 = document.getElementById('p_sha2');
    let p_square = document.getElementById('p_square');
    let p_square2 = document.getElementById('p_square2');


    window.addEventListener('scroll',function(){
        let value = window.scrollY;
        p_circle.style.left = value * 0.25 + 100 + 'px';
        p_circle2.style.left = value * 0.8 + 400 + 'px';
        p_halfc.style.left = value * 0.3 + 200 + 'px';
        p_halfc2.style.left = value * 0.4 + 500 +  'px';
        p_hex.style.left = value * 0.5 + 300 + 'px';
        p_hex2.style.left = value * 0.4 + 100 + 'px';
        p_sha.style.left = value * 0.10 + 400 + 'px';
        p_sha2.style.left = value * 0.15 + 600 + 'px';
        p_square.style.left = value * 0.8 + 700 + 'px';
        p_square2.style.left = value * 0.18 + 'px';
    });


    
// Program page shape 

    let p1_circle = document.getElementById('p1_circle');
    let p1_circle2 = document.getElementById('p1_circle2');
    let p1_halfc = document.getElementById('p1_halfc');
    let p1_halfc2= document.getElementById('p1_halfc2');
    let p1_hex = document.getElementById('p1_hex');
    let p1_hex2 = document.getElementById('p1_hex2');
    let p1_sha = document.getElementById('p1_sha');
    let p1_sha2 = document.getElementById('p1_sha2');
    let p1_square = document.getElementById('p1_square');
    let p1_square2 = document.getElementById('p1_square2');


    window.addEventListener('scroll',function(){
        let value = window.scrollY;
        p1_circle.style.top = value * 0.5 + 1100 + 'px';
        p1_circle2.style.top = value * 0.8 + 1400 + 'px';
        p1_halfc.style.top = value * 0.3 + 1200 + 'px';
        p1_halfc2.style.top = value * 0.4 + 1500 +  'px';
        p1_hex.style.top = value * 0.5 + 1300 + 'px';
        p1_hex2.style.top = value * 0.4 + 1100 + 'px';
        p1_sha.style.top = value * 0.10 + 1400 + 'px';
        p1_sha2.style.top = value * 0.15 + 1200 + 'px';
        p1_square.style.top = value * 0.8 + 700 + 'px';
        p1_square2.style.top = value * 0.18 + 1200 +   'px';

    });
