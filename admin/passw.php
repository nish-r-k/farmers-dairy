<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Confirm Password Check | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container">
         <header>Confirm Password Check in <br>HTML CSS & JavaScript</header>
         <form action="#">
            <div class="error-text"></div>
            <div class="field">
               <input onkeyup="active()" id="pswrd_1" type="password" placeholder="Enter Password">
            </div>
            <div class="field">
               <input onkeyup="active_2()" id="pswrd_2" disabled type="password" placeholder="Confirm Password">
               <div class="show">
                  SHOW
               </div>
            </div>
            <button disabled>Check</button>
         </form>
      </div>
      <script>
         const pswrd_1 = document.querySelector("#pswrd_1");
         const pswrd_2 = document.querySelector("#pswrd_2");
         const errorText = document.querySelector(".error-text");
         const showBtn = document.querySelector(".show");
         const btn = document.querySelector("button");
         function active(){
           if(pswrd_1.value.length >= 6){
             btn.removeAttribute("disabled", "");
             btn.classList.add("active");
             pswrd_2.removeAttribute("disabled", "");
           }else{
             btn.setAttribute("disabled", "");
             btn.classList.remove("active");
             pswrd_2.setAttribute("disabled", "");
           }
         }
         btn.onclick = function(){
           if(pswrd_1.value != pswrd_2.value){
             errorText.style.display = "block";
             errorText.classList.remove("matched");
             errorText.textContent = "Error! Confirm Password Not Match";
             return false;
           }else{
             errorText.style.display = "block";
             errorText.classList.add("matched");
             errorText.textContent = "Nice! Confirm Password Matched";
             return false;
           }
         }
         function active_2(){
           if(pswrd_2.value != ""){
             showBtn.style.display = "block";
             showBtn.onclick = function(){
               if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
                 pswrd_1.type = "text";
                 pswrd_2.type = "text";
                 this.textContent = "Hide";
                 this.classList.add("active");
               }else{
                 pswrd_1.type = "password";
                 pswrd_2.type = "password";
                 this.textContent = "Show";
                 this.classList.remove("active");
               }
             }
           }else{
             showBtn.style.display = "none";
           }
         }
      </script>
   </body>
</html>