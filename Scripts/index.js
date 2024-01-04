//Navbar
window.addEventListener("scroll", function()    {
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY)
});


//Homepage ad
var i = 0;
var images = document.querySelectorAll('.ad .slide');
function changeImg() {
    images[i].style.display = 'none';
    i = (i + 1) % images.length;
    images[i].style.display = 'block';
    setTimeout(changeImg, 4000);
}
function goPrev() {
    images[i].style.display = 'none';
    i = (i - 1 + images.length) % images.length;
    images[i].style.display = 'block';
}
function goNext() {
    images[i].style.display = 'none';
    i = (i + 1) % images.length;
    images[i].style.display = 'block';
}
window.onload = changeImg;


//About page gallery
document.querySelectorAll('.slider .box').forEach(box => {
    box.onclick = () => {
        const popup = document.querySelector('.popup');
        const popupImg = document.querySelector('.popup img');
        popup.style.display = 'block';
        popupImg.src = box.querySelector('img').src;
    }
});
document.querySelector('.popup span').onclick = document.querySelector('.popup img').onclick = () => {
    document.querySelector('.popup').style.display = 'none';
}


//contact us
function hide(){
    document.getElementById("menu").checked = false
}

//Contact Us form submission

