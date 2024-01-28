window.addEventListener("scroll", fadein);
function fadein() {
    // buat card yang blm bayar
    let cardfalse = document.querySelectorAll('.animation')
    for (let i = 0; i < cardfalse.length; i++) {
        if (cardfalse[i].getBoundingClientRect().top <= 330.316650390625) {
            cardfalse[i].classList.add('bawah');
        }
        else {
            cardfalse[i].classList.remove('bawah');
        }
    }
        // buat card yang udh bayar
        let cardtrue = document.querySelectorAll(".animation2")
        for (let i = 0; i < cardtrue.length; i++) {
            if (cardtrue[i].getBoundingClientRect().top <= 330.316650390625) {
                cardtrue[i].classList.add('atas');
            }
            else {
                cardtrue[i].classList.remove('atas');
            }
            
        }
        // buat footer
        let cardtruebawah = document.querySelectorAll(".animation2bawah")
        for (let i = 0; i < cardtruebawah.length; i++) {
            if (cardtruebawah[i].getBoundingClientRect().top <= 330.316650390625) {
                cardtruebawah[i].classList.add('bawah');
            }
            else {
                cardtruebawah[i].classList.remove('bawah');
            }
            
        }
        // buat footer
      let footer=document.getElementsByClassName("animationfooter")
      for(let i = 0 ; i<footer.length;i++)
      {
      if (footer[i].getBoundingClientRect().top <= 830.316650390625) {
          footer[i].classList.add('kanan');
        }
        else {
            footer[i].classList.remove('kanan');
        }
    }
}




