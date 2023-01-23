
/* BURGER */

const burger = document.querySelector('.burger');

burger.addEventListener ('click', () => {
    burger.classList.toggle('active');
});

let menuBox = document.getElementById("menuBox");
let menuIcon = document.getElementById("menuIcon");

menuIcon.onclick = function() {
    menuBox.classList.toggle("open-menu");  
}



/* CARROUSEL */


/* images affichées carrousel */

clothing=document.getElementById("clothing");
decoration=document.getElementById("decoration");
multimedia=document.getElementById("multimedia");
books=document.getElementById("books");
toys=document.getElementById("toys");
aesthetic=document.getElementById("aesthetic");
various=document.getElementById("various");

document.body.onload=function() {

    nbr=3;
    p=0;    

    clothing.style.width=(350*nbr)+"px";
    decoration.style.width=(350*nbr)+"px";
    multimedia.style.width=(350*nbr)+"px";
    books.style.width=(350*nbr)+"px";
    toys.style.width=(350*nbr)+"px";
    aesthetic.style.width=(350*nbr)+"px";
    various.style.width=(350*nbr)+"px";

    for(i=1; i<=nbr; i++) {

        div1=document.createElement("div");
        div1.className="picture";
        div1.style.backgroundImage="url('assets/images/cloth"+i+".png')";
        clothing.appendChild(div1);

        div2=document.createElement("div");
        div2.className="picture";
        div2.style.backgroundImage="url('assets/images/deco"+i+".png')";
        decoration.appendChild(div2);

        div3=document.createElement("div");
        div3.className="picture";
        div3.style.backgroundImage="url('assets/images/multi"+i+".png')";
        multimedia.appendChild(div3);

        div4=document.createElement("div");
        div4.className="picture";
        div4.style.backgroundImage="url('assets/images/books"+i+".png')";
        books.appendChild(div4);

        div5=document.createElement("div");
        div5.className="picture";
        div5.style.backgroundImage="url('assets/images/toys"+i+".png')";
        toys.appendChild(div5);

        div6=document.createElement("div");
        div6.className="picture";
        div6.style.backgroundImage="url('assets/images/aesth"+i+".png')";
        aesthetic.appendChild(div6);

        divZ=document.createElement("div");
        divZ.className="picture";
        divZ.style.backgroundImage="url('assets/images/var"+i+".png')";
        various.appendChild(divZ);
    }

    afficherMasquer1();
    afficherMasquer2();
    afficherMasquer3();
    afficherMasquer4();
    afficherMasquer5();
    afficherMasquer6();
    afficherMasquerZ();
}

/* fonction onclick boutons */

/* clothing */

g1=document.getElementById("g1");
d1=document.getElementById("d1");

d1.onclick=function() {
    if(p>-nbr+1)
        p--;
        clothing.style.transform="translate("+p*350+"px)";
        clothing.style.transition="all 0.5s ease";
        
        afficherMasquer1();
}

g1.onclick=function() {
    if(p<0)
        p++;
        clothing.style.transform="translate("+p*350+"px)";
        clothing.style.transition="all 0.5s ease";

        afficherMasquer1();
}

/* decoration */

g2=document.getElementById("g2");
d2=document.getElementById("d2");

d2.onclick=function() {
    if(p>-nbr+1)
        p--;
        decoration.style.transform="translate("+p*350+"px)";
        decoration.style.transition="all 0.5s ease";
        
        afficherMasquer2();
}

g2.onclick=function() {
    if(p<0)
        p++;
        decoration.style.transform="translate("+p*350+"px)";
        decoration.style.transition="all 0.5s ease";

        afficherMasquer2();
}

/* multimedia */

g3=document.getElementById("g3");
d3=document.getElementById("d3");

d3.onclick=function() {
    if(p>-nbr+1)
        p--;
        multimedia.style.transform="translate("+p*350+"px)";
        multimedia.style.transition="all 0.5s ease";
        
        afficherMasquer3();
}

g3.onclick=function() {
    if(p<0)
        p++;
        multimedia.style.transform="translate("+p*350+"px)";
        multimedia.style.transition="all 0.5s ease";

        afficherMasquer3();
}

/* books */

g4=document.getElementById("g4");
d4=document.getElementById("d4");

d4.onclick=function() {
    if(p>-nbr+1)
        p--;
        books.style.transform="translate("+p*350+"px)";
        books.style.transition="all 0.5s ease";
        
        afficherMasquer4();
}

g4.onclick=function() {
    if(p<0)
        p++;
        books.style.transform="translate("+p*350+"px)";
        books.style.transition="all 0.5s ease";

        afficherMasquer4();
}

/* toys */

g5=document.getElementById("g5");
d5=document.getElementById("d5");

d5.onclick=function() {
    if(p>-nbr+1)
        p--;
        toys.style.transform="translate("+p*350+"px)";
        toys.style.transition="all 0.5s ease";
        
        afficherMasquer5();
}

g5.onclick=function() {
    if(p<0)
        p++;
        toys.style.transform="translate("+p*350+"px)";
        toys.style.transition="all 0.5s ease";

        afficherMasquer5();
}

/* aesthetic */

g6=document.getElementById("g6");
d6=document.getElementById("d6");

d6.onclick=function() {
    if(p>-nbr+1)
        p--;
        aesthetic.style.transform="translate("+p*350+"px)";
        aesthetic.style.transition="all 0.5s ease";
        
        afficherMasquer6();
}

g6.onclick=function() {
    if(p<0)
        p++;
        aesthetic.style.transform="translate("+p*350+"px)";
        aesthetic.style.transition="all 0.5s ease";

        afficherMasquer6();
}

/* various */

gZ=document.getElementById("gZ");
dZ=document.getElementById("dZ");

dZ.onclick=function() {
    if(p>-nbr+1)
        p--;
        various.style.transform="translate("+p*350+"px)";
        various.style.transition="all 0.5s ease";
        
        afficherMasquerZ();
}

gZ.onclick=function() {
    if(p<0)
        p++;
        various.style.transform="translate("+p*350+"px)";
        various.style.transition="all 0.5s ease";

        afficherMasquerZ();
}

/* fonction afficher boutons */

/* clothing */

function afficherMasquer1() {
    if(p==-nbr+1) {
        d1.style.visibility="hidden";
    }
    else {
        d1.style.visibility="visible"};

    if(p==0) {
        g1.style.visibility="hidden";
    }
    else {g1.style.visibility="visible";}
}

/* decoration */

function afficherMasquer2() {
    if(p==-nbr+1) {
        d2.style.visibility="hidden";
    }
    else {
        d2.style.visibility="visible"};

    if(p==0) {
        g2.style.visibility="hidden";
    }
    else {g2.style.visibility="visible";}
}

/* multimedia */

function afficherMasquer3() {
    if(p==-nbr+1) {
        d3.style.visibility="hidden";
    }
    else {
        d3.style.visibility="visible"};

    if(p==0) {
        g3.style.visibility="hidden";
    }
    else {g3.style.visibility="visible";}
}

/* books */

function afficherMasquer4() {
    if(p==-nbr+1) {
        d4.style.visibility="hidden";
    }
    else {
        d4.style.visibility="visible"};

    if(p==0) {
        g4.style.visibility="hidden";
    }
    else {g4.style.visibility="visible";}
}

/* toys */

function afficherMasquer5() {
    if(p==-nbr+1) {
        d5.style.visibility="hidden";
    }
    else {
        d5.style.visibility="visible"};

    if(p==0) {
        g5.style.visibility="hidden";
    }
    else {g5.style.visibility="visible";}
}

/* aesthetic */

function afficherMasquer6() {
    if(p==-nbr+1) {
        d6.style.visibility="hidden";
    }
    else {
        d6.style.visibility="visible"};

    if(p==0) {
        g6.style.visibility="hidden";
    }
    else {g6.style.visibility="visible";}
}

/* various */

function afficherMasquerZ() {
    if(p==-nbr+1) {
        dZ.style.visibility="hidden";
    }
    else {
        dZ.style.visibility="visible"};

    if(p==0) {
        gZ.style.visibility="hidden";
    }
    else {gZ.style.visibility="visible";}
}











