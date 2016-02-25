
<?php include_once('comp-header.php'); ?>

                <div id="main">                
                    <div class="content"> 
                        <h2>Contact us</h2>
                        <hr />
                        <article>
                            <p id="map"></p>
                            <div class="grid-row">
                                <div class="grid6 style2">
                                    <form action="#" method="post" onsubmit="return contact()">
                                        <label>Your name<span class="required"> [required]</span></label>
                                        <input type="text" name="contact_name" id="contact_name" value="" />
                                        <label>Your email<span class="required"> [required]</span></label>
                                        <input type="text" name="contact_email" id="contact_email" value="" />
                                        <label>Textarea Field</label>
                                        <textarea name="contact_message" id="contact_message" cols="10" rows="2"></textarea>
                                        <input type="submit" name="form_submit" value="Submit" />
                                        <input type="reset" name="form_reset" value="Reset" />
                                        <br class="clear" />
                                    </form>
                                    <div class="valid" id="valid-contact">
                                        Thank you for your message!
                                    </div>
                                    <div class="invalid" id="invalid-contact">
                                        Please complete all the fields!
                                    </div>
                                </div>
                                <div class="grid6 style2">
                                    <h3>Address</h3>
                                    <p>
                                        Nulla at quam non arcu scelerisque condimentum vel in orci. Duis ac quam sit amet ipsum consequat ultricies. Nam cursus ante eget est tempor cursus. Morbi vel felis dui, ac tincidunt odio. Nunc congue ante ut lacus scelerisque accumsan.
                                    </p>
                                    <p>
                                        Park Avenue<br />
                                        100 East 63rd Street<br />
                                        New York City
                                        <br /><br />
                                        NY, United States
                                    </p>
                                </div>
                                <br class="clear" />
                            </div>
                        </article>
                    </div> 
                </div>

<?php include_once('comp-footer.php'); ?>