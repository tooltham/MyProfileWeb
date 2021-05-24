<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>:: Course ::</title>
    <meta name=“author” content=“Apirak Tooltham” />
    <meta neme=“Description” content=“อภิรักษ์ ทูลธรรม, Apirak Tooltham works in IoTES LAB (Internet of Things and Embedded Systems Laboratory) at Nakhon Phanom University (NPU), Thailand. He work as a Lecturer, Programmer, and Researcher. He was interested in programming with R & Python, Internet of Things, Artificial Intelligence, Image Processing, Data Science, Digital Marketing, Photography, Urban Sketch, Books, Manga, and Game Console.” />
    <meta name=“keywords” content=“Apirak, Tooltham, NPU, IoTES, Python, R, IoT, AI, Data Science, Digital Marketing, Image Processing, Embedded Systems” />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="hamburger-menu">
        <button class="burger" data-state="closed">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <nav data-state="closed">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="class.html">Class</a>
            </li>
            <li>
                <a href="portfolio.html">Portfolio</a>
            </li>
            <li>
                <a href="research.html">Research</a>
            </li>
            <li>
                <a href="lab.html">IoTES LAB</a>
            </li>
            <li>
                <a href="contact.html">Contact Us</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p></p>
                    <center>
                        <!-- <img src="images/under-construction.jpg" width="350"> -->
                        <embed src="media/my_video01.mp4" autostart="true" width="400" height="225" />
                    </center>
                    <p></p>
                </div>
                <div class="col-md-6 align-self-center">
                    <center>
                        <h2>
                            <font color="red">SORRY, WE ARE</font>
                        </h2>
                        <h3>
                            <font color="red">UNDER CONSTRUCTION</font>
                        </h3>
                        <p></p>
                        <h5>" We are currently working on this site.</h5>
                        <h5>Our website is coming soon. "</h5>
                        <p></p><br />
                        <button class="btn green" onclick="location.href='index.html';" /> &nbsp;HOME&nbsp; </button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn green" onclick="location.href='contact.html';" />CONTACT</button>
                    </center>
                </div>
            </div>
            <row>
                <div class="col-md-10 align-self-center">
                    <p></p><br /><br />
                    <center>
                        © 2021 IoTES Laboratory.<br />
                        Powered by <a href="https://dc.npu.ac.th/" target="_blank"><b>Digital Center</b></a>, Nakhon Phanom University.
                    </center>
                    <p></p><br /><br />
                </div>
            </row>
        </div>
    </main>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js'></script>
    <script src="./js/script.js"></script>
    <script type="text/javascript">
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    var omitformtags = ["input", "textarea", "select"];
    omitformtags = omitformtags.join("|");

    function disableselect(e) {
        if (omitformtags.indexOf(e.target.tagName.toLowerCase()) == -1)
            return false
    }

    function reEnable() {
        return true
    }
    if (typeof document.onselectstart != "undefined") {
        document.onselectstart = new Function("return false")
    } else {
        document.onmousedown = disableselect;
        document.onmouseup = reEnable;
    }
    </script>
</body>

</html>