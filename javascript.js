 let jsonUrl = "http://mathildeoldorf.dk/kea/07-contentmanagement/food8/wordpress/wp-json/wp/v2";

 document.addEventListener("DOMContentLoaded", sidenErLoadet);

 // document.addEventListener("DOMContentLoaded", cirkel);

 function sidenErLoadet() {
     //           hentHeader();
     hentFooter();
     burgermenu();
 }
 // // async function hentHeader() { // let headerData = await fetch("header.html"); // let header = await headerData.text(); // document.querySelector("#header").innerHTML = header; // }

 async function hentFooter() {
     let footerData = await fetch("footer.html");
     let footer = await footerData.text();
     document.querySelector("#footer").innerHTML = footer;
 }


 // BURGERMENU

 function burgermenu() {
     console.log("burgermenu");
     document.querySelector(".burgermenu").addEventListener("mouseover", burgerFarveskiftOver);

     document.querySelector(".burgermenu").addEventListener("mouseout", burgerFarveskiftOut)

     document.querySelector(".burgermenu").addEventListener("click", toggleBurgermenu);
     document.querySelector("#hovedmenu").addEventListener("click", toggleBurgermenu);

     function burgerFarveskiftOver() {
         document.querySelector(".bar1").classList.add("farveskift");
         document.querySelector(".bar2").classList.add("farveskift");
         document.querySelector(".bar3").classList.add("farveskift");
     }

     function burgerFarveskiftOut() {
         document.querySelector(".bar1").classList.remove("farveskift");
         document.querySelector(".bar2").classList.remove("farveskift");
         document.querySelector(".bar3").classList.remove("farveskift");
     }

     function toggleBurgermenu() {
         document.querySelector(".burgermenu").classList.toggle("change");
         document.querySelector(".burgermenu").classList.toggle("skrump");
         document.querySelector("#hovedmenu").classList.toggle("show");
     }
 }
