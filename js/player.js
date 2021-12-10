const songsNames = document.getElementById('songs');
let songs = Array();

const skipStart = document.getElementById('lastSong');
const playPause = document.getElementById('playPause');
const skipEnd = document.getElementById('nextSong');

const displaySong = document.getElementById('songName');

let currentSong;


/**********************************************
 *                 DOM EVENTS                 *
 **********************************************/
window.addEventListener('load', () => {
  for(let i = 0; i < songsNames.getElementsByTagName('div').length; i++){
    let songName = songsNames.getElementsByTagName('div')[i].innerText;
  
    songs[i] = new Audio(`./music/${songName}`); 
  }
  
  currentSong = songs[0];
  playingSong();
});

playPause.addEventListener('click', () => {
  if(playPause.className == 'bi bi-play-fill'){
    play();
  
  } else {
    pause();
  }
});

skipStart.addEventListener('click', () => {
  pause();

  let match = true;
  let i = 0;

  while(i < songs.length && match) {
    if(songs[i] == currentSong){
      match = false;
      
      if (i === 0){
        currentSong = songs[songs.length - 1];
      
      } else {
        currentSong = songs[i-1];
      }
    
    } else {
      i++;
    }
  }

  play();
  playingSong();
});

skipEnd.addEventListener('click', () => {
  pause();

  let match = true;
  let i = 0;

  while(i < songs.length && match) {
    if(songs[i] == currentSong){
      match = false;
      
      if (i == songs.length - 1){
        currentSong = songs[0];
      
      } else {
        currentSong = songs[i + 1];
      }
    
    } else {
      i++;
    }
  }

  play();
  playingSong();
});

/**********************************************
 *                 FUNCTIONS                  *
 **********************************************/
function play(){
  playPause.className = 'bi bi-pause-fill';
  currentSong.play();
}

function pause(){
  playPause.className = 'bi bi-play-fill';
  currentSong.pause();
}

function playingSong(){
  let name = decodeURI(currentSong.src.split('/')[currentSong.src.split('/').length - 1].split('.')[0]);

  displaySong.innerHTML = name;
}