<?php 
    include ('include/header.php');
?>
<link href="assets/css/register.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
    $("#datepicker").datepicker();
});
</script>

<div class="row">
    <div class="col-md-4">
        <div class="wrapper">
            <div class="form_regis">
                <div class="title">
                    Registration Form
                </div>
                <form>
                    <div class="bungkus">
                        <div class="inp_bungkus">
                            <div class="inputBungkus">
                                <label for="fname">Nama</label>
                                <input type="text" id="fname" name="nama">
                            </div>
                        </div>
                        <div class="inputBungkus">
                            <label for="datepicker">Tanggal: </label>
                            <input type="date" id="datepicker" value="dd-mm-yyyy">
                        </div>
                        <div class="inputBungkus">
                            <label>Gender</label>
                            <ul>
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="gender" value="male" class="input_radio" checked>
                                        <span>Male</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="gender" value="female" class="input_radio">
                                        <span>Female</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="inputBungkus">
                            <label for="city">City</label>
                            <input type="text" id="city">
                        </div>
                        <div class="inputBungkus">
                            <label for="country">Country</label>
                            <input type="text" id="country">
                        </div>
                        <div class="inputBungkus">
                            <input type="submit" value="Register Now" class="submit_btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php 
    include ('include/footer.php');
?>