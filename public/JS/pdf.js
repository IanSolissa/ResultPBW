window.onload=function(){
    document.getElementById("download").addEventListener("click",()=>{
        const pdf=this.document.getElementById('Bukti_transaksi');
        html2pdf().from(pdf).save();
    })
}
