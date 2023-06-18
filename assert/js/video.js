// Get the video player element
const videoPlayer = document.getElementById("videoPlayer");

// Define the video sources
const videoSources = [
    "assert/video/01_1.mp4",
    "assert/video/02-2.mp4"
];

// Set the initial source index
let currentSourceIndex = 0;

// Function to play the next video source
function playNextVideo() {
    // Set the source of the video player
    videoPlayer.src = videoSources[currentSourceIndex];

    // Increment the source index
    currentSourceIndex = (currentSourceIndex + 1) % videoSources.length;
}

// Function to stop the video playback
function stopVideo() {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
    videoPlayer.src = "";
}

// Event listener for the play button
const playButton = document.getElementById("playButton");
playButton.addEventListener("click", () => {
    // Start playing the videos when the play button is clicked
    playNextVideo();
});

// Event listener for the modal close button
const modalCloseButton = document.querySelector(".btn-close");
modalCloseButton.addEventListener("click", () => {
    // Stop the video when the modal is closed
    stopVideo();
});

// Event listener for the mouseenter event on the video player
videoPlayer.addEventListener("mouseenter", () => {
    // Stop the video when the mouse enters the video area
    stopVideo();
});

// Event listener for the modal show event
const videoModal = document.getElementById("videoModal");
videoModal.addEventListener("show.bs.modal", () => {
    // Stop the video when the modal is shown
    stopVideo();
});