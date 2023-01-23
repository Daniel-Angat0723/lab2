//Typing effect
var type = new Typed (".auto-type",{
    strings: ["CODER", "STUDENT", "GAMER", "CYCLIST", "WEIGHT LIFTER"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
    })
//Mute and Unmute Button for interest video
var vid = document.getElementById("interest-vid");

        function mute() { 
            vid.muted = true;
        }
        function umute(){
            vid.muted = false
        }

        function clicked(){
            if (vid.muted === false){
                mute();
                document.getElementById("unmute-button").innerHTML = "Unmute Video";
            }else{
                umute();
                document.getElementById("unmute-button").innerHTML = "Mute Video";
            }
            
        }
//Puts Text in a span
document.getElementById("rev").innerHTML = " Unmute the video for awesome beats and revgasm!";
//Added Time at footer
function display_c(){
    var refresh = 1000;
    mytime=setTimeout('display_ct()',refresh)
}

function display_ct(){
    var x = new Date()
    document.getElementById('ct').innerHTML = x;
    display_c();
}
//Opening Greetings
$(document).ready(function(){
    let timerInterval
    Swal.fire({
    title: 'Hello human welcome to my profile page!',
    text: 'I give you this great opportunity to look at this fine machinery for 10 seconds.',
    imageUrl: 'https://i0.wp.com/www.asphaltandrubber.com/wp-content/uploads/2020/11/2021-Kawasaki-Ninja-ZX-10R-KRT-35-scaled.jpg?ssl=1',
    imageWidth: 600,
    imageHeight: 400,
    imageAlt: 'Custom image',
    timer: 10000,
    timerProgressBar: true,
    background:'#242526',
    color:'whitesmoke',
    didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
        b.textContent = Swal.getTimerLeft()
        }, 100)
    },
    willClose: () => {
        clearInterval(timerInterval)
    }
    }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
    }
    })
   
});