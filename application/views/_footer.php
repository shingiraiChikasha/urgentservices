<div class="footer bg-success p-3 mt-5 ">
    <div class="container">

        <div class="row">
            <div class="col-md-4 mt-4">
                <!-- <span class="span">Address</span> -->
                <!-- <p>Office 25, April Camel Building <br>5th street <br>Gweru</p> -->
            </div>
            <div class="col-md-4 mt-4">
                <!-- <span class="span">Contacts</span> -->
                <!-- <p>For inquiries contact us on the following platforms.</p>
                <p>Email: <a href="mailto:shingiraichikasha@gmail.com">info@urgentservices.co.zw</a></p> -->

            </div>
            <div class="col-md-4 mt-4">

            </div>
        </div>
        <div class="copy text-center text-50%-small">
            <span>Copyrights &copy; Urgent Services 2022</span>
        </div>

    </div>
</div>
<div class="modal fade" id="myModal" name="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end
                your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('welcome/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</body>

</html>