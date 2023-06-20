// Get the video player element
const videoPlayer = document.getElementById("videoPlayer");

// Define the video sources
const videoSources = [
  "assets/video/01_1.mp4",
  "assets/video/02-2.mp4"
];

// Set the initial source index
let currentSourceIndex = 0;

// Function to play the next video source
function playNextVideo() {
  // Set the source of the video player
  videoPlayer.src = videoSources[currentSourceIndex];

  // Increment the source index
  currentSourceIndex = (currentSourceIndex + 1) % videoSources.length;

  // Play the video
  videoPlayer.play();
}

// Event listener for when the video ends
videoPlayer.addEventListener("ended", playNextVideo);

// Event listener for the modal show event
const videoModal = document.getElementById("videoModal");
videoModal.addEventListener("show.bs.modal", () => {
  // Start playing the videos when the modal is shown
  playNextVideo();
});

// Event listener for the modal close button
const modalCloseButton = document.querySelector(".btn-close");
modalCloseButton.addEventListener("click", () => {
  // Pause the video when the modal is closed
  videoPlayer.pause();
  videoPlayer.src = "";
});

// Event listener for mouseout event on video player
videoPlayer.addEventListener("mouseout", () => {
  // Pause the video when the mouse is moved out of the video player
  videoPlayer.pause();
});

// Event listener for mouseover event on video player
videoPlayer.addEventListener("mouseover", () => {
  // Resume playing the video when the mouse is moved over the video player
});
