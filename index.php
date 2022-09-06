<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.typekit.net/klv8jnv.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Darkmode</title>
        <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRU5nkITUsRNzTmiPH0dIkECu8xZ75iM3OjA&usqp=CAU">
      
    </head>
  <span class="wave"></span> 
  <section>  
   <div class="container">  
    <h1>DarkMode</h1>  
    <p>Dark Mode is an extension that helps you quickly turn the screen (browser) to dark at night time.

Toolbar button serves as an ON|OFF switch which enables you to easily and quickly turn the extension ON or OFF.</p>  
    <button>Hello!</button>  
   </div>  
  </section>  
  <div class="theme-switcher">  
   <input type="checkbox" id="switcher">  
   <label for=switcher>switch</label>  
  </div>  

  <script>
 const input = document.querySelector(".theme-switcher input");  
 input.addEventListener("change", (e) => {  
  if (e.target.checked) {  
   document.body.setAttribute("data-theme", "dark");  
  } else {  
   document.body.setAttribute("data-theme", "light");  
  }  
 });  

  </script>

 </body> 
    </html>