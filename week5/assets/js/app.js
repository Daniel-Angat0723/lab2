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