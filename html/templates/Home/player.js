const player = document.getElementById("player");
let progess = document.getElementById("progess");
let playBtn = document.getElementById("playBtn");

const playPause = function() {
    if (player.paused){
        player.play();  
    }else{
        player.pause();
    }
}

playBtn.addEventListener("click", playPause);

playBtn.onplay = function(){
    playBtn.classList.add("fa-pause");
    playBtn.classList.remove("fa-play");
}

playBtn.onpause = function(){
    playBtn.classList.add("fa-pause");
    playBtn.classList.remove("fa-play");
}

playBtn.ontimeupdate = function(){
    let ct = player.currentTime;
    current.innerHTML = timeFormat(ct);

    let duration = player.duration;
    prog=Math.floor((ct * 100)/duration);
    progess.style.setProperty("--progress", prog + "%")
}

function timeFormat(ct){
    minutes = Math.floor(ct / 60);
    seconds = Math.floor(ct % 60);

    if(seconds < 10){
        seconds = "0"+seconds;
    }
    return minutes + ":" + seconds; 
}