<?php
include_once "inc/header.php";
?>
    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Profile</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">Home</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">user</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">Edit Profile</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">
                <div class="page-content">
                    <div class="boxedtitle page-title"><h2>Edit Profile</h2></div>
                    <div class="form-style form-style-4">
                        <form>
                            <div class="form-inputs clearfix">
                                <p>
                                    <label>First Name</label>
                                    <input type="text">
                                </p>
                                <p>
                                    <label>Last Name</label>
                                    <input type="text">
                                </p>
                                <p>
                                    <label class="required">E-Mail<span>*</span></label>
                                    <input type="email">
                                </p>
                                <p>
                                    <label>Website</label>
                                    <input type="text">
                                </p>
                                <p>
                                    <label class="required">Password<span>*</span></label>
                                    <input type="password" value="">
                                </p>
                                <p>
                                    <label class="required">Confirm Password<span>*</span></label>
                                    <input type="password" value="">
                                </p>
                                <p>
                                    <label>Country</label>
                                    <input type="text">
                                </p>
                            </div>
                            <div class="form-style form-style-2">
                                <div class="user-profile-img"><img src="http://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt="admin"></div>
                                <p class="user-profile-p">
                                    <label>Profile Picture</label>
                                <div class="fileinputs">
                                    <input type="file" class="file">
                                    <div class="fakefile">
                                        <button type="button" class="button small margin_0">Select file</button>
                                        <span><i class="icon-arrow-up"></i>Browse</span>
                                    </div>
                                </div>
                                <p></p>
                                <div class="clearfix"></div>
                                <p>
                                    <label>About Yourself</label>
                                    <textarea cols="58" rows="8"></textarea>
                                </p>
                            </div>
                            <div class="form-inputs clearfix">
                                <p>
                                    <label>Facebook</label>
                                    <input type="text">
                                </p>
                                <p>
                                    <label>Twitter</label>
                                    <input type="text">
                                </p>
                                <p>
                                    <label>Linkedin</label>
                                    <input type="email">
                                </p>
                                <p>
                                    <label>Google plus</label>
                                    <input type="text">
                                </p>
                            </div>
                            <p class="form-submit">
                                <input type="submit" value="Update" class="button color small login-submit submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
<?php
include_once "inc/sidebar.php";
include_once "inc/footer.php";
?>