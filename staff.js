function info(param){
    var element = param.parentNode.parentNode.firstElementChild;
    element.classList.toggle("show-info");
    element.nextElementSibling.classList.toggle("show-info");
    element.nextElementSibling.nextElementSibling.classList.toggle("show-info");
}