import gsap from 'gsap';


class Menu{

    constructor(){

        this.icon = document.querySelector(".menu-icon")
        this.listeners()
    }

    listeners(){
        
        this.icon.addEventListener("click",this.open.bind());

    }

    open(){

        let tl = gsap.timeline()

        tl.set(".menu",{display:'block'});
        tl.to(".menu",{autoAlpha:1,ease:"power4.easeInOut"});
    }


}

export default Menu;