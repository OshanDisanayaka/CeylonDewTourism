<!--Navigation scrolling changes-->
<script>
    function scrollValue() {
        var navbar = document.getElementById('navbar');
        var scroll = window.scrollY;
        if (scroll < 400) {
            navbar.classList.remove('BgColour');
        } else {
            navbar.classList.add('BgColour');
        }
    }
    window.addEventListener('scroll', scrollValue);
</script>

<!--Navigation code-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top mobilenav" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand headertitle" href="index.php">CeylonDew</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link headerfont" id="nav-menu1" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link headerfont" id="nav-menu2" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link headerfont" id="nav-menu3" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link headerfont" id="nav-menu4" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>