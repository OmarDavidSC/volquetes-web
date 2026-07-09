function changeProductImage(element, id) {
    const image = document.getElementById(id);
    image.src = element.src;
    const thumbs = element.parentElement.querySelectorAll(".thumb");
    thumbs.forEach(item => item.classList.remove("active"));
    element.classList.add("active");
}

function changeModalImage(element){
    const image=document.getElementById("productDetailImage");
    image.src=element.src;
    document
        .querySelectorAll(".product-detail-thumb")
        .forEach(item=>item.classList.remove("active"));
    element.classList.add("active");

}