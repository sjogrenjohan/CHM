<footer>
<div class="container-fluid">
    <div class="row justify-content-center"> 
        <div class="col-sm-3">
            <p class="text-sm-left">Location: Göteborg</p>
            <p class="text-sm-left">Address: Kruthusgatan 17</p>
            <p class="text-sm-left">Kontakta oss: support@gmail.com</p>
        </div>
        <div class ="col-sm-3-end">
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nyhetsbrev</button>
        </div>
    </div>
</div>
<!-- Popup for newsletter signup -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Premunera på CHM's nyhetsbrev</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form name="signUpReg">
                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="text" name="email" class="form-control" id="recipient-name">
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <p class="signedUp"></p>
            <button type="button" class="btn btn-dark" onclick="signUp()">Bekräfta</button>
            </div>
        </div>
    </div>
</div>
</footer>