window.addEventListener("scroll", function()    {
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY)
})


var i = 0;
var images = [];

images[0] = "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
images[1] = "https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
images[2] = "https://plus.unsplash.com/premium_photo-1671069848075-c9faefe4df18?q=80&w=1373&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
images[3] = "https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"

function changeImg(){
    document.slide.src = images[i];
    if(i < images.length - 1){
        i++; 
	}
    else { 
        i = 0;
    }
    setTimeout("changeImg()", 4000);
}

const goPrev = ()=>{
    i--;
    changeImg();
}
const goNext = ()=>{
    changeImg();
}
window.onload = changeImg;