<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- jquery -->

    <script>
        var regBtn = document.querySelector("#registerLink");
        var regBox = document.querySelector("#registerBox");
        var logBox = document.querySelector("#loginBox");
        function showReg() {
            regBox.classList.add('d-block');
            regBox.classList.remove('d-none');
            logBox.classList.add('d-none');
        };

        function showLog() {
            logBox.classList.add('d-block');
            regBox.classList.add('d-none');
            regBox.classList.remove('d-block');
            logBox.classList.remove('d-none');
        }
        // prevent resubmit
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>