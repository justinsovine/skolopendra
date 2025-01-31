<div class="container mx-auto px-4 text-gray-300">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/015.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/002.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/003.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/004.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/005.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/006.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/007.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/008.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/009.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/028.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/011.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/012.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/013.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/014.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/015.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/016.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/017.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/018.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/019.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/020.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/021.jpg" onclick="openModal(this.src)"></div>
        </div>
        <div class="grid gap-4">
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/022.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/023.jpg" onclick="openModal(this.src)"></div>
            <div><img class="h-auto max-w-full rounded-lg cursor-pointer" src="img/025.jpg" onclick="openModal(this.src)"></div>
        </div>
    </div>
</div>

<!-- Full-Screen Image Modal -->
<div id="imageModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 flex items-center justify-center hidden z-50" onclick="closeModal()">
    <img id="modalImage" class="max-w-full max-h-full rounded-lg shadow-lg">
</div>

<script>
    function openModal(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("imageModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("imageModal").classList.add("hidden");
    }
</script>
