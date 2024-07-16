// alert login
function confirmationLogin(ev){
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
    title: "AREA TERLARANG",
    text: "Hanya Admin Yang Bisa Login",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })

    .then((willCancel)=>{
    if(willCancel){
        window.location.href = urlToRedirect;
    }
    });
}
// alert login selesai

// fitur blog
function confirmationReadMore(ev){
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
    title: "COOMING SOON",
    text: "Fitur Sedang dalan Tahap Pengembangan",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })

    .then((willCancel)=>{
    if(willCancel){
        window.location.href = urlToRedirect;
    }
    });
}
// fitur blog selesai