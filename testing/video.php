<div class="col-lg-6">
    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 50%;">
        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="assert/video/02-2.mp4" data-src2="assert/video/second-video.mp4" data-bs-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">DAFY Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <video class="embed-responsive-item" id="video" controls autoplay>
                        <source src="" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var videoModal = document.getElementById('videoModal');
    var videoElement = document.getElementById('video');
    var btnPlay = document.getElementsByClassName('btn-play')[0];
    var videoSource = btnPlay.getAttribute('data-src');
    var videoSource2 = btnPlay.getAttribute('data-src2');

    btnPlay.addEventListener('click', function() {
        videoElement.src = videoSource;
        videoModal.addEventListener('hidden.bs.modal', function() {
            videoElement.src = videoSource2;
            videoModal.removeEventListener('hidden.bs.modal');
        });
    });
</script>
