AFRAME.registerComponent('videoplayer', {

      init: function () {

        let videosource = document.querySelector('#videoclip');

        let videoplay = () => {
        videosource.play();
	console.log("play button werks");
        }

        this.el.addEventListener('click', videoplay);

      }});

AFRAME.registerComponent('videopauser', {

      init: function () {

        let videosource = document.querySelector('#videoclip');

        let videopause = () => {
        videosource.pause();
	console.log("pause button werks")
        }

        this.el.addEventListener('click', videopause);

      }});
