import gsap from 'gsap';


class Menu{

    constructor(){

        this.icon = document.querySelector(".menu-icon")
        this.toggle = false;

        this.listeners()
    }

    listeners(){
            this.icon.addEventListener("click",() => {
                if(this.toggle==false){
                    this.open();
                }else{
                    this.close();
                }
            });
        

    }

    open(){

        let tl = gsap.timeline();

        tl.set(".menu",{display:'block'});
        tl.to(".menu",{autoAlpha:1,ease:"power4.easeInOut"});
        this.toggle = true;


    }


    close(){
        let tl = gsap.timeline();

        tl.to(".menu",{autoAlpha:0,ease:"power4.easeInOut"});
        tl.set(".menu",{display:'none'});
        this.toggle= false;


    }

}

export default Menu;