window.addEventListener("scroll",animasi);
function animasi(){
        let spotlight = document.getElementsByClassName('spotlight')
        let spotlightcontent = document.getElementsByClassName('contentian')
        let spotlightcontent2 = document.getElementsByClassName('contentian2')
        let upcoming= document.getElementsByClassName('animasiupcoming')        
        // SPOTLIGHT
        for(let i = 0;i<spotlight.length;i++){
        if (spotlight[i].getBoundingClientRect().top<=400) {
            spotlight[i].classList.add('fadein')
        }
        else
        {
            spotlight[i].classList.remove('fadein')

        }
    }
        // CONTENT SPOTLIGHT
        for(let i = 0;i<spotlightcontent.length;i++){
            if (spotlightcontent[i].getBoundingClientRect().top<=362.875) {
            spotlightcontent[i].classList.add('kiri')   
        }
        else
        {
            spotlightcontent[i].classList.remove('kiri')
         
        }
    }
        for(let i = 0;i<spotlightcontent2.length;i++){
            if (spotlightcontent2[i].getBoundingClientRect().top<=362.875) {
            spotlightcontent2[i].classList.add('kanan')            
        }
        else
        {
            spotlightcontent2[i].classList.remove('kanan')

        }
    }

    console.log(upcoming[0].getBoundingClientRect().top);
        for(let i = 0;i<upcoming.length;i++){
            if (upcoming[i].getBoundingClientRect().top<=462.875) {
            upcoming[i].classList.add('zoomin')            
        }
        else
        {
            upcoming[i].classList.remove('zoomin')
        }
    }
    
}
