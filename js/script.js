var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000);
}

var hamburger=document.querySelector(".hamburger")
var navigation=document.querySelector(".navigation")
var navbar1=document.querySelector(".navbar")
var navbar=document.querySelector(".navbar")
var nav=document.querySelector(".nav")
var search=document.querySelector(".search-btn")
var search_text=document.querySelector(".search-text")

search.addEventListener('click',()=>{
  search_text.classList.toggle('search-text-resp');
})
hamburger.addEventListener('click', ()=>{
  navigation.classList.toggle('navigation-resp');
  nav.classList.toggle('nav-resp');
  search.classList.toggle('search-btn-resp');
  navbar.classList.toggle('navbar-resp');
})

function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            } 