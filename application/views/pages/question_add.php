<?php
/**
 * Created by PhpStorm.
 * User: tech
 * Date: 10-Jan-18
 * Time: 4:56 PM
 */
?>

<div class="cat__content">
    <div class="cat__top-bar__item hidden-sm-down">
            <span class="cat__core__title d-block mb-2">
                <!--<span class="text-muted">Home</span> -->
                <small class="text-muted"><a href="dashboard.php">Home</a> /  Question Add</small>
            </span>
    </div>

    <!-- START: forms/input-mask -->
    <div class="accordion" id="accordion">
        <section class="card">
            <div class="card-header collapsed"  role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <span class="cat__core__title">
                    <strong>Question Add</strong>
                    <span class="accordion-indicator pull-right">
                        <i class="plus fa fa-plus"></i>
                        <i class="minus fa fa-minus"></i>
                    </span>
                </span>
            </div>
            <div id="collapseOne" class="card-collapse collapse" role="tabcard" aria-labelledby="headingOne">
                <div class="card-block">
                <h5 class="text-black"><strong>Question Details</strong></h5>
                <p class="text-muted">Element: read <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="date-and-time-mask-input">Keyword</label>
                                <input type="text" class="form-control" placeholder="Keyword" name="keyword"><!-- id="fulldate-mask-input"-->
                                <small class="text-muted">Keyword</small>
                            </fieldset>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-and-time-mask-input">Is Date</label>
                            <div>
                                <div  class="btn-group " data-toggle="buttons" >
                                    <label class="btn btn-outline-success  active">
                                        <input type="radio" name="example4" checked="">
                                        True
                                    </label>
                                    <label class="btn  btn-outline-danger">
                                        <input type="radio" name="example4">
                                        False
                                    </label>
                                </div>
                            </div>

                            <small class="text-muted">Is Date</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Is Learn</label>
                            <div>
                                <div  class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-outline-success  active">
                                        <input type="radio" name="example4" checked="">
                                        True
                                    </label>
                                    <label class="btn  btn-outline-danger">
                                        <input type="radio" name="example4">
                                        False
                                    </label>
                                </div>
                            </div>
                            <small class="text-muted">Is Learn</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Is Previous</label>
                            <div>
                                <div  class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-outline-success  active">
                                        <input type="radio" name="example4" checked="">
                                        True
                                    </label>
                                    <label class="btn  btn-outline-danger">
                                        <input type="radio" name="example4">
                                        False
                                    </label>
                                </div>
                            </div>
                            <small class="text-muted">Is Previous</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Is Order</label>
                            <div>
                                <div  class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-outline-success  active">
                                        <input type="radio" name="example4" checked="">
                                        True
                                    </label>
                                    <label class="btn  btn-outline-danger">
                                        <input type="radio" name="example4">
                                        False
                                    </label>
                                </div>
                            </div>
                            <small class="text-muted">Is Order</small>
                        </fieldset>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </div>
    <!-- END: forms/input-mask -->

    <!-- START: forms/input-mask -->
    <div class="accordion" id="accordion">
        <section class="card">

            <div class="card-header collapsed"  role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="cat__core__title">
                <strong>Question Add</strong>
                <span class="accordion-indicator pull-right">
                    <i class="minus fa fa-minus"></i>
                    <i class="plus fa fa-plus"></i>
                 </span>
                <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank" class="btn btn-sm btn-primary ml-2">Official Documentation <i class="icmn-link ml-1"><!-- --></i></a>
            </span>
            </div>
            <div id="collapseTwo" class="card-collapse show collapse" role="tabcard" aria-labelledby="headingTwo">
                <div class="card-block">
                <h5 class="text-black"><strong>Add Question , Options And Its Answer</strong></h5>
                <p class="text-muted">Element: read <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-mask-input">Question</label>
                            <textarea class="form-control" name="question" ></textarea>
                            <small class="text-muted">Date mask input: 00/00/0000</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="time-mask-input">Description</label>
                            <textarea class="form-control" name="description" ></textarea>
                            <small class="text-muted">Time mask input: 00:00:00</small>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-and-time-mask-input">Answer</label>
                            <input type="text" class="form-control" placeholder="Answer" name="answer"><!-- id="fulldate-mask-input"-->
                            <small class="text-muted">Enter currect answer</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 1</label>
                            <input type="text" class="form-control" placeholder="Option 1" name="option1">
                            <small class="text-muted">Enter option 1</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 2</label>
                            <input type="text" class="form-control" placeholder="Option 2"name="option2">
                            <small class="text-muted">Enter option 2</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 3</label>
                            <input type="text" class="form-control" placeholder="Option 3" name="option3">
                            <small class="text-muted">Enter option 3</small>
                        </fieldset>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </div>
    <!-- END: forms/input-mask -->

    <!-- START: forms/input-mask -->
    <div class="accordion" id="accordion">
        <section class="card">

            <div class="card-header collapsed"  role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="cat__core__title">
                <strong>Question Add</strong>
                <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                 </span>
                <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank" class="btn btn-sm btn-primary ml-2">Official Documentation <i class="icmn-link ml-1"><!-- --></i></a>
            </span>
            </div>
            <div id="collapseThree" class="card-collapse collapse" role="tabcard" aria-labelledby="headingThree">
                <div class="card-block">
                <h5 class="text-black"><strong>Add Question , Options And Its Answer</strong></h5>
                <p class="text-muted">Element: read <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-mask-input">Question</label>
                            <textarea class="form-control" name="question" ></textarea>
                            <small class="text-muted">Date mask input: 00/00/0000</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="time-mask-input">Description</label>
                            <textarea class="form-control" name="description" ></textarea>
                            <small class="text-muted">Time mask input: 00:00:00</small>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-and-time-mask-input">Answer</label>
                            <input type="text" class="form-control" placeholder="Answer" name="answer"><!-- id="fulldate-mask-input"-->
                            <small class="text-muted">Enter currect answer</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 1</label>
                            <input type="text" class="form-control" placeholder="Option 1" name="option1">
                            <small class="text-muted">Enter option 1</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 2</label>
                            <input type="text" class="form-control" placeholder="Option 2"name="option2">
                            <small class="text-muted">Enter option 2</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 3</label>
                            <input type="text" class="form-control" placeholder="Option 3" name="option3">
                            <small class="text-muted">Enter option 3</small>
                        </fieldset>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </div>
    <!-- END: forms/input-mask -->

    <!-- START: forms/input-mask -->
    <div class="accordion" id="accordion">
        <section class="card">

            <div class="card-header collapsed"  role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseFour">
            <span class="cat__core__title">
                <strong>Question Add</strong>
                <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                 </span>
                <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank" class="btn btn-sm btn-primary ml-2">Official Documentation <i class="icmn-link ml-1"><!-- --></i></a>
            </span>
            </div>
            <div id="collapseFour" class="card-collapse  collapse" role="tabcard" aria-labelledby="headingFour">
                <div class="card-block">
                <h5 class="text-black"><strong>Add Question , Options And Its Answer</strong></h5>
                <p class="text-muted">Element: read <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-mask-input">Question</label>
                            <textarea class="form-control" name="question" ></textarea>
                            <small class="text-muted">Date mask input: 00/00/0000</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="time-mask-input">Description</label>
                            <textarea class="form-control" name="description" ></textarea>
                            <small class="text-muted">Time mask input: 00:00:00</small>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="date-and-time-mask-input">Answer</label>
                            <input type="text" class="form-control" placeholder="Answer" name="answer"><!-- id="fulldate-mask-input"-->
                            <small class="text-muted">Enter currect answer</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 1</label>
                            <input type="text" class="form-control" placeholder="Option 1" name="option1">
                            <small class="text-muted">Enter option 1</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 2</label>
                            <input type="text" class="form-control" placeholder="Option 2"name="option2">
                            <small class="text-muted">Enter option 2</small>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset class="form-group">
                            <label class="form-label" for="zip-code-mask-input">Option 3</label>
                            <input type="text" class="form-control" placeholder="Option 3" name="option3">
                            <small class="text-muted">Enter option 3</small>
                        </fieldset>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </div>
    <!-- END: forms/input-mask -->

    <!-- START: page scripts -->
    <script>
        $(function() {

            $('#fulldate-mask-input').mask("AA 00/00/0000 00:00:00", {placeholder: "__ __/__/____ __:__:__"});
            $('#date-mask-input').mask("00/00/0000/AA", {placeholder: "__/__/____"});
            $('#time-mask-input').mask('00:00:00', {placeholder: "__:__:__"});
            $('#date-and-time-mask-input').mask('00/00/0000 00:00:00', {placeholder: "__/__/____ __:__:__"});
            $('#zip-code-mask-input').mask('00000-000', {placeholder: "_____-___"});
            $('#money-mask-input').mask('000.000.000.000.000,00', {reverse: true});
            $('#phone-mask-input').mask('0000-0000', {placeholder: "____-____"});
            $('#phone-with-code-area-mask-input').mask('(00) 0000-0000', {placeholder: "(__) ____-____"});
            $('#us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
            $('#ip-address-mask-input').mask('099.099.099.099');
            $('#mixed-mask-input').mask('AAA 000-S0S');

        });
    </script>
    <!-- END: page scripts -->
