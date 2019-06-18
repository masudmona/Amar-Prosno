<?php
include_once "inc/header.php";
?>

<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ask Question</h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="#">Home</a>
                    <span class="crumbs-span">/</span>
                    <a href="#">Pages</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">Ask Question</span>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="container main-content">
    <div class="row">
        <div class="col-md-9">
            <div class="page-content ask-question">
                <div class="boxedtitle page-title"><h2>Ask Question</h2></div>
                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                <div class="form-style form-style-3" id="question-submit">
                    <form>
                        <div class="form-inputs clearfix">
                            <p>
                                <label class="required">Question Title<span>*</span></label>
                                <input type="text" id="question-title">
                                <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                            </p>

                            <p>
                                <label class="required">Category<span>*</span></label>
                                <span class="styled-select">
                                    <select>
                                    <option value="">Select a Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    </select>
                                </span>
                                <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
                            </p>

                            <div class="clearfix"></div>

                            <label>Attachment</label>
                            <div class="fileinputs">
                                <input type="file" class="file">
                                <div class="fakefile">
                                    <button type="button" class="button small margin_0">Select file</button>
                                    <span><i class="icon-arrow-up"></i>Browse</span>
                                </div>
                            </div>
                        </div>
                        <div id="form-textarea">
                            <p>
                                <label class="required">Details<span>*</span></label>
                                <textarea id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                <span class="form-description">Type the description thoroughly and in detail .</span>
                            </p>
                        </div>
                        <p class="form-submit">
                            <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
                        </p>
                    </form>
                </div>
            </div>
        </div>

<?php
include_once "inc/sidebar.php";
include_once "inc/footer.php";
?>
